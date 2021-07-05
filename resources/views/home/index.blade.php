@extends('layouts.app')

@section('title', 'Войти в айти')

@section('styles')
@endsection

@section('content')
    <article class="fullback fix" id="home">

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

                    <div class="overlay__popup">
                        <div class="popup__login modal">
                            <div class="popup__login-top modal-top">
                                <img class="form__rect register__rect" src="{{ asset('img/login-rect.svg') }}" alt="">
                                <h1 class="popup__reg-title">Авторизация</h1>
                                <button class="popup__close" value="Reset"></button>
                            </div>

                            <form class="popup__login-content" style="display: block;" id="login-form" action="#" novalidate>
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
                                <button class="popup__close" value="Reset"></button>
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

                        <div class="popup__test" style="display: none;">

                            <div class="popup__top">
                                <img src="{{ asset('img/popup.png') }}" alt="">
                                <h1 class="popup__title">Тест</h1>
                                <button class="popup__close reg-btn test-close"></button>
                            </div>

                            <div class="popup__question">
                                Question Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, molestiae fuga optio ducimus, ratione, eaque blanditiis earum voluptates laudantium autem impedit excepturi tenetur magni nam. Minus possimus dolores aut illo?
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

                    <div class="content__right">
                        <img src="{{ asset('img/header-image.svg') }}" alt="graphic">
                    </div>
                </div>
            </div>
        </section>

        <article class="four-section-bg">
            <section class="about" id="about">
                <div class="container-big about-cont">

                    <div class="sidebar__text">
                        <div class="sidebar__info">
                            о курсе “войти в IT”
                        </div>
                    </div>

                    <div class="container-main">
                        <div class="about__inner">

                            <div class="about__left">

                                <h3 class="about__left-title">Расскажем немного<br><span>о нашем курсе</span></h3>

                                <div class="about__accordion">

                                    <div class="accordion__item active">

                                        <div class="accordion__item-top">

                                            <h3 class="accordion__item-title">О чем курс?</h3>
                                            <div class="accordion__item-btn">
                                                <div class="btn-shadow">
                                                    <div class="btn-main">
                                                        <div></div>
                                                        <div></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="accordion__item-desc">
                                            <p>Дистанционное обучение стало популярным с появлением интернета,
                                                открыв новые возможности развития для жителей удаленных населенных
                                                пунктов и деловых людей с плотным рабочим графиком.
                                            </p>
                                            <p>
                                                Во время дистанционного обучения студент занимается самостоятельно по разработанной программе,
                                                просматривает записи вебинаров, решает задачи, консультируется с преподавателем в онлайн-чате
                                                и периодически отдает ему на проверку свои работы.
                                            </p>
                                        </div>

                                    </div>

                                    <div class="accordion__item">

                                        <div class="accordion__item-top">

                                            <h3 class="accordion__item-title">В каком формате проходит обучение?</h3>
                                            <div class="accordion__item-btn">
                                                <div class="btn-shadow">
                                                    <div class="btn-main">
                                                        <div></div>
                                                        <div></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="accordion__item-desc">
                                            <p>Дистанционное обучение стало популярным с появлением интернета,
                                                открыв новые возможности развития для жителей удаленных населенных
                                                пунктов и деловых людей с плотным рабочим графиком.
                                            </p>
                                            <p>
                                                Во время дистанционного обучения студент занимается самостоятельно по разработанной программе,
                                                просматривает записи вебинаров, решает задачи, консультируется с преподавателем в онлайн-чате
                                                и периодически отдает ему на проверку свои работы.
                                            </p>
                                        </div>

                                    </div>

                                    <div class="accordion__item">

                                        <div class="accordion__item-top">

                                            <h3 class="accordion__item-title">В чем преимущество данного курса?</h3>
                                            <div class="accordion__item-btn">
                                                <div class="btn-shadow">
                                                    <div class="btn-main">
                                                        <div></div>
                                                        <div></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="accordion__item-desc">
                                            <p>Дистанционное обучение стало популярным с появлением интернета,
                                                открыв новые возможности развития для жителей удаленных населенных
                                                пунктов и деловых людей с плотным рабочим графиком.
                                            </p>
                                            <p>
                                                Во время дистанционного обучения студент занимается самостоятельно по разработанной программе,
                                                просматривает записи вебинаров, решает задачи, консультируется с преподавателем в онлайн-чате
                                                и периодически отдает ему на проверку свои работы.
                                            </p>
                                        </div>

                                    </div>


                                </div>

                            </div>

                            <div class="about__right">
                                <img src="{{ asset('img/about-image.svg') }}" alt="graphic">
                            </div>

                        </div>
                    </div>

                </div>
            </section>

            <section class="for">
                <div class="container-big about-cont">
                    <div class="sidebar__text for__sidebar">
                        <div class="sidebar__info">
                            мы ждем именно тебя
                        </div>
                    </div>

                    <div class="container-main">
                        <div class="for__inner">
                            <div class="for__title">
                                для кого подходит<br>наш курс?
                            </div>

                            <div class="for__items">
                                <div class="for__items-top">
                                    <div class="for__item">
                                        <div class="for__item-circle">
                                            <img class="for__item-img" src="{{ asset('img/item-logo-1.svg') }}" alt="logo">
                                        </div>

                                        <div class="for__item-block circle-cut">
                                            <div class="for__item-text">
                                                <h3 class="for__block-title for__block-title286">
                                                    Для тех, кто хочет сменить сферу деятельностиe
                                                </h3>
                                                <p class="for__block-info">Хотите <span class="blue-info">больше получать</span>,
                                                    или иметь больше <span class="blue-info">свободного времени</span>, или
                                                    <span class="blue-info">работать удаленно</span> из любой точки мира?
                                                    А может ваша сфера деятельности сама по себе менее прибыльная, либо устаревшая?
                                                    Тогда IT сфера точно для вас.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="for__item">
                                        <div class="for__item-circle">
                                            <img class="for__item-img" src="{{ asset('img/item-logo-2.svg') }}" alt="logo">
                                        </div>

                                        <div class="for__item-block circle-cut">

                                            <div class="for__item-text">
                                                <h3 class="for__block-title">
                                                    Для родителей, которые хотят помочь ребенку с карьерой
                                                </h3>
                                                <p class="for__block-info">Все нормальные родители хотят прекрасную жизнь
                                                    и <span class="blue-info">хороший доход</span> для своего ребенка. Но в силу возраста и неопытности,
                                                    детки часто не могут сами сделать правильный выбор.
                                                    Помогите ребенку найти <span class="blue-info">свой карьерный путь</span>.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="for__items-bottom">
                                    <div class="for__item">
                                        <div class="for__item-circle">
                                            <img class="for__item-img" src="{{ asset('img/item-logo-3.svg') }}" alt="logo">
                                        </div>

                                        <div class="for__item-block circle-cut">

                                            <div class="for__item-text">
                                                <h3 class="for__block-title">
                                                    Для желающих получить дополнительный доход
                                                </h3>
                                                <p class="for__block-info">Если у вас есть <span class="blue-info">свободное время</span> и
                                                    <span class="blue-info">не хватает денег</span>,
                                                    можете попробовать себя в IT. Все, что вам нужно, это <span class="blue-info">ноутбук и вай-фай</span>.
                                                    Не важно, вы студент или мама в декрете, главное это желание и упорство.
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="for__item">
                                        <div class="for__item-circle">
                                            <img class="for__item-img" src="{{ asset('img/item-logo-4.svg') }}" alt="logo">
                                        </div>

                                        <div class="for__item-block circle-cut">

                                            <div class="for__item-text">
                                                <h3 class="for__block-title for__block-title286">
                                                    Для тех, кто ищет свое призвание в жизни
                                                </h3>
                                                <p class="for__block-info">Если вы еще <span class="blue-info">не нашли себя</span>, то вам просто
                                                    необходимо пройти наш курс, здесь вы сможете пройти тестирование
                                                    и на его основе сделать вывод о том, <span class="blue-info">подойдет ли вам данная сфера</span>,
                                                    какие у вас шансы преуспеть в ней, да и вообще, с чего же начать.
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <img class="for__img" src="{{ asset('img/for-img.png') }}" alt="graphic">
                        </div>
                    </div>
                </div>
            </section>

            <section class="programm" id="programm">
                <div class="container-big about-cont">
                    <div class="sidebar__text programm__sidebar">
                        <div class="sidebar__info programm__side-info">
                            что вас ждет<br> в нашем курсе
                        </div>
                    </div>

                    <div class="container-main">
                        <div class="programm__inner">
                            <div class="programm__head">
                                <div class="programm__head-title"><span>Программа</span> курса</div>
                                <div class="programm__head-subtitle">Что вы узнаете после прохождения курса.</div>
                            </div>

                            <div class="programm__menu">
                                <div class="programm__menu-item">

                                    <div class="programm__menu-line">
                                        <div class="programm__menu-title"><span>1.</span> Общая информация о сфере. Плюсы и минусы.</div>
                                        <button class="programm__menu-btn up">
                                            <img src="{{ asset('img/arrow-btn.svg') }}" alt="arrow">
                                        </button>
                                    </div>

                                    <div class="programm__menu-block">
                                        <div class="programm__subblock">
                                            <div class="programm__subblock-sup">
                                                ЗАНЯТИЕ #1
                                            </div>
                                            <div class="programm__subblock-title">
                                                Общая информация о сфере. Плюсы и минусы
                                            </div>
                                            <div class="programm__subblock-desc">
                                                Дистанционное обучение стало популярным с появлением интернета,
                                                открыв новые возможности развития для жителей удаленных
                                                населенных пунктов и деловых людей с плотным рабочим графиком.
                                            </div>
                                            <div class="programm__subblock-timer">
                                                <span>0.5 часов теории</span>
                                                <span>1.5 часов практики</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="programm__menu-item">

                                    <div class="programm__menu-line">
                                        <div class="programm__menu-title"><span>2.</span> Обзор существующих специальностей</div>
                                        <button class="programm__menu-btn">
                                            <img src="{{ asset('img/arrow-btn.svg') }}" alt="arrow">
                                        </button>
                                    </div>

                                    <div class="programm__menu-block">

                                        <div class="programm__subblock">
                                            <div class="programm__subblock-sup">
                                                ЗАНЯТИЕ #2
                                            </div>
                                            <div class="programm__subblock-title">
                                                Обзор существующих специальностей
                                            </div>
                                            <div class="programm__subblock-desc">
                                                Дистанционное обучение стало популярным с появлением интернета,
                                                открыв новые возможности развития для жителей удаленных
                                                населенных пунктов и деловых людей с плотным рабочим графиком.
                                            </div>
                                            <div class="programm__subblock-timer">
                                                <span>0.5 часов теории</span>
                                                <span>1.5 часов практики</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="programm__menu-item">

                                    <div class="programm__menu-line">
                                        <div class="programm__menu-title"><span>3.</span> Пошаговый план действий для начала работы</div>
                                        <button class="programm__menu-btn">
                                            <img src="{{ asset('img/arrow-btn.svg') }}" alt="arrow">
                                        </button>
                                    </div>

                                    <div class="programm__menu-block">

                                        <div class="programm__subblock">
                                            <div class="programm__subblock-sup">
                                                ЗАНЯТИЕ #3
                                            </div>
                                            <div class="programm__subblock-title">
                                                Пошаговый план действий для начала работы
                                            </div>
                                            <div class="programm__subblock-desc">
                                                Дистанционное обучение стало популярным с появлением интернета,
                                                открыв новые возможности развития для жителей удаленных
                                                населенных пунктов и деловых людей с плотным рабочим графиком.
                                            </div>
                                            <div class="programm__subblock-timer">
                                                <span>0.5 часов теории</span>
                                                <span>1.5 часов практики</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="programm__menu-item">

                                    <div class="programm__menu-line">
                                        <div class="programm__menu-title"><span>4.</span> Подбор подходящей для вас специальности</div>
                                        <button class="programm__menu-btn">
                                            <img src="{{ asset('img/arrow-btn.svg') }}" alt="arrow">
                                        </button>
                                    </div>

                                    <div class="programm__menu-block">

                                        <div class="programm__subblock">
                                            <div class="programm__subblock-sup">
                                                ЗАНЯТИЕ #4
                                            </div>
                                            <div class="programm__subblock-title">
                                                Подбор подходящей для вас специальности
                                            </div>
                                            <div class="programm__subblock-desc">
                                                Дистанционное обучение стало популярным с появлением интернета,
                                                открыв новые возможности развития для жителей удаленных
                                                населенных пунктов и деловых людей с плотным рабочим графиком.
                                            </div>
                                            <div class="programm__subblock-timer">
                                                <span>0.5 часов теории</span>
                                                <span>1.5 часов практики</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="programm__menu-item">

                                    <div class="programm__menu-line">
                                        <div class="programm__menu-title"><span>5.</span> Выбор компании для работы</div>
                                        <button class="programm__menu-btn">
                                            <img src="{{ asset('img/arrow-btn.svg') }}" alt="arrow">
                                        </button>
                                    </div>

                                    <div class="programm__menu-block">

                                        <div class="programm__subblock">
                                            <div class="programm__subblock-sup">
                                                ЗАНЯТИЕ #5
                                            </div>
                                            <div class="programm__subblock-title">
                                                Выбор компании для работы
                                            </div>
                                            <div class="programm__subblock-desc">
                                                Дистанционное обучение стало популярным с появлением интернета,
                                                открыв новые возможности развития для жителей удаленных
                                                населенных пунктов и деловых людей с плотным рабочим графиком.
                                            </div>
                                            <div class="programm__subblock-timer">
                                                <span>0.5 часов теории</span>
                                                <span>1.5 часов практики</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="programm__menu-item active">
                                    <div class="programm__menu-line">
                                        <div class="programm__menu-title"><span>6.</span> Подготовка к собеседованию</div>
                                        <button class="programm__menu-btn">
                                            <img src="{{ asset('img/arrow-btn.svg') }}" alt="arrow">
                                        </button>
                                    </div>

                                    <div class="programm__menu-block">
                                        <div class="programm__subblock">
                                            <div class="programm__subblock-sup">
                                                ЗАНЯТИЕ #6
                                            </div>
                                            <div class="programm__subblock-title">
                                                Подготовка к собеседованию
                                            </div>
                                            <div class="programm__subblock-desc">
                                                Дистанционное обучение стало популярным с появлением интернета,
                                                открыв новые возможности развития для жителей удаленных
                                                населенных пунктов и деловых людей с плотным рабочим графиком.
                                            </div>
                                            <div class="programm__subblock-timer">
                                                <span>0.5 часов теории</span>
                                                <span>1.5 часов практики</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <img class="programm__menu-image" src="{{ asset('img/programm-img.svg') }}" alt="graphic">
                            </div>

                            <div class="programm__btn">
                                <a class="programm__btn-submit but-init" href="{{ !Route::is('index') ? Route('index') : ''}}{{ asset('#contact') }}">Хочу записаться!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="price" id="price">
                <div class="container-big about-cont">
                    <div class="sidebar__text price__side">
                        <div class="sidebar__info">
                            Тарифы
                        </div>
                    </div>

                    <div class="container-main">
                        <div class="price__inner">
                            <div class="price__title">
                                <span>Стоимость</span> обучения
                            </div>

                            <div class="price__cards">
                                <div class="price__item">
                                    <div class="price__block">
                                        <div class="price__logo">
                                            <img src="{{ asset('img/pr-logo-1.svg') }}" alt="">
                                        </div>
                                        <img class="price__rect" src="{{ asset('img/rect-card.png') }}" alt="">

                                        <div class="price__block-sup">
                                            Тариф
                                        </div>

                                        <div class="price__block-title">
                                            "Базовый"
                                        </div>

                                        <div class="price__block-cost">
                                            200 ₴
                                        </div>

                                        <ul class="price__block-list first-list">
                                            <li class="price__block-item"><span>Онлайн-занятия <br>в твоем личном кабинете</span>
                                                <img src="{{ asset('img/verif.svg') }}" alt="">
                                            </li>
                                            <li class="price__block-item"><span>Домашние задания <br>после каждого занятия</span>
                                                <img src="{{ asset('img/verif.svg') }}" alt="">
                                            </li>
                                            <li class="price__block-item"><span>Личные онлайн-консультации с наставником</span>
                                                <img src="{{ asset('img/verif.svg') }}" alt="">
                                            </li>
                                            <li class="price__block-item"><span>Интерактивная система общения наставника со студентом</span>
                                                <img src="{{ asset('img/verif.svg') }}" alt="">
                                            </li>
                                        </ul>

                                        <div class="price__block-btn">
                                            <button class="price__block-btn_book but-init popup-btn" type="submit">Купить</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="price__item price__item-big">
                                    <div class="price__bookmark">
                                        <img src="{{ asset('img/bookmark.svg') }}" alt="">
                                        <span>Рекомендуем</span>
                                    </div>

                                    <div class="price__block">
                                        <div class="price__logo">
                                            <img src="{{ asset('img/pr-logo-2.svg') }}" alt="">
                                        </div>
                                        <img class="price__rect" src="{{ asset('img/rect-card.png') }}" alt="">
                                        <div class="price__block-sup">
                                            Тариф
                                        </div>

                                        <div class="price__block-title">
                                            “Оптимальный”
                                        </div>

                                        <div class="price__block-cost">
                                            300 ₴
                                        </div>

                                        <ul class="price__block-list second-list">
                                            <li class="price__block-item"><span>Онлайн-занятия <br>в твоем личном кабинете</span>
                                                <img src="{{ asset('img/verif.svg') }}" alt="">
                                            </li>
                                            <li class="price__block-item"><span>Домашние задания <br>после каждого занятия</span>
                                                <img src="{{ asset('img/verif.svg') }}" alt="">
                                            </li>
                                            <li class="price__block-item"><span>Личные онлайн-консультации с наставником</span>
                                                <img src="{{ asset('img/verif.svg') }}" alt="">
                                            </li>
                                            <li class="price__block-item"><span>Интерактивная система общения наставника со студентом</span>
                                                <img src="{{ asset('img/verif.svg') }}" alt="">
                                            </li>
                                        </ul>

                                        <div class="price__block-btn">
                                            <button class="price__block-btn_book but-init popup-btn" type="submit">Купить</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="price__item">
                                    <div class="price__block">
                                        <div class="price__logo">
                                            <img src="{{ asset('img/pr-logo-3.svg') }}" alt="">
                                        </div>

                                        <img class="price__rect" src="{{ asset('img/rect-card.png') }}" alt="">

                                        <div class="price__block-sup">
                                            Тариф
                                        </div>

                                        <div class="price__block-title">
                                            “Премиальный”
                                        </div>

                                        <div class="price__block-cost">
                                            500 ₴
                                        </div>

                                        <ul class="price__block-list">
                                            <li class="price__block-item"><span>Онлайн-занятия <br>в твоем личном кабинете</span>
                                                <img src="{{ asset('img/verif.svg') }}" alt="">
                                            </li>
                                            <li class="price__block-item"><span>Домашние задания <br>после каждого занятия</span>
                                                <img src="{{ asset('img/verif.svg') }}" alt="">
                                            </li>
                                            <li class="price__block-item"><span>Личные онлайн-консультации с наставником</span>
                                                <img src="{{ asset('img/verif.svg') }}" alt="">
                                            </li>
                                            <li class="price__block-item"><span>Интерактивная система общения наставника со студентом</span>
                                                <img src="{{ asset('img/verif.svg') }}" alt="">
                                            </li>
                                        </ul>

                                        <div class="price__block-btn">
                                            <button class="price__block-btn_book but-init popup-btn" type="submit">Купить</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </article>

    <article class="two-section-bg">
        <section class="feedback" id="feedback">
            <div class="container-big">

                <div class="sidebar__text feed__side">
                    <div class="sidebar__info feed__side-info">
                        Что говорят выпускники
                    </div>
                </div>

                <div class="container-feed">
                    <div class="feedback__inner">

                        <div class="feedback__title"><span>Отзывы</span> студентов</div>

                        <div class="feedback__slider">

                            <div class="feedback__slider-item">

                                <div class="feedback__block">
                                    <div class="feedback__item-img">
                                        <img src="{{ asset('img/feed-1.svg') }}" alt="">
                                    </div>
                                    <div class="feedback__block-txt">”</div>
                                    <a class="feedback__block-social" href="#">
                                        <img src="{{ asset('img/face.svg') }}" alt="">
                                    </a>
                                    <h3 class="feedback__block-name">Павел Бакулин</h3>
                                    <p class="feedback__block-desc">Материал в целом понравился,
                                        лаконично и, по сути, для меня это важно, так как я работаю,
                                        поэтому, имею мало свободного времени.
                                    </p>

                                </div>

                            </div>

                            <div class="feedback__slider-item">

                                <div class="feedback__block">
                                    <div class="feedback__item-img">
                                        <img src="{{ asset('img/feed-2.svg') }}" alt="">
                                    </div>
                                    <div class="feedback__block-txt">”</div>
                                    <a class="feedback__block-social" href="#">
                                        <img src="{{ asset('img/face.svg') }}" alt="">
                                    </a>
                                    <h3 class="feedback__block-name">Вика Новикова</h3>
                                    <p class="feedback__block-desc">Давно хотела работать в айти, но боялась,
                                        что это не подходит для гуманитария, с помощью тестирования
                                        для меня нашли направление “тестировщик”))) После полугода
                                        работы могу с увереностью сказать, что мне это подошло<span>&#128522;</span>
                                    </p>

                                </div>

                            </div>

                            <div class="feedback__slider-item">

                                <div class="feedback__block">
                                    <div class="feedback__item-img">
                                        <img src="{{ asset('img/feed-1.svg') }}" alt="">
                                    </div>
                                    <div class="feedback__block-txt">”</div>
                                    <a class="feedback__block-social" href="#">
                                        <img src="{{ asset('img/face.svg') }}" alt="">
                                    </a>
                                    <h3 class="feedback__block-name">Павел Бакулин</h3>
                                    <p class="feedback__block-desc">Материал в целом понравился,
                                        лаконично и, по сути, для меня это важно, так как я работаю,
                                        поэтому, имею мало свободного времени.
                                    </p>

                                </div>

                            </div>

                            <div class="feedback__slider-item">

                                <div class="feedback__block">
                                    <div class="feedback__item-img">
                                        <img src="{{ asset('img/feed-2.svg') }}" alt="">
                                    </div>
                                    <div class="feedback__block-txt">”</div>
                                    <a class="feedback__block-social" href="#">
                                        <img src="{{ asset('img/face.svg') }}" alt="">
                                    </a>
                                    <h3 class="feedback__block-name">Вика Новикова</h3>
                                    <p class="feedback__block-desc">Давно хотела работать в айти, но боялась,
                                        что это не подходит для гуманитария, с помощью тестирования
                                        для меня нашли направление “тестировщик”))) После полугода
                                        работы могу с увереностью сказать, что мне это подошло<span>&#128522;</span>
                                    </p>

                                </div>

                            </div>

                            <div class="feedback__slider-item">

                                <div class="feedback__block">
                                    <div class="feedback__item-img">
                                        <img src="{{ asset('img/feed-1.svg') }}" alt="">
                                    </div>
                                    <div class="feedback__block-txt">”</div>
                                    <a class="feedback__block-social" href="#">
                                        <img src="{{ asset('img/face.svg') }}" alt="">
                                    </a>
                                    <h3 class="feedback__block-name">Павел Бакулин</h3>
                                    <p class="feedback__block-desc">Материал в целом понравился,
                                        лаконично и, по сути, для меня это важно, так как я работаю,
                                        поэтому, имею мало свободного времени.
                                    </p>

                                </div>

                            </div>

                            <div class="feedback__slider-item">

                                <div class="feedback__block">
                                    <div class="feedback__item-img">
                                        <img src="{{ asset('img/feed-2.svg') }}" alt="">
                                    </div>
                                    <div class="feedback__block-txt">”</div>
                                    <a class="feedback__block-social" href="#">
                                        <img src="{{ asset('img/face.svg') }}" alt="">
                                    </a>
                                    <h3 class="feedback__block-name">Вика Новикова</h3>
                                    <p class="feedback__block-desc">Давно хотела работать в айти, но боялась,
                                        что это не подходит для гуманитария, с помощью тестирования
                                        для меня нашли направление “тестировщик”))) После полугода
                                        работы могу с увереностью сказать, что мне это подошло<span>&#128522;</span>
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section>

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
                                            <img src="{{ asset('img/form-logo.svg') }}" alt="">
                                        </div>

                                        <img class="form__rect" src="{{ asset('img/form-rect.svg') }}" alt="">

                                        <div class="form__title">Напишите нам</div>

                                        <div class="form__inputs">
                                            <div class="form__group">
                                                <input class="form-control _name _req" type="text" name="name" placeholder="Имя*" required>
                                            </div>

                                            <div class="form__group">
                                                <input class="form-control _surname _req" type="text" name="surname" placeholder="Фамилия*" required>
                                            </div>

                                            <div class="form__group">
                                                <input class="form-control _email _req" type="email" name="email" placeholder="Email*" required>
                                            </div>

                                            <div class="form__group message-input">
                                                <textarea class="form-control textarea-control" name="message" placeholder="Сообщение"></textarea>
                                            </div>
                                        </div>

                                        <div class="form__gr-check">

                                            <label>
                                                <input class="form-control form-checkbox _req" name="checkbox" type="checkbox" required>
                                                <span class="form-checkstyle"></span>
                                                <p class="check-text">
                                                    Нажимая на эту кнопку я соглашаюсь с
                                                    <span><a href="{{ Route('offer') }}">договором публичной оферты</a></span>
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
                                                    <a class="foot-desc-link" href="tel:+380951234567">+38 095 123 45 67</a>
                                                    <a class="foot-desc-link" href="mailto:itcourses@gmail.com">itcourses@gmail.com</a>
                                                </div>
                                                <div class="footer__desc-social">
                                                    <a class="footer__social" href="#"><img src="{{ asset('img/foot-face.svg') }}" alt=""></a>
                                                    <a class="footer__social" href="#"><img src="{{ asset('img/foot-insta.svg') }}" alt=""></a>
                                                    <a class="footer__social" href="#"><img src="{{ asset('img/foot-tel.svg') }}" alt=""></a>
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

    </article>
@endsection