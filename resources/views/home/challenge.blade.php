@section('challenge')
<div class="overlay__test">

    <div class="popup__test" id="it-test" style="display: block;">

        <div class="popup__top">
            <img src="{{ asset('img/popup.png') }}" alt="">
            <h1 class="popup__title">Тест</h1>
            <button class="popup__close reg-btn test-close">
            </button>
        </div>

        <div class="popup__question" id="test-question">
        </div>
        <div class="form-error test-error"></div>
        <div class="popup__group">
        </div>

        <button class="popup__next" id="next">Далее</button>

    </div>
</div>
@endsection