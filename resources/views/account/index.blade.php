@extends('layouts.app')

@section('title', 'Войти в айти | Личный кабинет')

@section('styles')
@endsection

@section('content')
    <article class="article-offer fix" id="article-bg">
        <section class="cabinet">
            <div class="container">
                <div class="intro__content">

                    <h1 class="intro__title">Мои заказы</h1>

                    <div class="intro__empty">
                        <div class="intro__box">
                            <img class="empty-box" src="{{ asset('img/empty-box.png') }}" alt="">
                            <div class="intro__subtitle">Тут пусто</div>
                        </div>

                        <div class="intro__text">
                            <button class="intro__text-login popup-btn" href="./cabinet.html">Авторизируйтесь</button>чтобы просмотреть все ваши заказы
                        </div>

                        <div class="overlay__popup">
                            <div class="popup__login modal">

                                <div class="popup__login-top modal-top">
                                    <img class="form__rect register__rect" src="{{ asset('img/login-rect.svg') }}" alt="">
                                    <h1 class="popup__reg-title">Авторизация</h1>
                                    <button class="popup__close" value="Reset">
                                    </button>
                                </div>

                                <form class="popup__login-content" id="login-form" action="#" novalidate>

                                    <div class="form__group reg__group">
                                        <input class="form-control _login-email _login-req" type="email" placeholder="Email" required>
                                    </div>
                                    <div class="form__group reg__group">
                                        <input class="form-control _login-password _login-req" type="text" placeholder="Пароль" required>
                                    </div>

                                    <div class="popup__login-btn">
                                        <button class="login-btn" id="register-btn" type="button">Зарегистрируйтесь,</button> если у вас еще нет учетной записи.
                                    </div>

                                    <button class="popup__reg-btn but-init log-btn" type="submit" value="Reset">Авторизоваться</button>

                                </form>

                            </div>

                            <div class="popup__reg modal" style="display: none;">

                                <div class="popup__reg-top modal-top">
                                    <img class="form__rect register__rect" src="{{ asset('img/login-rect.svg') }}" alt="">
                                    <h1 class="popup__reg-title">Регистрация</h1>
                                    <button class="popup__close" value="Reset">
                                    </button>
                                </div>

                                <form class="popup__reg-content" id="register-form" action="#" novalidate>

                                    <div class="form__group reg__group">
                                        <input class="form-control _req _login-mail" type="email" name="register-mail" placeholder="Email" autocomplete="off" required>
                                    </div>

                                    <div class="form__group reg__group">
                                        <input class="form-control _req _code" type="text" name="register-code" placeholder="Пароль" style="display: none;" required>
                                    </div>

                                    <span class="js-timeout" style="display: none;">1:00</span>
                                    <button class="timer" type="submit" id="timer" style="display: none;">Отправить код повторно</button>

                                    <button class="popup__reg-btn but-init reg-btn register" type="submit" value="Reset" style="display: block;">Отправить код</button>
                                    <button class="popup__reg-btn but-init reg-btn register" type="submit" value="Reset" style="display: none;">Зарегистрироваться</button>
                                </form>

                            </div>

                        </div>
                    </div>

                    <div class="programm__inner cabinet__inner" style="display: none;">

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


                </div>
            </div>
        </section>
    </article>
@endsection