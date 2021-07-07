@include('mail.layouts.styles')

<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!-- Main Styles -->
    @yield('styles')
</head>
<body>	
	<!-- Content -->
	<div style="font-size:0px;font-color:#ffffff;opacity:0;visibility:hidden;width:0;height:0;display:none;">Voiti v It Life. </div>
	<table cellpadding="0" cellspacing="0" width="100%" bgcolor="#2275AB">
        <tr>
            <td>
                <table class="main table-600" cellpadding="0" cellspacing="0" width="600" align="center">    
                    <tr>
                        <td height="30" width="600"></td>
                    </tr>
                    <tr>
                        <td class="header-td" bgcolor="#ffffff">
                            <table class="table-480" cellpadding="0" cellspacing="0" width="480" align="center">
                                <tr>
                                    <td class="logo" align="center">
                                        <a href="{{ Route('index') }}" title="voitivitlife.com" target="_blank">
                                            <img width="300" src="{{ Route('index') }}/img/letter-logo.png" alt="logo" style="margin-top: 20px;"/>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
					@yield('content')
					<tr>
                        <td height="30" width="600"></td>
                    </tr>
                </table>
            </td>
        </tr>
	</table>
</body>
</html>