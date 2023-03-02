<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FooDO</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link href="{{ asset('user/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/css/index.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/font-awesome.min.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
    <script src="{{ asset('user/assets/js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/bootstrap.min.js') }}"></script>

    @yield('head')
</head>

<body>
    @include('users.layouts.navbar')

    @yield('content')

    @include('users.layouts.footer')

    @yield('script')

    <script>
        $(document).ready(function() {
            /*****Fixed Menu******/
            var secondaryNav = $('.cd-secondary-nav'),
                secondaryNavTopPosition = secondaryNav.offset().top;
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > secondaryNavTopPosition) {
                    secondaryNav.addClass('is-fixed');
                } else {
                    secondaryNav.removeClass('is-fixed');
                }
            });
        });
    </script>

</body>

</html>
