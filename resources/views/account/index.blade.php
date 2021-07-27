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
                            @if($courses !== null)
                            @foreach($courses as $course)
                            <div class="programm__menu-item cabinet__item {{ ($loop->index == 0) ? 'active' : '' }}">
                                <div class="programm__menu-line cabinet-line">
                                    <div class="programm__menu-title"><span>Курс "{{ $course->name }}"</span></div>
                                    <button class="programm__menu-btn">
                                        <img src="{{ asset('img/arrow-btn.svg') }}" alt="arrow">
                                    </button>
                                </div>

                                <div class="programm__menu-block cabinet__menu">
                                    <div class="programm__subblock cabinet__subblock">
                                        <div class="programm__subblock-sup">
                                            КУРС "{{ $course->name }}"
                                        </div>
                                        @foreach($course->links as $link)
                                        <div class="cabinet__info-box">
                                            <div class="programm__subblock-desc cabinet-desc">
                                                {{ $link->url }}
                                            </div>
                                            <a class="but-init cabinet__link" href="{{ $link->url }}">Перейти</a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
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