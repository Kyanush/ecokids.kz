@php
    $address = config('shop.address');
    $number_phones = config('shop.number_phones');
@endphp

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords"    content="@yield('keywords')">

    <meta property="og:locale"       content="ru_KZ" />
    <meta property="og:type"         content="website">
    <meta property="og:url"          content="{{ url()->current() }}"/>
    <meta property="og:site_name"    content="{{ env('APP_NAME') }}" />
    <meta property="og:title"        content="@yield('og_title')"/>
    <meta property="og:description"  content="@yield('og_description')"/>
    <meta property="og:image"        content="@yield('og_image')"/>
    <meta property="og:image:width"  content="80">
    <meta property="og:image:height" content="80">

    <script src="/site/js/jquery.min.js"></script>

    <!-- axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="/global/config-axios.js"></script>
    <!-- axios -->




    <!---- sweetalert2  ----->
    <script src="/site/sweetalert2/sweetalert2.all.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
    <link rel="stylesheet" type="text/css" href="/site/sweetalert2/sweetalert2.min.css">
    <!---- sweetalert2  ----->

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Vue js -->
    <script type="text/javascript" src="/site/js/vue.2.6.4.js"></script>
    <script type="module">
        import Vue from 'https://cdn.jsdelivr.net/npm/vue@2.6.4/dist/vue.esm.browser.js'
    </script>
    <script type="text/javascript" src="/site/js/axios.min.js"></script>
    <!-- Vue js -->

    <meta name="csrf-token"               content="{{ csrf_token() }}" />

    <link rel="preload" href="//fonts.googleapis.com/css?family=Fredoka+One%3Aregular%7CMontserrat%3A500%2C800%7COpen+Sans%3Aregular%2C700%26subset%3Dlatin%2Clatin-ext" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Fredoka+One%3Aregular%7CMontserrat%3A500%2C800%7COpen+Sans%3Aregular%2C700%26subset%3Dlatin%2Clatin-ext">
    </noscript>

    <link rel="stylesheet" href="/site/css/style.css" type="text/css"   media="all"/>
    <link rel="stylesheet" href="/site/css/min.css"   type="text/css"   media="all"/>
    <link rel="stylesheet" href="/site/css/my.css"    type="text/css"   media="all"/>



    @yield('add_in_head')
    @include('schemas.business')
    @include('schemas.organization')
    @yield('schemas_breadcrumb')
    @yield('schemas_product')
    @include('includes.analytics')

</head>


<body class="home page-template page-template-page-templates page-template-home-page page-template-page-templateshome-page-php page page-id-347 custom-background theme-kidz woocommerce-no-js sidebar-disable header-type-1 sticky-type-1 layout-boxed-white fixed-slider  woocommerce-on theme-demo preload
    @yield('body_class')
">

@include('site.includes.search')


