@section('navbar')
                    <nav class="menu">
						<ul class="menu__list">
							<li class="menu__item"><a class="menu__link" href="{{ !Route::is('index') ? Route('index') : ''}}{{ asset('#home') }}">Главная</a></li>
							<li class="menu__item"><a class="menu__link" href="{{ !Route::is('index') ? Route('index') : ''}}{{ asset('#about') }}">О нас</a></li>
							<li class="menu__item"><a class="menu__link" href="{{ !Route::is('index') ? Route('index') : ''}}{{ asset('#programm') }}">Программа</a></li>
							<li class="menu__item"><a class="menu__link" href="{{ !Route::is('index') ? Route('index') : ''}}{{ asset('#price') }}">Цена</a></li>
							<li class="menu__item"><a class="menu__link" href="{{ !Route::is('index') ? Route('index') : ''}}{{ asset('#feedback') }}">Отзывы</a></li>
							<li class="menu__item"><a class="menu__link" href="{{ !Route::is('index') ? Route('index') : ''}}{{ asset('#contact') }}">Контакты</a></li>
						</ul>
					</nav>
@endsection