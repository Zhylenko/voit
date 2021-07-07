@section('footer')
<footer class="footer">
    <div class="container-big">

        <div class="sidebar__text footer-text">
            <div class="sidebar__info">
                Свяжитесь с нами
            </div>
        </div>

        <div class="container-main">
            <div class="footer__inner">

                <div class="footer__title" id="contact">
                    Контакты
                </div>

                <div class="footer__block">

                    <div class="footer__left">
                        <div class="footer__item">

                            <form class="contact__form" action="/contact/send" id="contact-form" novalidate>

                                <div class="form__logo">
                                    <img src="./img/form-logo.svg" alt="">
                                </div>

                                <img class="form__rect" src="./img/form-rect.svg" alt="">

                                <div class="form__title">Напишите нам</div>

                                <div class="form__inputs">
                                    <div class="form__group">
                                        <input class="form-control _name _req" type="text" name="name" placeholder="Имя*" required>
                                        <div class="form-error"></div>
                                    </div>

                                    <div class="form__group">
                                        <input class="form-control _surname _req" type="text" name="surname" placeholder="Фамилия*" required>
                                        <div class="form-error"></div>
                                    </div>

                                    <div class="form__group">
                                        <input class="form-control _email _req" type="email" name="email" placeholder="Email*" required>
                                        <div class="form-error"></div>
                                    </div>

                                    <div class="form__group message-input">
                                        <textarea class="form-control textarea-control" name="message" placeholder="Сообщение*"></textarea>
                                        <div class="form-error"></div>
                                    </div>
                                </div>

                                <div class="form__gr-check">

                                    <label>
                                        <input class="form-control form-checkbox _req" name="checkbox" type="checkbox" required>
                                        <span class="form-checkstyle"></span>
                                        <p class="check-text">
                                            Нажимая на эту кнопку я соглашаюсь с
                                            <span><a href="./offer.html">договором публичной оферты</a></span>
                                        </p>
                                    </label>

                                </div>

                                <div class="form__btn">
                                    <button class="form__btn-submit but-init" type="submit" value="Reset">ОТПРАВИТЬ</button>
                                </div>

                            </form>

                        </div>
                    </div>

                    <div class="footer__right">

                        <div class="footer__right-logo">
                            <img src="{{ asset('img/logo-2.png') }}" alt="">
                        </div>

                        <div class="footer__right-block">

                            <div class="footer__block-top">
                                <div class="footer__block-nav">

                                    <div class="footer__nav-title foot-title">
                                        Навигация
                                    </div>

                                    <div class="footer__nav-menu">
                                        <ul class="footer__nav-menu_l">
                                            <li class="menu__l-item"><a class="menu__f-link" href="{{ !Route::is('index') ? Route('index') : ''}}{{ asset('#home') }}">Главная</a></li>
                                            <li class="menu__l-item"><a class="menu__f-link" href="{{ !Route::is('index') ? Route('index') : ''}}{{ asset('#about') }}">О нас</a></li>
                                            <li class="menu__l-item"><a class="menu__f-link" href="{{ !Route::is('index') ? Route('index') : ''}}{{ asset('#programm') }}">Програма</a></li>
                                        </ul>

                                        <ul class="footer__nav-menu_r">
                                            <li class="menu__r-item"><a class="menu__f-link" href="{{ !Route::is('index') ? Route('index') : ''}}{{ asset('#price') }}">Цена</a></li>
                                            <li class="menu__r-item"><a class="menu__f-link" href="{{ !Route::is('index') ? Route('index') : ''}}{{ asset('#feedback') }}">Отзывы</a></li>
                                            <li class="menu__r-item"><a class="menu__f-link" href="{{ !Route::is('index') ? Route('index') : ''}}{{ asset('#contact') }}">Контакты</a></li>
                                        </ul>
                                    </div>

                                </div>

                                <div class="footer__block-help">

                                    <div class="footer__help-title foot-title">
                                        Помощь
                                    </div>

                                    <ul class="footer__help">
                                        <li class="menu__help-item"><a class="menu__f-link" href="#">Поддержка</a></li>
                                        <li class="menu__help-item"><a class="menu__f-link" href="{{ Route('offer') }}">Тех. положение</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="footer__block-bottom">
                                <div class="footer__block-contact">
                                    <div class="footer__contact-title foot-title">Контакты</div>

                                    <div class="footer__contact-desc">
                                        <div class="footer__desc-data">
                                            <a class="foot-desc-link" href="tel:{{ trans('content.phone') }}">{{ trans('content.phone') }}</a>
                                            <a class="foot-desc-link" href="mailto:{{ trans('content.email') }}">{{ trans('content.email') }}</a>
                                        </div>
                                        <div class="footer__desc-social">
                                            <a class="footer__social" href="{{ trans('content.social.facebook') }}"><img src="{{ asset('img/foot-face.svg') }}" alt=""></a>
                                            <a class="footer__social" href="{{ trans('content.social.instagram') }}"><img src="{{ asset('img/foot-insta.svg') }}" alt=""></a>
                                            <a class="footer__social" href="{{ trans('content.social.telegram') }}"><img src="{{ asset('img/foot-tel.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
</footer>
@endsection