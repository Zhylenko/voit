@section('courses')
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
                    @foreach($courses as $course)
                    <div class="price__item {{ ($course->big) ? 'price__item-big' : '' }}">
                        @if($course->big)
                        <div class="price__bookmark">
                            <img src="{{ asset('img/bookmark.svg') }}" alt="">
                            <span>Рекомендуем</span>
                        </div>
                        @endif
                        <div class="price__block">
                            <div class="price__logo">
                                <img src="{{ asset('img/pr-logo-' . ($loop->index + 1) . '.svg') }}" alt="">
                            </div>
                            <img class="price__rect" src="{{ asset('img/rect-card.png') }}" alt="">

                            <div class="price__block-sup">
                                Тариф
                            </div>

                            <div class="price__block-title">
                                "{{ $course->name }}"
                            </div>

                            <div class="price__block-cost">
                                {{ $course->price }} ₴
                            </div>

                            <ul class="price__block-list first-list">
                                @foreach($course->characteristics as $characteristic)
                                <li class="price__block-item {{ ($characteristic->active) ? 'active_modificator' : '' }}"><span>{{ $characteristic->name }}</span>
                                    <img src="{{ asset('img/verif.svg') }}" alt="">
                                </li>
                                @endforeach
                            </ul>

                            <div class="price__block-btn">
                                @if(isset($auth) && $auth === true)
                                <a href="{{ Route('course-payment', ['name' => $course->name]) }}">
                                    <button class="price__block-btn_book but-init popup-btn" type="submit">Купить</button>
                                </a>
                                @else
                                <button class="price__block-btn_book but-init popup-btn" type="submit">Купить</button>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection