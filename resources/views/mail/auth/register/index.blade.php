@extends('mail.layouts.app')

@section('title', $title)

@section('content')
                    <tr>
                        <td class="content" bgcolor="#ffffff" style="padding-top: 80px; padding-bottom: 50px;">
                            <table class="table-480" cellpadding="0" cellspacing="0" width="480" align="center">
                                <tr>
                                    <td class="title" align="center">
                                        <h1 style="font-size: 36px; color: #121212;">
                                            Завершите регистрацию
                                        </h1>
                                        <p style="font-size: 18px; color: #414141; padding-top: 15px; padding-bottom: 15px;">                                            
                                            Пожалуйста, введите этот пароль в окне, в котором вы начали создание учетной записи:
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code-bg" bgcolor="#efefef">
                                        <table class="table-320" cellpadding="0" cellspacing="0" width="320" align="center">
                                            <tr>
                                                <td class="code" align="center">
                                                    <h3 class="code-text" style="font-size: 30px;">
                                                        {{ $password }}
                                                    </h3>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="subtitle" align="center">
                                        <p style="font-size: 18px; color: #414141; padding-top: 15px; padding-bottom: 15px;">
                                            Если вы не создавали учетную запись в <span style="color: #2275AB;">{{ Route('index') }}</span>, не обращайте внимания на это сообщение.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
@endsection