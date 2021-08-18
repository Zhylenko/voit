@include('layouts.header')
@include('layouts.scripts')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title')</title>

	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.gstatic.com">	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;600&display=swap" rel="stylesheet">
    
    @yield('styles')
	<!-- Main Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css') }}">
</head>
<body>
    @yield('header')
	
	<!-- Content -->
	@yield('content')

	<!-- Scripts -->
	@yield('scripts')
</body>
</html>