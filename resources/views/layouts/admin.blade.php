<!DOCTYPE html>
<html lang="{{ app()->getLocale()}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token()}}">
        <title>@yield('title')</title>
        <script src="{{ secure_asset('js/app.js')}}"defer></script>
        <link rel="dns-prefetch"href="fttps://fonts.gstatic.com/css?family=Raleway:300,400,600" rel="stylesheet"type="text/css">
        <link href="{{ secure_asset('css/admin.css')}}"rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-darknavbar-laravel">
                <div class="contanier">
                    <a class="navbar-brand" href="{{url('/')}}">
                    </a>
                    <button class="navbar-toggler"type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarsSupportedContent" aria-expanded="false"aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse"id="navbarSupprtedContent">
                        <ul class="navbar-nav ms-auto"></ul>
                        <ul class="navbar-nav"></ul>
                    </div>
                </div>
            </nav>
            <main class="py-4">
            </main>
        </div>
    </body>
</html>

