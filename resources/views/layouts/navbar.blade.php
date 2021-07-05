@section('navbar')
                <ul>
                    <a href="{{ route('home') }}"><li>Główna</li></a>
					<a href="{{ !Route::is('home') ? route('home') : ''}}{{ asset('#galeria') }}"><li>Galeria</li></a>
					<a href="{{ !Route::is('home') ? route('home') : ''}}{{ asset('#zamówić') }}"><li>Jak zamówić</li></a>
					<a href="{{ route('faq') }}"><li>FAQ</li></a>
					<a href="{{ !Route::is('home') ? route('home') : ''}}{{ asset('#kontakt') }}"><li>Kontakt</li></a>
                </ul>
@endsection