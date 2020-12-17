<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield("title")</title>
    <link rel="icon" href="{{ asset('img/fav.png') }}" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- main css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- custom style -->
    @yield("style")

    <!-- modernizr -->
    <script src="{{ asset('js/modernizr.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid">
        <!-- box header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" width="80" alt="Logo"></a>
            </div>
            <!-- box-nav -->
            {{-- <a class="box-primary-nav-trigger" href="#"> --}}
            <a class="box-primary-nav-trigger">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
            <!-- end-box-nav -->
        </header>
        <!-- end box header -->

        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
                <li class="box-label">portfolio</li>

        @php($menu = Insight::MENU)
        @foreach ($menu as $data)
        <li><a href="{{ route('master.'.$data[0]) }}">{{ $data[1] }}</a>@if (isset($mkey) && $data[0] == $mkey)<i class="ion-ios-circle-filled color"></i>@endif</li>
        @endforeach

                <li class="box-label">Link Social Media</li>

        @php($box = Insight::BOX)
        @foreach ($box as $data)
        <li class="box-social"><a href="{{ url($data[0]) }}" target="_blank"><i class="ion-social-{{ $data[1] }}"></i></a></li>
        @endforeach
    </ul>
        </nav>
        <!-- end nav -->
    </div>

    @yield("content")

    <!-- footer -->
    <footer>
        <div class="container-fluid">
            <p class="copyright">© Box Portfolio 2016</p>
        </div>
    </footer>
    <!-- end footer -->

    <!-- back to top -->
    <a href="#" class="cd-top"><i class="ion-android-arrow-up"></i></a>
    <!-- end back to top -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-2.1.1.js') }}"></script>

    <!--  plugins -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/animated-headline.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

    <!--  custom script -->
    <script src="{{ asset('js/custom.js') }}"></script>
    @yield("script")

    <!-- google analytics -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-76796224-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- end google analytics -->

</body>

</html>
