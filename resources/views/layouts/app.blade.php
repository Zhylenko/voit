@include('layouts.preloader')
@include('layouts.header')
@include('layouts.top-button')
@include('layouts.footer')
<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
    @yield('styles')
	<!-- Main Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    @yield('preloader')
    @yield('header')
	<!-- Content -->
	<article>
        @yield('content')
	</article>
    @yield('top-button')
	@yield('footer')

	<!-- Scripts -->
	@yield('scripts')
</body>
</html>