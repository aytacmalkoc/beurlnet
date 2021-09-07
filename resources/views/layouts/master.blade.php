<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="beurl.net, basit ve kullanışlı bir bağlantı kısaltma servisidir. Uzun bağlantılarınızı sabit uzunluktaki bağlantılar ile değiştirmenizi sağlar.">

    <meta name="keywords" content="link, link kısaltma, url kısaltma, beurl">

    <meta name="author" content="Aytac Malkoc">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/icons') }}/apple-icon-57x57.png">

    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/icons') }}/apple-icon-60x60.png">

    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/icons') }}/apple-icon-72x72.png">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/icons') }}/apple-icon-76x76.png">

    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/icons') }}/apple-icon-114x114.png">

    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/icons') }}/apple-icon-120x120.png">

    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/icons') }}/apple-icon-144x144.png">

    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/icons') }}/apple-icon-152x152.png">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/icons') }}/apple-icon-180x180.png">

    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/images/icons') }}/android-icon-192x192.png">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/icons') }}/favicon-32x32.png">

    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/icons') }}/favicon-96x96.png">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/icons') }}/favicon-16x16.png">

    <link rel="manifest" href="{{ asset('assets/images/icons') }}/manifest.json">

    <meta name="msapplication-TileColor" content="#ffffff">

    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">

    <meta name="theme-color" content="#ffffff">

    <title>

        @if (trim($__env->yieldContent('title')))

            @yield('title') - beurl.net

        @else

            beurl.net - Basit Link Kısaltma Servisi

        @endif

    </title>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TDG2N5K1L6"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-TDG2N5K1L6');
    </script>
    <script type="text/javascript" defer src="https://boardme.io/script/ee144b0a-0149-430d-91e4-a0771d68128b.js"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">

</head>



<body>



    <div id="app">

        @include('layouts.shared.header')

    

        @yield('content')

    

        @include('layouts.shared.footer')

    </div>



    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>