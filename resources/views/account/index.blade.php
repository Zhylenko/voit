@extends('layouts.app')

@section('title', 'Войти в айти | Личный кабинет')

@section('styles')
@endsection

@include('layouts.auth')

@section('content')
    <article class="article-offer fix" id="article-bg">
        <section class="cabinet">
            <div class="container">
                <div class="intro__content">

                    <h1 class="intro__title">Мои заказы</h1>

                    @if(isset($auth) && $auth === true)
                    <div class="programm__inner cabinet__inner">
                        <div class="programm__menu cabinet-menu">

                            <div class="programm__menu-item cabinet__item active">

                                <div class="programm__menu-line cabinet-line">
                                    <div class="programm__menu-title"><span>Курс 1</span></div>
                                    <button class="programm__menu-btn">
                                        <img src="{{ asset('img/arrow-btn.svg') }}" alt="arrow">
                                    </button>
                                </div>

                                <div class="programm__menu-block cabinet__menu">
                                    <div class="programm__subblock cabinet__subblock">
                                        <div class="programm__subblock-sup">
                                            КУРС #1
                                        </div>

                                        <div class="cabinet__info-box">
                                            <div class="programm__subblock-desc cabinet-desc">
                                                Видеокурс <span class="course-no">1</span>: <span class="cabinet__name">Вход</span>
                                            </div>
                                            <a class="but-init cabinet__link" href="#">Смотреть</a>
                                        </div>

                                        <div class="cabinet__info-box">
                                            <div class="programm__subblock-desc cabinet-desc">
                                                Видеокурс <span class="course-no">2</span>: <span class="cabinet__name">Профессии</span>
                                            </div>
                                            <a class="but-init cabinet__link" href="#">Смотреть</a>
                                        </div>

                                        <div class="cabinet__info-box">
                                            <div class="programm__subblock-desc cabinet-desc">
                                                <span class="course-file">Шаблон резюме</span>
                                            </div>
                                            <button class="but-init cabinet__link download-btn">Скачать</button>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="programm__menu-item">

                                <div class="programm__menu-line cabinet-line">
                                    <div class="programm__menu-title"><span>Курс 2</span></div>
                                    <button class="programm__menu-btn">
                                        <img src="{{ asset('img/arrow-btn.svg') }}" alt="arrow">
                                    </button>
                                </div>

                                <div class="programm__menu-block">
                                    <div class="programm__subblock cabinet__subblock">
                                        <div class="programm__subblock-sup">
                                            КУРС #2
                                        </div>

                                        <div class="cabinet__info-box">
                                            <div class="programm__subblock-desc cabinet-desc">
                                                Видеокурс <span class="course-no">1</span>: <span class="cabinet__name">Вход</span>
                                            </div>
                                            <a class="but-init cabinet__link" href="#">Смотреть</a>
                                        </div>

                                        <div class="cabinet__info-box">
                                            <div class="programm__subblock-desc cabinet-desc">
                                                Видеокурс <span class="course-no">2</span>: <span class="cabinet__name">Профессии</span>
                                            </div>
                                            <a class="but-init cabinet__link" href="#">Смотреть</a>
                                        </div>

                                        <div class="cabinet__info-box">
                                            <div class="programm__subblock-desc cabinet-desc">
                                                <span class="course-file">Шаблон резюме</span>
                                            </div>
                                            <button class="but-init cabinet__link download-btn">Скачать</button>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="programm__menu-item">

                                <div class="programm__menu-line cabinet-line">
                                    <div class="programm__menu-title"><span>Курс 3</span></div>
                                    <button class="programm__menu-btn">
                                        <img src="{{ asset('img/arrow-btn.svg') }}" alt="arrow">
                                    </button>
                                </div>

                                <div class="programm__menu-block">
                                    <div class="programm__subblock cabinet__subblock">
                                        <div class="programm__subblock-sup">
                                            КУРС #3
                                        </div>

                                        <div class="cabinet__info-box">
                                            <div class="programm__subblock-desc cabinet-desc">
                                                Видеокурс <span class="course-no">1</span>: <span class="cabinet__name">Вход</span>
                                            </div>
                                            <a class="but-init cabinet__link" href="#">Смотреть</a>
                                        </div>

                                        <div class="cabinet__info-box">
                                            <div class="programm__subblock-desc cabinet-desc">
                                                Видеокурс <span class="course-no">2</span>: <span class="cabinet__name">Профессии</span>
                                            </div>
                                            <a class="but-init cabinet__link" href="#">Смотреть</a>
                                        </div>

                                        <div class="cabinet__info-box">
                                            <div class="programm__subblock-desc cabinet-desc">
                                                <span class="course-file">Шаблон резюме</span>
                                            </div>
                                            <button class="but-init cabinet__link download-btn">Скачать</button>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    @else
                    <div class="intro__empty">
                        <div class="intro__box">
                            <img class="empty-box" src="{{ asset('img/empty-box.png') }}" alt="">
                            <div class="intro__subtitle">Тут пусто</div>
                        </div>

                        <div class="intro__text">
                            <button class="intro__text-login popup-btn" href="./cabinet.html">Авторизируйтесь</button>чтобы просмотреть все ваши заказы
                        </div>

                        @yield('auth')
                    </div>
                    @endif

                </div>
            </div>
        </section>
    </article>
@endsection