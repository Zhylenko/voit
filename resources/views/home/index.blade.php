@extends('layouts.app')

@section('title', 'Войти в айти')

@section('styles')
@endsection

@include('home.main')
@include('home.about', ['courses' => $courses])
@include('home.reviews', ['reviews' => $reviews])
@include('layouts.footer')

@section('content')
<article class="fullback fix" id="home">

    @yield('main')

    @yield('about')

</article>

<article class="two-section-bg">

    @yield('reviews')

    @yield('footer')

</article>
@endsection