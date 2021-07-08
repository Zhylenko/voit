@section('scripts')
    <script>
        const config = {
            'endPoints': {
                'contact-form':     `{{ Route('contact-send') }}`,
                'register-form':    `{{ Route('auth-register') }}`,
                'login-form':       `{{ Route('auth-login') }}`,
                'about-menu':       `...`,
            },
            'timer': `{{ config('auth.password_timeout') }}`,
        }
    </script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Libraries -->
    <script src="{{ asset('js/libs.min.js') }}"></script>
    <!-- Main scripts -->
    <script src="{{ asset('js/main.js') }}"></script>
@endsection