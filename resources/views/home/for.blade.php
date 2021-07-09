@section('for')
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
                                        {!! trans('content.for.blocks')[0]['title'] !!}
                                    </h3>
                                    <p class="for__block-info">
                                        {!! trans('content.for.blocks')[0]['description'] !!}
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
                                        {!! trans('content.for.blocks')[1]['title'] !!}
                                    </h3>
                                    <p class="for__block-info">
                                        {!! trans('content.for.blocks')[1]['description'] !!}
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
                                        {!! trans('content.for.blocks')[2]['title'] !!}
                                    </h3>
                                    <p class="for__block-info">
                                        {!! trans('content.for.blocks')[2]['description'] !!}
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
                                        {!! trans('content.for.blocks')[3]['title'] !!}
                                    </h3>
                                    <p class="for__block-info">
                                        {!! trans('content.for.blocks')[3]['description'] !!}
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
@endsection