<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Global Security</title>


    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('plugin/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/self_app.css') }}">
    <script src="{{ asset('js/jquery-3.7.1.js') }}"></script>


</head>
<body>
@include('layouts.header')
@yield('content')
@include('layouts.footer')
<!-- script block -->
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('plugin/slick/slick.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
{{--@include('./flash_message')--}}
<!-- /script block -->
<script>
    $(function () {
        let isshow = sessionStorage.getItem("isshow");
        if (isshow == null) {
            sessionStorage.setItem('isshow', 1);
            $('#newsModal').modal('show');
        }
    });
</script>
@stack('scripts')
</body>
</html>
