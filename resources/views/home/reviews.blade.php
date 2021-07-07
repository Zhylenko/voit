@section('reviews')
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
                    @foreach($reviews as $review)
                    <div class="feedback__slider-item">

                        <div class="feedback__block">
                            <div class="feedback__item-img">
                                <img src="{{ asset('img/reviews/' . $review->image) }}" alt="">
                            </div>
                            <div class="feedback__block-txt">”</div>
                            <a class="feedback__block-social" href="{{ $review->url }}">
                                <img src="{{ asset('img/face.svg') }}" alt="">
                            </a>
                            <h3 class="feedback__block-name">{{ $review->name }} {{ $review->surname }}</h3>
                            <p class="feedback__block-desc">{{ $review->review }}</p>

                        </div>

                    </div>
                    @endforeach
                </div>

            </div>
        </div>

    </div>
</section>
@endsection