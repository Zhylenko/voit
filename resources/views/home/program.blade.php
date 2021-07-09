@section('program')
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

                    @foreach(trans('content.program.plan') as $title => $lesson)
                    <div class="programm__menu-item {{ ($loop->index == 5) ? 'active' : '' }}">

                        <div class="programm__menu-line">
                            <div class="programm__menu-title"><span>{{ $loop->index + 1 }}.</span> {!! $title !!}</div>
                            <button class="programm__menu-btn {{ ($loop->index != 5) ? 'up' : '' }}">
                                <img src="{{ asset('img/arrow-btn.svg') }}" alt="arrow">
                            </button>
                        </div>

                        <div class="programm__menu-block">
                            <div class="programm__subblock">
                                <div class="programm__subblock-sup">
                                    ЗАНЯТИЕ #{{ $loop->index + 1 }}
                                </div>
                                <div class="programm__subblock-title">
                                    {!! $title !!}
                                </div>
                                <div class="programm__subblock-desc">
                                    {!! $lesson['description'] !!}
                                </div>
                                <div class="programm__subblock-timer">
                                    <span>{{ $lesson['theory'] }} часов теории</span>
                                    <span>{{ $lesson['practice'] }} часов практики</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    
                    <img class="programm__menu-image" src="{{ asset('img/programm-img.svg') }}" alt="graphic">
                </div>

                <div class="programm__btn">
                    <a class="programm__btn-submit but-init" href="{{ !Route::is('index') ? Route('index') : ''}}{{ asset('#contact') }}">Хочу записаться!</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection