@extends('layouts.app')

@section('title', 'Войти в айти | Восстановление пароля')

@section('styles')
@endsection

@include('layouts.auth')

@section('content')
    <section class="recover" style="background-image: url({{ asset('img/header-bg.png') }}); background-repeat: no-repeat; background-size: cover; height: 100vh;">
        <div class="overlay__popup recover-popup" style="display: block;">

            <div class="popup__reg modal">

                <div class="popup__reg-top modal-top">
                    <img class="form__rect register__rect" src="{{ asset('img/login-rect.svg') }}" alt="">
                    <h1 class="popup__reg-title">Ваш новый пароль</h1>
                </div>

                <div class="popup__reg-content" id="recover-form">

                    <div class="form__group reg__group">
                        <div class="about__left-title" style="padding-bottom: 0; text-transform: lowercase;">
                            {{ $password }}
                        </div>

                        <a href="{{ Route('index') }}" class="popup__reg-btn but-init reg-btn register" style="display: block; display: flex; justify-content: center; align-items: center;">На главную</a>
                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection