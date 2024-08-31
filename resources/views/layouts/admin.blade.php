<!DOCTYPE html>
<html lang="{{ app()->getLocale()}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token()}}">
        <title>@yield('title')</title>
        <script src="{{ asset('js/app.js')}}"defer></script>
        <link rel="dns-prefetch"href="fttps://fonts.gstatic.com/css?family=Raleway:300,400,600" rel="stylesheet"type="text/css">
        <link href="{{ asset('css/admin.css')}}"rel="stylesheet">
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
                        <ul class="navbar-nav">
                          <!-- Authentication Links -->
                            @guest
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->name}} <span class="caret"></span>
                                    </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclink="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                {{ __('messages.logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </from>
                                        </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <main class="py-4">
            </main>
        </div>
    </body>
</html>

<!-- 1.Bladeテンプレートで、埋め込みたい箇所に利用するワードは何だったでしょうか？
コンテンツ

2.Webpackで使われているBootstrapやSCSSはどういったものか、調べられる範囲で調べてみましょう
bootstrapは、WEB画面を作るときに便利なCSSフレームワークの一つで携帯でアクセスしたときに画面サイズが調整されるなど見やすくなる
SCSSは、CSSをより効率的に記述できる言語、Webサイトや文書などの見た目の表示形式を定義するスタイルシートの拡張構文を提供するプリプロセッサ
→プリプロセッサ…中心的な処理を行うプログラムに対して、その前処理（preprocess）を行うプログラムのこと。

3. -->