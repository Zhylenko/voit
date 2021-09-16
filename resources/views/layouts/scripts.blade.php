@section('scripts')
    <script>
        const config = {
            'endPoints': {
                'contact-send':     `{{ Route('contact-send') }}`,
                'auth-register':    `{{ Route('auth-register') }}`,
                'auth-login':       `{{ Route('auth-login') }}`,
                'challenge-get':    `{{ Route('challenge-get') }}`,
                'auth-reset':       `{{ Route('auth-reset')   }}`,
            },
            'password_timeout': `{{ config('auth.password_timeout') }}`,
        }
    </script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Libraries -->
    <script src="{{ asset('js/libs.min.js') }}"></script>
    @if(isset($auth) && $auth === true)
    @if($passed !== true)
    <!-- Challenge -->
    <script src="{{ asset('js/challenge.js') }}"></script>
    @endif
    @endif
    <!-- Main scripts -->
    <script src="{{ asset('js/main.js') }}"></script>
@endsection