<div id="wrap" class="search-type-1 wrap--boxed wrap--boxed-white">
    <header id="header">
        <div id="home-top-menu" class="top-menu with-bg" style="background-color:#394c69;color:#ffffff">
            <!--Navigation-->
            <div class="container">
                <div class="auth">
                    <a href="{{ route('my_account') }}" rel="nofollow">
                        <svg>
                            <use xlink:href="#svg-user">
                                <svg viewBox="0 0 12 12" id="svg-user" fill="inherit" stroke="inherit"><path d="M6 6C7.65 6 9 4.65 9 3C9 1.35 7.65 0 6 0C4.35 0 3 1.35 3 3C3 4.65 4.35 6 6 6ZM6 7.5C3.975 7.5 0 8.475 0 10.5V12H12V10.5C12 8.475 8.025 7.5 6 7.5Z" fill="inherit" stroke="none"></path></svg>
                            </use>
                        </svg>
                        @guest
                            <span><a href="{{ route('login') }}">Войти</a></span>
                            <span><a href="{{ route('register') }}">Регистрация</a></span>
                        @endguest
                        @auth
                            <span><a href="{{ route('my_account') }}">Вы вошли как {{ Auth::user()->name }}</a></span>
                            <span><a href="{{ route('logout') }}">Выйти</a></span>
                        @endauth
                    </a>
                </div>
                <nav>
                    <ul id="menu-top-menu" class="menu">
                        @section('menu_top')
                            <li class="menu-item {{ Request::routeIs('guaranty') ? 'active' : '' }}">
                                <a href="{{ route('guaranty') }}">
                                    Гарантия
                                </a>
                            </li>
                            <li class="menu-item {{ Request::routeIs('delivery_payment') ? 'active' : '' }}">
                                <a href="{{ route('delivery_payment') }}">
                                    Доставка/Оплата
                                </a>
                            </li>
                            <li class="menu-item {{ Request::routeIs('contact') ? 'active' : '' }}">
                                <a href="{{ route('contact') }}">
                                    Контакты
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-402">
                                <a>
                                    Меню
                                </a>
                                <a href="#" class="js-more"><i class="more"></i></a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom {{ Request::routeIs('wishlist') ? 'active' : '' }}">
                                        <a href="{{ route('wishlist') }}">
                                            Мои закладки
                                            <span v-if="product_features_wishlist_count > 0">
                                                @{{  product_features_wishlist_count }}
                                            </span>
                                        </a>
                                        <a href="#" class="js-more"><i class="more"></i></a>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom {{ Request::routeIs('compare_products') ? 'active' : '' }}">
                                        <a href="{{ route('compare_products') }}">
                                            Сравнение товаров
                                            <span v-if="product_features_compare_count > 0">
                                                @{{  product_features_compare_count }}
                                            </span>
                                        </a>
                                        <a href="#" class="js-more"><i class="more"></i></a>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom {{ Request::routeIs('about') ? 'active' : '' }}">
                                        <a href="{{ route('about') }}">
                                            О нас
                                        </a>
                                        <a href="#" class="js-more"><i class="more"></i></a>
                                    </li>
                                </ul>
                            </li>
                        @stop
                        @mobile
                        @elsemobile
                            @yield('menu_top')
                        @endmobile
                    </ul>
                </nav>
            </div>
        </div>
        <div class="main-menu initialized">
            <div class="container">
                <a class="mobile-menu" href="#">
                    <svg>
                        <use xlink:href="#svg-bars">
                            <svg viewBox="0 0 18 15" id="svg-bars" fill="inherit" stroke="inherit"><path d="M0 13.5c0-.828.662-1.5 1.504-1.5h14.992c.83 0 1.504.666 1.504 1.5 0 .828-.662 1.5-1.504 1.5H1.504C.674 15 0 14.334 0 13.5zm0-6C0 6.672.662 6 1.504 6h14.992C17.326 6 18 6.666 18 7.5c0 .828-.662 1.5-1.504 1.5H1.504C.674 9 0 8.334 0 7.5zm0-6C0 .672.662 0 1.504 0h14.992C17.326 0 18 .666 18 1.5c0 .828-.662 1.5-1.504 1.5H1.504C.674 3 0 2.334 0 1.5z" fill="inherit" fill-rule="evenodd" stroke="none"></path></svg>
                        </use>
                    </svg>
                </a>
                <div class="container-2">
                    <a rel="nofollow" class="wishlist" href="{{ route('wishlist') }}">
                        <svg class="svg on" v-if="product_features_wishlist_count > 0">
                            <use xlink:href="#svg-wishlist-on">
                                <svg viewBox="0 0 272 233" id="svg-wishlist-on" fill="inherit" stroke="inherit"><path d="M135.695 42.202c66.16-117.992 269.043 32.762 0 189.985V42.202zm-.017.097c-66.16-117.992-269.043 32.762 0 189.985V42.299zM31 58.601c.002-11.835 16.913-13.483 19.315 0 4.519 25.377 6.931 47.092 36.805 74.913 15.406 14.348-4.92 21.15-11.85 14.71 0 0-44.28-33.076-44.27-89.623z" fill="inherit" fill-rule="evenodd" stroke="none"></path></svg>
                            </use>
                        </svg>
                        <svg class="svg off" v-else>
                            <use xlink:href="#svg-wishlist-off">
                                <svg viewBox="0 0 23 20" id="svg-wishlist-off" fill="inherit" stroke="inherit"><path d="M11.437 7.692c.02-.06.041-.118.062-.176V3.585c-5.607-10-22.802 2.777 0 16.102v-3.092l-.054.032v.01a25.852 25.852 0 0 1-.008-.005l-.007.004v-.009c-18.1-10.586-3.907-20.304.007-8.935zm.064 8.902v3.085c22.802-13.325 5.607-26.103 0-16.102v3.935c3.997-11.073 17.917-1.435 0 9.082z" fill="inherit" fill-rule="evenodd" stroke="none"></path></svg>
                            </use>
                        </svg>
                    </a>
                    <a class="search" href="#">
                        <svg>
                            <use xlink:href="#svg-search">
                                <svg viewBox="0 0 20 20" id="svg-search" fill="inherit" stroke="inherit"><path d="M11.124 15.367l.001.001 3.528 3.527a3.005 3.005 0 0 0 4.246.004 3.005 3.005 0 0 0-.004-4.246l-3.527-3.528h-.001A7.977 7.977 0 0 0 16 8a8 8 0 1 0-4.876 7.367zM8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10z" fill="inherit" fill-rule="evenodd" stroke="none"></path></svg>
                            </use>
                        </svg>
                    </a>
                    <a class="cart-info" href="{{ route('checkout') }}">
                        <svg>
                            <use xlink:href="#svg-cart">
                                <svg viewBox="0 0 24 22" id="svg-cart" fill="inherit" stroke="inherit"><path d="M9 7H1.501C.667 7 0 7.672 0 8.5v2c0 .826.672 1.5 1.501 1.5H2v7.506A2.5 2.5 0 0 0 4.493 22h15.014A2.495 2.495 0 0 0 22 19.506V12h.499c.834 0 1.501-.672 1.501-1.5v-2c0-.826-.672-1.5-1.501-1.5H15v1.002A2 2 0 0 1 13.002 10h-2.004A2 2 0 0 1 9 8.002V7zm-4 6.003A.999.999 0 0 1 6 12c.552 0 1 .438 1 1.003v4.994A.999.999 0 0 1 6 19c-.552 0-1-.438-1-1.003v-4.994zm4 0A.999.999 0 0 1 10 12c.552 0 1 .438 1 1.003v4.994A.999.999 0 0 1 10 19c-.552 0-1-.438-1-1.003v-4.994zm4 0A.999.999 0 0 1 14 12c.552 0 1 .438 1 1.003v4.994A.999.999 0 0 1 14 19c-.552 0-1-.438-1-1.003v-4.994zm4 0A.999.999 0 0 1 18 12c.552 0 1 .438 1 1.003v4.994A.999.999 0 0 1 18 19c-.552 0-1-.438-1-1.003v-4.994zM10 .998A.998.998 0 0 1 11.01 0h1.98c.558 0 1.01.446 1.01.998v7.004A.998.998 0 0 1 12.99 9h-1.98C10.451 9 10 8.554 10 8.002V.998z" fill="inherit" fill-rule="evenodd" stroke="none"></path></svg>
                            </use>
                        </svg>
                        <span class="ip-cart-count" v-if="cart_total.quantity">@{{ cart_total.quantity }}</span>
                    </a>
                    <span class="logo-wrap">
                        <a href="/">
                             <img class="logo svg" src="{{ config('shop.logo') }}" title="{{ env('APP_NAME') }}" alt="{{ env('APP_NAME') }}"/>
                        </a>
                    </span>
                </div>
                <div class="menu-shadow"></div>
                <div class="product-categories">
                    <ul class="main-menu-container main-menu-icons main-menu-fixed">


                        <?php
                        $categories = \App\Models\Category::orderBy('sort')->isActive()->where('parent_id', 0)->get();
                        ?>

                            @foreach($categories as $k => $category)

                                <?php
                                    $categories = [];
                                    foreach($category->children()->isActive()->orderBy('sort')->get() as $category_children){
                                        $categories[] = $category_children;

                                        $childrens_all = \App\Models\Category::orderBy('sort')
                                            ->isActive()
                                            ->whereIn('id', \App\Services\ServiceCategory::categoryChildIds($category_children->id, false, true))
                                            ->get();

                                        foreach ($childrens_all as $item)
                                            $categories[] = $item;
                                    }
                                ?>

                                <li class="with-icon items-6 @if(count($categories) > 0) has-children ltr @endif">
                                    <a href="{{ $category->catalogUrl() }}">
                                        <img src="{{ $category->pathImage(true) }}"/>
                                        <span>{{ $category->name }}</span>
                                    </a>
                                    @if(count($categories) > 0)
                                        <a class="js-more" href="#"><i class="more"></i></a>
                                        <ul class="submenu">
                                            @foreach($categories as $key => $item)
                                                <li class="">
                                                    <a href="{{ $item->catalogUrl() }}">
                                                        {{ $item->name }}
                                                    </a>
                                                    <a class="js-more" href="#">
                                                        <i class="more"></i>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach

                            @mobile
                                <li class="space-item"></li>
                                @yield('menu_top')
                            @elsemobile
                            @endmobile

                    </ul>
                    <a class="mobile-menu-close" href="#">
                        <svg>
                            <use xlink:href="#svg-close">
                                <svg viewBox="0 0 13 13" id="svg-close" fill="inherit" stroke="inherit"><path d="M2.19.326A1.671 1.671 0 0 0 .568 3.122L4.21 6.763v-.708L.568 9.696a1.671 1.671 0 1 0 2.366 2.362l3.64-3.638h-.707l3.642 3.642a1.68 1.68 0 0 0 2.366.006 1.674 1.674 0 0 0-.002-2.372l-3.641-3.64v.707l3.643-3.643A1.68 1.68 0 0 0 11.88.755a1.674 1.674 0 0 0-2.37.002l-3.642 3.64h.706L2.931.756a1.674 1.674 0 0 0-.74-.431z" stroke="none"></path></svg>
                            </use>
                        </svg>
                    </a>
                    <div class="auth">
                        <a href="#" rel="nofollow">
                            <svg>
                                <use xlink:href="#svg-user">
                                    <svg viewBox="0 0 12 12" id="svg-user" fill="inherit" stroke="inherit"><path d="M6 6C7.65 6 9 4.65 9 3C9 1.35 7.65 0 6 0C4.35 0 3 1.35 3 3C3 4.65 4.35 6 6 6ZM6 7.5C3.975 7.5 0 8.475 0 10.5V12H12V10.5C12 8.475 8.025 7.5 6 7.5Z" fill="inherit" stroke="none"></path></svg>
                                </use>
                            </svg>

                            @guest
                                <span><a href="{{ route('login') }}">Войти</a></span>
                                <span><a href="{{ route('register') }}">Регистрация</a></span>
                            @endguest
                            @auth
                                <span><a href="{{ route('my_account') }}">Вы вошли как {{ Auth::user()->name }}</a></span>
                                <span><a href="{{ route('logout') }}">Выйти</a></span>
                            @endauth


                        </a>
                    </div>
                    <a href="#" class="mobile-menu-back">
                        <svg>
                            <use xlink:href="#svg-angle-left">
                                <svg viewBox="0 0 216 348" id="svg-angle-left" fill="inherit" stroke="inherit"><path d="M144.826 335.255a40.815 40.815 0 1 0 57.965-57.446L98.706 174 201.38 70.708a40.815 40.815 0 1 0-57.418-57.965L11.947 144.699c-15.93 15.938-15.93 41.769 0 57.706l132.879 132.85z" fill="inherit" fill-rule="evenodd" stroke="none"></path></svg>
                            </use>
                        </svg>
                        Назад
                    </a>
                    <a rel="nofollow" class="mobile-wishlist" href="{{ route('wishlist') }}">
                        <svg class="svg on" v-if="product_features_wishlist_count > 0">
                            <use xlink:href="#svg-wishlist-on">
                                <svg viewBox="0 0 272 233" id="svg-wishlist-on" fill="inherit" stroke="inherit"><path d="M135.695 42.202c66.16-117.992 269.043 32.762 0 189.985V42.202zm-.017.097c-66.16-117.992-269.043 32.762 0 189.985V42.299zM31 58.601c.002-11.835 16.913-13.483 19.315 0 4.519 25.377 6.931 47.092 36.805 74.913 15.406 14.348-4.92 21.15-11.85 14.71 0 0-44.28-33.076-44.27-89.623z" fill="inherit" fill-rule="evenodd" stroke="none"></path></svg>
                            </use>
                        </svg>
                        <svg class="svg off" v-else>
                            <use xlink:href="#svg-wishlist-off">
                                <svg viewBox="0 0 23 20" id="svg-wishlist-off" fill="inherit" stroke="inherit"><path d="M11.437 7.692c.02-.06.041-.118.062-.176V3.585c-5.607-10-22.802 2.777 0 16.102v-3.092l-.054.032v.01a25.852 25.852 0 0 1-.008-.005l-.007.004v-.009c-18.1-10.586-3.907-20.304.007-8.935zm.064 8.902v3.085c22.802-13.325 5.607-26.103 0-16.102v3.935c3.997-11.073 17.917-1.435 0 9.082z" fill="inherit" fill-rule="evenodd" stroke="none"></path></svg>
                            </use>
                        </svg>
                    </a>
                    <a class="mobile-search" href="#">
                        <svg>
                            <use xlink:href="#svg-search">
                                <svg viewBox="0 0 20 20" id="svg-search" fill="inherit" stroke="inherit"><path d="M11.124 15.367l.001.001 3.528 3.527a3.005 3.005 0 0 0 4.246.004 3.005 3.005 0 0 0-.004-4.246l-3.527-3.528h-.001A7.977 7.977 0 0 0 16 8a8 8 0 1 0-4.876 7.367zM8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10z" fill="inherit" fill-rule="evenodd" stroke="none"></path></svg>
                            </use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </header>

        @yield('content')

    <footer id="footer">
        <div class="wrap" style="background-color:#394c69;color:#c0c7d1">
            <div class="container">
                <div class="row footer-sidebar">
                    <div class="col-md-3 col-sm-6 col-xs-6 first">
                        <div class="footer-logo">
                            <a href="/">
                                <img class="svg" src="{{ config('shop.logo') }}" title="{{ env('APP_NAME') }}" alt="{{ env('APP_NAME') }}"/>
                            </a>
                        </div>
                        <div class="contacts">
                            {{ $address[0]['addressLocality'] }}
                            <br>
                            {{ $address[0]['streetAddress'] }}
                            <a href="mailto:{{ config('shop.site_email') }}">
                                {{ config('shop.site_email') }}
                            </a>
                        </div>
                    </div>

                    @php $products = \App\Services\ServiceYouWatchedProduct::listProducts(false, 4); @endphp
                    @include('site.includes.widget_footer', ['title' => 'Вы смотрели', 'products' => $products])

                    @php
                        $products = \App\Models\Product::productInfoWith()
                                ->limit(4)
                                ->filtersAttributes(['tip_tovara' => 'new'])
                                //->where('stock', '>', 0)
                                ->inRandomOrder()
                                ->get();
                    @endphp
                    @include('site.includes.widget_footer', ['title' => 'Новинки', 'products' => $products])

                    @php
                        $products = \App\Models\Product::productInfoWith()
                                ->limit(4)
                                //->where('stock', '>', 0)
                                ->OrderBy('id', 'DESC')
                                ->get();
                    @endphp
                    @include('site.includes.widget_footer', ['title' => 'Новые поступления', 'products' => $products])

                </div>
                <div class="row bottom ">
                    <div class="col-xs-12">
                        Доставка по всему Казахстану: в Алматы, Нур-Султан, Актобе, Актау, Атырау, Усть-Каменогорск, Караганду, Семей, Шымкент, Костанай, Павлодар, Уральск, Кызылорду и другие города.
                    </div>
                    <br/><br/>
                    <div class="col-xs-6 col-xs-push-6">
                        <div class="soc">
                            <a href="{{ config('shop.social_network.instagram') }}" target="_blank" title="Вы в Instagram">
                                <i class="soc-img soc-instagram fa fa-instagram"></i>
                            </a>
                            <!--
                            <a href="#" target="_blank">
                                <svg class="soc-img soc-facebook">
                                    <use xlink:href="#svg-facebook"></use>
                                </svg>
                            </a>
                            <a href="#" target="_blank">
                                <svg class="soc-img soc-twitter">
                                    <use xlink:href="#svg-twitter"></use>
                                </svg>
                            </a>
                            <a href="#" target="_blank">
                                <svg class="soc-img soc-youtube">
                                    <use xlink:href="#svg-youtube"></use>
                                </svg>
                            </a>
                            --->
                        </div>
                    </div>
                    <div class="col-xs-6 col-xs-pull-6 copyright">
                        Copyright &copy;{{date('Y')}} Все права защищены.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- #wrap
<div id="ip-quickview"></div>
-->

@include('includes.quickView')

<!-- Mask --->
<script type="text/javascript" src="/site/js/jquery.maskedinput.min.js"></script>
<!-- Mask --->

<script src="/global/script.js"></script>
<script src="/site/js/script.js?r={{rand(1, 11000000)}}"></script>
<script src="/site/js/slick.min.js"></script>
<script src="/site/js/main.js?r={{rand(1, 11000000)}}"></script>



</body>
</html>
