@include('layouts.header')
@include('layouts.scripts')

<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    
    @yield('styles')
	<!-- Main Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css') }}">
</head>
<body>
    @yield('header')
	<!-- Content -->
	<article>
        @yield('content')
	</article>

	<!-- Scripts -->
	@yield('scripts')
</body>
</html>