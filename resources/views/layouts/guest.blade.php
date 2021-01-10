<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/login.css') }}">


    <!-- Scripts -->
</head>

<body>
    <div class="cont" id="root">
        <div class="row">
            <div class="col s12 l5">
                <div class="row">
                    <div class="col s12" v-show="!loader">
                        <div class="img-container brand-logo">
                            <a href="/">
                                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                            </a>
                        </div>
                        <div class="brand">
                            Start CMS
                        </div>
                        <div class="sub-brand">
                            The Lightweight CMS
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m3 l4 login">
                        <div class="font-sans text-gray-900 antialiased">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l7 hide-on-med-and-down wallpapper"></div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
