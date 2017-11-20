<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Clinical') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Jquery DataTable Css -->
    <link href="{{ asset('css/jquery.dataTables.css') }}" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Animate -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <!-- Owl Slider -->
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
    <!-- Owl Slider Theme -->
    <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">
    <!--Jquery Validation -->
    <link href="{{asset('css/validationEngine.jquery.css')}}" rel="stylesheet">
    <!-- StyleSheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
@yield('content')


<footer class="">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 r-m-p">
                <div class="copy_left_text">
                    <h4>All rights Reserved © 2017 </h4>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 r-m-p">
                <div class="copy_right_text">
                    <h4>Designed & Developed by <a href="#">Startupbug.net</a></h4>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Scripts -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<!-- Bootstrap -->
{{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
<!-- Jquery Data Table js -->
<script src="{{ asset('js/jquery.dataTables.js') }}"></script>
<!-- Validation -->
<script src="{{ asset('js/jquery.validationEngine.js') }}"></script>
<!-- Validation-en -->
<script src="{{ asset('js/jquery.validationEngine-en.js') }}"></script>
<!-- Carousel-min -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- Wow-min-js -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!-- Custom-js -->
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
