@include('home.for')
@include('home.program')
@include('home.products')

@section('about')
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
                            @foreach(trans('content.about.questions') as $question => $answer)
                            <div class="accordion__item {{ ($loop->index == 0) ? 'active' : '' }}">

                                <div class="accordion__item-top">

                                    <h3 class="accordion__item-title">{!! $question !!}</h3>
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
                                    {!! $answer !!}
                                </div>

                            </div>
                            @endforeach
                        </div>

                    </div>

                    <div class="about__right">
                        <img src="{{ asset('img/about-image.svg') }}" alt="graphic">
                    </div>

                </div>
            </div>

        </div>
    </section>

    @yield('for')

    @yield('program')

    @yield('products')
</article>
@endsection