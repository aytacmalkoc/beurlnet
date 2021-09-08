<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="beurl.net, basit ve kullanışlı bir bağlantı kısaltma servisidir. Uzun bağlantılarınızı sabit uzunluktaki bağlantılar ile değiştirmenizi sağlar.">
    <meta name="keywords" content="link, link kısaltma, url kısaltma, beurl">
    <meta name="author" content="Aytac Malkoc">

    @include('web.layouts.favicons')
    <title>
        @if (trim($__env->yieldContent('title')))
            @yield('title') - beurl.net
        @else
            beurl.net - Basit Link Kısaltma Servisi
        @endif
    </title>

    @include('web.layouts.stylesheets')

    @production
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-TDG2N5K1L6"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());
            gtag('config', 'G-TDG2N5K1L6');
        </script>
        <script type="text/javascript" defer
                src="https://boardme.io/script/ee144b0a-0149-430d-91e4-a0771d68128b.js"></script>
    @endproduction
</head>
<body>

@include('web.layouts.header')

@yield('content')

@include('web.layouts.footer')

@include('web.layouts.scripts')

</body>
</html>
