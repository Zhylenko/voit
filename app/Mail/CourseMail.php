<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Models\Course;
use App\Models\User;

class CourseMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;

    protected $course, $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Course $course, User $user)
    {
        $this->subject  = trans('mail.subjects.course', ['name' => $course->name]);
        $this->course   = $course;
        $this->user     = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $course     = $this->course;
        $user       = $this->user;
        $subject    = $this->subject;

        return $this->view('mail.course.index')
                    ->with([
                        'title'     => $subject,
                        'user'      => $user,
                        'course'    => $course,
                    ])
                    ->subject($subject);
    }
}
