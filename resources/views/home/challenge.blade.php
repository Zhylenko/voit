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
        <div class="form-error test-error">Необходимо заполнить пустое поле</div>
        <div class="popup__group">
            <div class="form__radio-btn">
                <input class="popup__group-btn answer" id="radio-1" type="radio" value="1" name="answer-radio">
                <label for="radio-1" style="background-image: url({{ asset('img/lines.svg') }});">Да</label>
            </div>

            <div class="form__radio-btn">
                <input class="popup__group-btn answer" id="radio-2" type="radio" value="2" name="answer-radio">
                <label for="radio-2" style="background-image: url({{ asset('img/lines.svg') }});">Нет</label>
            </div>

            <div class="form__radio-btn">
                <input class="popup__group-btn answer" id="radio-3" type="radio" value="3" name="answer-radio">
                <label for="radio-3" style="background-image: url({{ asset('img/lines.svg') }});">Больше 3 часов в день.</label>
            </div>
        </div>

        <button class="popup__next" id="next">Далее</button>

    </div>
</div>
@endsection