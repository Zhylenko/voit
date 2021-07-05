@include('layouts.navbar')
@section('header')
    <!-- Header -->
    <header class="header">
		<div class="container">
			<div class="header__top fix">
				<div class="header__group">
					<div class="logo">
						<a class="logo__link" href="{{ Route('index') }}">
							<picture class="logo__picture">
								<source srcset="{{ asset('img/logo-2.png') }}" media="(max-width: 768px)">
								<img src="{{ asset('img/logo-1.png') }}" alt="logo">
							</picture>
						</a>
					</div>

					<div class="mobile-menu fix">
						<a href="#" class="menu-hamburger">
							<div></div>
						</a>
					</div>

					<div class="empty"></div>
					
					@yield('navbar')
		
					<div class="left-side">
						<div class="phone">
							<a class="phone__link" href="tel:+380951234567">+38 095 123 45 67</a>
						</div>
				
						<div class="account">
							<div class="account__link">Мой аккаунт</div>
							<a class="account__btn log-in" href="{{ Route('account') }}">
								<img class="account__img" src="{{ asset('img/user.svg') }}" alt="user">
							</a>
							<a class="account__btn log-out" href="{{ Route('account-logout') }}">
								<img class="account__img" src="{{ asset('img/logout.svg') }}" alt="user">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
@endsection