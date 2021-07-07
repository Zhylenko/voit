@section('auth')
    <div class="overlay__popup">
        <div class="popup__login modal">

            <div class="popup__login-top modal-top">
                <img class="form__rect register__rect" src="{{ asset('img/login-rect.svg') }}" alt="">
                <h1 class="popup__reg-title">Авторизация</h1>
                <button class="popup__close" value="Reset">
                </button>
            </div>

            <form class="popup__login-content" style="display: block;" id="login-form" action="#" novalidate>

                <div class="form__group reg__group">
                    <input class="form-control _login-email _login-req" type="email" placeholder="Email" name="login-email" required>
                    <div class="form-error"></div>
                </div>
                <div class="form__group reg__group">
                    <input class="form-control _login-password _login-req" type="text" placeholder="Пароль" name="login-password" required>
                    <div class="form-error"></div>
                </div>

                <div class="popup__login-btn">
                    <button class="login-btn" id="register-btn" type="button">Зарегистрируйтесь,</button> если у вас еще
                    нет учетной записи.
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
                    <input class="form-control _req _login-mail" type="email" name="register-email" placeholder="Email" autocomplete="off" required>
                    <div class="form-error"></div>
                </div>

                <div class="form__group reg__group">
                    <input class="form-control _req _code" type="text" name="register-code" placeholder="Пароль" style="display: none;" required>
                    <div class="form-error"></div>
                </div>

                <span class="js-timeout" style="display: none;">1:00</span>
                <button class="timer" type="submit" id="timer" style="display: none;">Отправить код повторно</button>

                <button class="popup__reg-btn but-init reg-btn register" type="submit" value="Reset" style="display: block;">Отправить код</button>
                <button class="popup__reg-btn but-init reg-btn register" type="button" value="Reset" style="display: none;">Зарегистрироваться</button>
            </form>

        </div>


        <div class="popup__test" style="display: none;">

            <div class="popup__top">
                <img src="{{ asset('img/popup.png') }}" alt="">
                <h1 class="popup__title">Тест</h1>
                <button class="popup__close reg-btn test-close">
                </button>
            </div>

            <div class="popup__question">
                Question Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, molestiae fuga optio ducimus,
                ratione, eaque blanditiis earum voluptates laudantium autem impedit excepturi tenetur magni nam. Minus
                possimus dolores aut illo?
            </div>

            <div class="popup__group">
                <button class="popup__group-btn" type="submit" style="background-image: url({{ asset('img/lines.svg') }});">
                    Да
                </button>
                <button class="popup__group-btn" type="submit" style="background-image: url({{ asset('img/lines.svg') }});">
                    Нет
                </button>
                <button class="popup__group-btn" type="submit" style="background-image: url({{ asset('img/lines.svg') }});">
                    Может быть
                </button>
            </div>

            <button class="popup__next">Далее</button>

        </div>
    </div>
@endsection