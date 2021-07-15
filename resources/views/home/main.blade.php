@include('layouts.auth')
@include('home.challenge')

@section('main')
<section class="home">
    <div class="container">
        <div class="header__content fix">
            <div class="content__left">
                <div class="left__top">
                    <h1 class="left__top-title">"Войти в IT"</h1>
                    <h2 class="left__top-subtitle">Курсы подготовки к старту профессии в АйТи сфере</h2>
                    <div class="left__top-info">Инвестируй в себя, научись <span>зарабатывать 320 $</span> в день, не выходя из дома.</div>
                </div>
                <div class="left__bottom">
                    <div class="left__bottom-block">
                        <div class="left__bottom-info">Пройди <span>бесплатный</span> тест и узнай, насколько тебе подходит сфера IT!</div>
                        <img class="left__bottom-arrow" src="{{ asset('img/arrow-to.svg') }}" alt="arrow">
                    </div>

                    <button class="left__bottom-btn but-init popup-btn" id="popup-Btn">
                        Пройти Тест
                        <img src="{{ asset('img/paper-plane.svg') }}" alt="plane">
                    </button>
                </div>
            </div>
            
            @if(isset($auth) && $auth === true)
            @yield('challenge')
            @else
            @yield('auth')
            @endif

            <div class="content__right">
                <img src="{{ asset('img/header-image.svg') }}" alt="graphic">
            </div>
        </div>
    </div>
</section>
@endsection