@extends('mail.layouts.app')

@section('title', $title)

@section('content')
                    <tr>
                        <td class="content" bgcolor="#ffffff" style="padding-bottom: 50px;">
                            <table class="table-480" cellpadding="0" cellspacing="0" width="480" align="center">
                                <tr>
                                    <td class="title" align="center">
                                        <h1 style="font-size: 36px; color: #121212;">
                                            Восстановление пароля
                                        </h1>
                                        <p style="font-size: 18px; color: #414141; padding-top: 15px; padding-bottom: 15px;">                                            
                                            Чтобы восстановить пароль, пожалуйста перейдите по ссылке ниже:
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code-bg" bgcolor="#efefef">
                                        <table class="table-320" height="50" cellpadding="0" cellspacing="0" width="320" align="center">
                                            <tr>
                                                <td class="code" align="center">
                                                    <a class="code-text" href="{{ $link }}" style="font-size: 24px; color:#2275AB;">
                                                        Нажать
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="subtitle" align="center">
                                        <p style="font-size: 18px; color: #414141; padding-top: 15px; padding-bottom: 15px;">
                                            Если вы не собирались восстанавливать пароль на <a href="{{ Route('index') }}" style="color: #2275AB;">{{ Route('index') }}</a>, не обращайте внимания на это сообщение.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
@endsection