@extends('mail.layouts.app')

@section('title', $title)

@section('content')
                    <tr>
                        <td class="content" bgcolor="#ffffff" style="padding-top: 80px; padding-bottom: 50px;">
                            <table class="table-480" cellpadding="0" cellspacing="0" width="480" align="center">
                                <tr>
                                    <td class="title" align="center">
                                        <h1 style="font-size: 36px; color: #121212; padding-bottom: 20px;">
                                            {{ $title }}
                                        </h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="code-bg" bgcolor="#efefef">
                                        <table class="form-320" cellpadding="0" cellspacing="0" width="460" align="center">
                                            <tr>
                                                <td class="item" align="left">
                                                    <h3 class="text" style="font-size: 18px;">
                                                        Имя:
                                                    </h3>
                                                </td>
                                                <td class="input" align="left">
                                                    <p style="font-size: 16px; padding-left: 90px;">
                                                        {{ $name }}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item" align="left">
                                                    <h3 class="text" style="font-size: 18px;">
                                                        Фамилия:
                                                    </h3>
                                                </td>
                                                <td class="input" align="left">
                                                    <p style="font-size: 16px; padding-left: 90px;">
                                                        {{ $surname }}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item" align="left">
                                                    <h3 class="text" style="font-size: 18px;">
                                                        Email:
                                                    </h3>
                                                </td>
                                                <td class="input" align="left">
                                                    <p style="font-size: 16px; padding-left: 90px;">
                                                        {{ $email }}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item" align="left">
                                                    <h3 class="text" style="font-size: 18px;">
                                                        Сообщение:
                                                    </h3>
                                                </td>
                                                <td class="input" align="left">
                                                    <p style="font-size: 16px; padding-left: 90px;">
                                                        {{ $text }}
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
@endsection