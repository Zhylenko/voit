@section('scripts')
    <script>
        const config = {
            'endPoints': {
                'contact-send':     `{{ Route('contact-send') }}`,
                'auth-register':    `{{ Route('auth-register') }}`,
                'auth-login':       `{{ Route('auth-login') }}`,
                'test':             ``,
            },
            'password_timeout': `{{ config('auth.password_timeout') }}`,
        }
    </script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Libraries -->
    <script src="{{ asset('js/libs.min.js') }}"></script>
    <!-- Main scripts -->
    <script src="{{ asset('js/test.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
@endsection