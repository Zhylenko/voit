@extends('mail.layouts.app')

@section('title', $title)

@section('content')
                    <tr>
                        <td class="content" bgcolor="#ffffff" style="padding-top: 50px; padding-bottom: 50px;">
                            <table class="table-480" cellpadding="0" cellspacing="0" width="480" align="center">
                                <tr>
                                    <td class="name-title" align="center">
                                        <p class="name" style="font-size: 18px; color: #121212;">
                                            Здраствуйте, <span class="user-name" style="color: #2275AB;">User Name</span>!
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="title" align="center">
                                        <h1 style="font-size: 36px; color: #121212; line-height: 36px;">
                                            <span style="color: #2275AB;">Спасибо вам</span> <br /> <span style="font-size: 30px;">за заказ наших курсов!</span>
                                        </h1>
                                        <p style="font-size: 18px; color: #414141; padding-top: 15px; padding-bottom: 15px; font-weight: 500;">                                            
                                            Ниже представлены ссылки на прохождения курса
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code-bg" bgcolor="#E8F1F6" style="padding-bottom: 20px;">
                                        <table class="table-320" cellpadding="0" cellspacing="0" width="400" align="center">
                                            <tr>
                                                <td class="item" align="center">
                                                    <h3 class="youtube-title" style="font-size: 18px; color: #2275AB">
                                                        Ссылка на YouTube видео:
                                                    </h3>
                                                    <a class="youtube-link" href="https://www.youtube.com/watch?v=iO7BxnZ4EZ0" style="color: #121212;">
                                                        https://www.youtube.com/watch?v=iO7BxnZ4EZ0
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="30" width="600"></td>
                                </tr>
                                <tr>
                                    <td class="code-bg" bgcolor="#E8F1F6" style="padding-bottom: 20px;">
                                        <table class="table-320" cellpadding="0" cellspacing="0" width="400" align="center">
                                            <tr>
                                                <td class="item" align="center">
                                                    <h3 class="doc-title" style="font-size: 18px; color: #2275AB">
                                                        Ссылка на загрузку дополнительных файлов:
                                                    </h3>
                                                    <a class="doc-link" href="https://www.google.com/intl/ru/docs/about/" style="color: #121212;">
                                                        https://www.google.com/intl/ru/docs/about/
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="30" width="600"></td>
                                </tr>
                                <tr>
                                    <td class="code-bg" bgcolor="#E8F1F6" style="padding-bottom: 20px;">
                                        <table class="table-320" cellpadding="0" cellspacing="0" width="400" align="center">
                                            <tr>
                                                <td class="item" align="center">
                                                    <h3 class="test-title" style="font-size: 18px; color: #2275AB">
                                                        Ссылка на прохождение теста:
                                                    </h3>
                                                    <a class="test-link" href="#" style="color: #121212;">
                                                        test.com
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
@endsection