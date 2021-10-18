<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;

use App\Mail\CourseMail;

use App\Models\Course;
use App\Models\Purchase;
use App\Models\User;
use App\Models\UsersCourse;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Storage;
use \Maksa988\WayForPay\Domain\Client as WayForPayClient;
use \Maksa988\WayForPay\Collection\ProductCollection;
use \WayForPay\SDK\Domain\Product;
use \WayForPay;

class CourseController extends Controller
{
    public function payment(Request $request)
    {
        if ($request->auth === true) {
            $userId  = json_decode(Cookie::get('auth'), 1)['id'];
            $user    = User::where('id', $userId)->first();
        } else {
            $json = [
                'message' => '',
                'errors' => [
                    'answer' => trans('course.not.auth'),
                ]
            ];
            return response()->json($json, 403);
        }

        $courseName  = $request->name;
        $course      = Course::where('name', $courseName)->with('links')->first();

        if (empty($course)) {
            $json = [
                'message' => '',
                'errors' => [
                    'answer' => trans('challenge.not.exists'),
                ]
            ];
            return response()->json($json, 403);
        }

        $purchase   = new Purchase;
        $purchase->createPurchase($user, $course);

        $orderId    = $purchase->order_id;
        $client     = new WayForPayClient('', '', $user->email);
        $products   = new ProductCollection([
            new Product($course->name, $course->price, 1),
        ]);
        $amount     = $course->price;

        $purchaseForm = $this->generatePurchaseForm($orderId, $client, $products, $amount);

        return view('course.payment', [
            'form' => $purchaseForm,
        ]);
    }

    public function handler(Request $request)
    {
        $request = json_decode($request->getContent(), true);

        return WayForPay::handleServiceUrl($request, function (\WayForPay\SDK\Domain\TransactionService $transaction, $success) {
            $purchase           = Purchase::where('order_id', $transaction->getOrderReference())->first();
            $transactionStatus  = $transaction->getStatus();

            $purchase->updateStatus($transactionStatus);

            if ($transaction->getReason()->isOK()) {

                $courseId    = $purchase->course_id;
                $course      = Course::where('id', $courseId)->with('links')->first();

                $userId      = $purchase->user_id;
                $user        = User::where('id', $userId)->first();

                $usersCourse = UsersCourse::where([['user_id', $userId], ['course_id', $courseId]])->first();

                if (empty($usersCourse)) {
                    $usersCourse = new UsersCourse();
                    $usersCourse->addUser($user, $course);

                    Mail::to($user->email)
                        ->send(new CourseMail($course, $user));
                }


                return $success();
            }

            return "Error: " . $transaction->getReason()->getMessage();
        });
    }

    public function file(Request $request, $path)
    {
        if ($request->auth === true) {
            $userId         = json_decode(Cookie::get('auth'), 1)['id'];
            $user           = User::where('id', $userId)->with('courses')->first();

            foreach ($user->courses as $course) {
                foreach ($course->links as $courseLink) {
                    if (Route('course-file', ['path' => $path]) == $courseLink->url) {
                        $file       = Storage::get('public/' . $path);
                        $mimeType   = Storage::mimeType('public/' . $path);
                        
                        return response($file)->header('Content-Type', $mimeType);
                    }
                }
            }
        }

        return redirect(Route('account'));
    }

    protected function generatePurchaseForm($orderId, WayForPayClient $client, ProductCollection $products, $amount = 1)
    {
        $data   = WayForPay::purchase($orderId, $amount, $client, $products, 'UAH', null, 'RU', null, null, Route('course-handler'))->getAsString('', '');

        return $data;
    }
}
