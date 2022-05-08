<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @stack('css')
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    
</head>

<body>

    @if (session('flash_message'))
            <div class="flash_message">
                {{ session('flash_message') }}
            </div>
    @endif
    
    <!--test 一応残しておいて-->
    <!--<div class="flash_message_test">-->
    <!--    AAAAAAAARIN-->
    <!--</div>-->
    <!---->
    
    
    <div class="header-wrap">
        <div class="header-left-wrap">
            <div class="menswear">
                <a class="header-menu" href="/item/men's/none/none">Men's</a>
            </div>
            <div class="womanswear">
                <a class="header-menu" href="/item/women's/none/none">Women's</a>
            </div>
            <div class="mono">
                <span>EverythingElse</span>
            </div>
            <div class="kensaku">
                <span>search<span>
            </div>
            <nav class="footer-nav">
                <div class="nav-footer-head">
                    <div class="nav-menswear">
                        <button onclick="placeholderChange('メンスウェア','keyword_men')">Men's</button>
                    </div>
                    <div class="nav-womanswear">
                        <button onclick="placeholderChange('ウィメンズウェア','keyword_women')">Women's</button>
                    </div>
                    <div class="nav-mono">
                        <button onclick="placeholderChange('物とモノ','keyword_mono')">物とモノ</button>
                    </div>
                </div>
                <div class="serch-grid">
                    <form class='nav-form'  action="/search" method="POST" >
                        @csrf
                        <input class="nav-serch-grid" type="text" name = "keyword"  placeholder="メンズウェアを検索">
                        <input class="nav-serch-submit" type="submit" src="./balloon-fill.svg">
                    </form>
                    <div class="close-button">閉じる</div>
                </div>
            </nav>
            <div class="nav-mask"></div>
        </div>
        <div class="header-logo-wrap">
            <a href="/">LDERA</a>
        </div>
        <div class="header-right-wrap">
            
            <nav class="hr_language">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/account" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
                <div class="hr-hosiimono-list">
                    <a href = "/wish">WishList</a>
                </div>
                <div class="hr-shopingcart">
                    <a href = "/cart">ShopingCart</a>
                </div>
            </nav>
     
        </div>
    </div>
    <div class="respon-header">
        <div class="res-main-header">
            <div class="res-reft-main-header">
                <div class="res-reft-main-header-item1 res-item">
                    <a>
                        <img src="{{ asset('icon/justify.svg') }}">
                    </a>
                </div>
                <div class="res-reft-main-header-item2 res-item">
                    <a>
                        <img src="{{ asset('icon/search.svg') }}">
                    </a>
                </div>
            </div>
            <div class="res-center-main-header">
                <a href="/">
                    LDERA
                </a>
            </div>
            <div class="res-right-main-header">
                <div class="res-reft-main-header-item1 res-item">
                    <a href="/account">
                        <img src="{{ asset('icon/person-lines-fill.svg') }}">
                    </a>
                </div>
                <div class="res-reft-main-header-item2 res-item">
                    <a href = "/cart">
                        <img src="{{ asset('icon/cart4.svg') }}">
                    </a>
                </div>
            </div>
            
        </div>
        <div class="res-serch">
                <nav class="footer-nav">
                    <div class="nav-footer-head">
                        <div class="nav-menswear">
                            <button onclick="placeholderChange2('メンスウェア','keyword_men')">Men's</button>
                        </div>
                        <div class="nav-womanswear">
                            <button onclick="placeholderChange2('ウィメンズウェア','keyword_women')">Women's</button>
                        </div>
                        <div class="nav-mono">
                            <button onclick="placeholderChange2('物とモノ','keyword_mono')">物とモノ</button>
                        </div>
                    </div>
                    <div class="serch-grid">
                        <form class='nav-form' action="/search" method="POST">
                            @csrf
                            <input class="nav-serch-grid nsv" type="text" name = "keyword" placeholder="メンズウェアを検索">
                            <input class="nav-serch-submit" type="submit"  src="{{ asset('icon/search.svg') }}">
                            <!--<input class="nav-serch-submit" type="image" name='submit' src="{{ asset('icon/search.svg') }}">-->
                        </form>
                    </div>
                    <div class="close-button">閉じる</div>
                </nav>
        </div>
        <div class="res-aside-header">
            <button class="close-aside-button">close</button>
            <div class="res-aside-header-wrap">
                <ul>
                    <li>
                        <button class="res-btn">
                            <a href = "/item/men's/none/none">メンズウェア</a>
                        </button>
                    </li>
                    <li>
                        <button class="res-btn">
                            <a href = "/item/women's/none/none">ウィメンズウェア</a>
                        </button>
                    </li>
                    <li>
                        <button class="res-btn">
                            物とモノ
                        </button>
                    </li>
                    <li>
                        <button class="res-btn">
                            <a href = "/cart">ショッピングカート</a>
                        </button>
                    </li>
                                        <li>
                        <button class="res-btn">
                            <a href = "/wish">ほしい物リスト</a>
                        </button>
                    </li>
                                        <li>
                        <button class="res-btn">
                            <a href = "/account/order">注文履歴</a>
                        </button>
                    </li>
                    <li>
                        <button class="res-btn">
                            <a href = "/account/address">住所</a>
                        </button>
                    </li>
                    <li>
                        <button class="res-btn">
                            <a href = "/account/mailconfig">メール設定</a>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/header.js') }}"></script>
    <script>
        const closeButtonElement = document.getElementsByClassName('close-button')[0]
        const navMenuElement = document.getElementsByClassName('footer-nav')[0]
        const serchElement = document.getElementsByClassName('kensaku')[0]
        const navMaskElement = document.getElementsByClassName('nav-mask')[0]
        const navSearchGridElement = document.getElementsByClassName('nav-serch-grid')[0]
        const navSearchGridElement2 = document.getElementsByClassName('nsv')[0]
        
        serchElement.addEventListener('click', () => {
            navMenuElement.style['display'] = 'inline'
            navMaskElement.style['display'] = 'inline'
            console.log('kensaku click')
        })

        closeButtonElement.addEventListener('click', () => {
            navMenuElement.style['display'] = 'none'
            navMaskElement.style['display'] = 'none'
        })

        function placeholderChange(queryName,namename) {
            navSearchGridElement.placeholder = queryName
     
            navSearchGridElement.name = namename
        
        }
        function placeholderChange2(queryName2,namename2) {
            navSearchGridElement2.placeholder = queryName2
     
            navSearchGridElement2.name = namename2
        
        }


    </script>
    @yield('content')



    <footer>
        <div class="menu">
            <ul>
                <li><a href="">© 2022 ssada.com</a></li>
                <li><a href="">Terms & Conditions</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Cookies</a></li>
                <li><a href="">Accessibility</a></li>
            </ul>
        </div>
        <blockquote>@ 2021 Carlin, inc.</blockquote>
    </footer>

</body>





</html>