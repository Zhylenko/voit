@section('scripts')
    <script>
        const endPoints = {
            'contact-form':     `{{ Route('contact-send') }}`,
            'register-form':    ``,
            'login-form':       ``,
        };
    </script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Libraries -->
    <script src="{{ asset('js/libs.min.js') }}"></script>
    <!-- Main scripts -->
    <script src="{{ asset('js/main.js') }}"></script>
@endsection