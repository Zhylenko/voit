@section('products')
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
@endsection