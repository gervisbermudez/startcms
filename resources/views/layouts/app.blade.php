<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="The lightheight CMS">
        <meta name="author" content="Gervis Bermudez">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="application-name" content="Start CSM">
        <meta name="apple-mobile-web-app-title" content="Start CSM">
        <meta name="theme-color" content="#646b7f">
        <meta name="msapplication-navbutton-color" content="#646b7f">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="msapplication-starturl" content="/">
        <link rel="apple-touch-icon" sizes="57x57" href="{{url('/img/admin/favicon')}}/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="{{url('/img/admin/favicon')}}/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="{{url('/img/admin/favicon')}}/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="{{url('/img/admin/favicon')}}/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="{{url('/img/admin/favicon')}}/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="{{url('/img/admin/favicon')}}/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="{{url('/img/admin/favicon')}}/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="{{url('/img/admin/favicon')}}/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="{{url('/img/admin/favicon')}}/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{url('/img/admin/favicon')}}/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{{url('/img/admin/favicon')}}/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="{{url('/img/admin/favicon')}}/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('/img/admin/favicon')}}/favicon-16x16.png">
        <link rel="apple-touch-icon" sizes="180x180" href="{{url('/img/admin/favicon')}}/apple-icon-180.jpg">
        <link rel="apple-touch-icon" sizes="167x167" href="{{url('/img/admin/favicon')}}/apple-icon-167.jpg">
        <link rel="apple-touch-icon" sizes="152x152" href="{{url('/img/admin/favicon')}}/apple-icon-152.jpg">
        <link rel="apple-touch-icon" sizes="120x120" href="{{url('/img/admin/favicon')}}/apple-icon-120.jpg">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-2048-2732.jpg" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-2732-2048.jpg" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-1668-2388.jpg" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-2388-1668.jpg" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-1536-2048.jpg" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-2048-1536.jpg" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-1668-2224.jpg" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-2224-1668.jpg" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-1620-2160.jpg" media="(device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-2160-1620.jpg" media="(device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-1242-2688.jpg" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-2688-1242.jpg" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-1125-2436.jpg" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-2436-1125.jpg" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-828-1792.jpg" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-1792-828.jpg" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-1080-1920.jpg" media="(device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-1920-1080.jpg" media="(device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-750-1334.jpg" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-1334-750.jpg" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-640-1136.jpg" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="{{url('/img/admin/favicon')}}/apple-splash-1136-640.jpg" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="msapplication-TileColor" content="#646b7f">
        <meta name="msapplication-TileImage" content="{{url('/img/admin/favicon')}}/ms-icon-144x144.png">
        <link rel="manifest" href="{{url('/img/admin/favicon/manifest.json')}}">


        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/admin/start.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/start.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
            @include('shared.sidenav')
            <!-- Page Content -->
            <main  class="main">
                <!-- Page Heading -->
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
