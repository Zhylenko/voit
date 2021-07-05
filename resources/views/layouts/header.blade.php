@include('layouts.navbar')
@section('header')
    <!-- Header -->
    <header id="top">
		<div class="logo-block">
			<a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="Logo"></a>
		</div>
		<div class="navbar-block">
			<div class="navbar">
				<div class="title">
					<p>MENU</p>
				</div>
				@yield('navbar')
			</div>
			<div class="btn-block">
				<a href="{{ route('constructor') }}">
					<div class="white-button">
						<p>Ułóż gwiazdy</p>
					</div>
				</a>
			</div>
		</div>
		<div class="burger">
			<div class="burger-block">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</header>
@endsection