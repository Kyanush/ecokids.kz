<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
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


<body class="home page-template page-template-page-templates page-template-home-page page-template-page-templateshome-page-php page page-id-347 custom-background theme-kidz woocommerce-no-js sidebar-disable header-type-1 sticky-type-1 layout-boxed-white fixed-slider  woocommerce-on theme-demo preload">

<!-- Поиск --->
<span id="search">
    <div id="ajax-search" class="search-type-1">
        <div class="container ajax-search-container">
            <div class="ajax-search-tip">Что вы ищите?</div>
            <form role="search" method="get" action="{{ route('search') }}">
                <input id="ajax-search-input" autocomplete="off" type="text" name="s" placeholder="Поиск товара..." value="">
                <input type="hidden" name="post_type" value="product">
                <a id="search-close" href="#">
                    <svg>
                        <use xlink:href="#svg-close">
                            <svg viewBox="0 0 13 13" id="svg-close" fill="inherit" stroke="inherit"><path d="M2.19.326A1.671 1.671 0 0 0 .568 3.122L4.21 6.763v-.708L.568 9.696a1.671 1.671 0 1 0 2.366 2.362l3.64-3.638h-.707l3.642 3.642a1.68 1.68 0 0 0 2.366.006 1.674 1.674 0 0 0-.002-2.372l-3.641-3.64v.707l3.643-3.643A1.68 1.68 0 0 0 11.88.755a1.674 1.674 0 0 0-2.37.002l-3.642 3.64h.706L2.931.756a1.674 1.674 0 0 0-.74-.431z" stroke="none"></path></svg>
                        </use>
                    </svg>
                </a>
                <button type="submit" class="search">
                    <svg>
                        <use xlink:href="#svg-search">
                            <svg viewBox="0 0 20 20" id="svg-search" fill="inherit" stroke="inherit"><path d="M11.124 15.367l.001.001 3.528 3.527a3.005 3.005 0 0 0 4.246.004 3.005 3.005 0 0 0-.004-4.246l-3.527-3.528h-.001A7.977 7.977 0 0 0 16 8a8 8 0 1 0-4.876 7.367zM8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10z" fill="inherit" fill-rule="evenodd" stroke="none"></path></svg>
                        </use>
                    </svg>
                </button>
            </form>
        </div>
    </div>
    <div id="ajax-search-result" class="search-type-1 loading">
        <div class="container ajax-search-result-container js-ajax-search-result       loaded">

            <li class="ajax-search-row post-126 type-product status-publish has-post-thumbnail product_cat-girl-shoes product_cat-shoes product first instock featured shipping-taxable purchasable product-type-simple">
                <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-sparkle-cat-crib-shoes/">
                    <div class="post-img">
                        <img src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-70x70.jpg" alt="">
                    </div>
                </a>

                <div class="post-content">
                    <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-sparkle-cat-crib-shoes/">
                        <h4>Oshkosh sparkle cat crib shoes</h4>
                    </a>

                    <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>22</span></span>									<div class="actions">
                        <a href="/kidz/demo2/wp-admin/admin-ajax.php?add-to-cart=126" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="126" data-product_sku="" aria-label="Add “Oshkosh sparkle cat crib shoes” to your cart" rel="nofollow">Add to cart</a><span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>									</div>

                </div>
            </li>
            <li class="no-results">No results found</li>

        </div>
    </div>
    <div class="search-shadow search-type-1 loading">
        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
    </div>
</span>
<!-- Поиск --->


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
                            <span><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Войти</a></span>
                            <span><a href="{{ route('register') }}"><i class="fa fa-user-o"></i> Регистрация</a></span>
                        @endguest
                        @auth
                            <span><a href="{{ route('my_account') }}"><i class="fa fa-sign-in"></i> Вы вошли как {{ Auth::user()->name }}</a></span>
                            <span><a href="{{ route('logout') }}">    <i class="fa fa-user-o"></i> Выйти</a></span>
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
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                            </li>
                            <li class="menu-item {{ Request::routeIs('contact') ? 'active' : '' }}">
                                <a href="{{ route('contact') }}">
                                    Контакты
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-402">
                                <a>Меню</a>
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
                    <a class="search" href="{{ route('search') }}">
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
                                <span><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Войти</a></span>
                                <span><a href="{{ route('register') }}"><i class="fa fa-user-o"></i> Регистрация</a></span>
                            @endguest
                            @auth
                                <span><a href="{{ route('my_account') }}"><i class="fa fa-sign-in"></i> Вы вошли как {{ Auth::user()->name }}</a></span>
                                <span><a href="{{ route('logout') }}">    <i class="fa fa-user-o"></i> Выйти</a></span>
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
                    <a class="mobile-search" href="{{ route('search') }}">
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
                            <img src="./KIDZ – Baby Shop &amp; Kids Store WooCommerce WordPress Theme – Just another WordPress site_files/logo.svg" class="svg" alt="KIDZ - Baby Shop &amp; Kids Store WooCommerce Wordpress Theme">
                        </div>
                        <div class="contacts">
                            555 California str, Suite 100<br>
                            San&nbsp;Francisco, CA 94107<br>
                            1-800-312-2121<br>
                            1-800-310-1010<br><br>
                            <a href="mailto:example@domrfain.net">example@domain.net</a>
                        </div>
                    </div>
                    <aside id="woocommerce_products-6" class="widget footer-widget woocommerce widget_products col-md-3 col-sm-6 col-xs-6">
                        <h2 class="widget-title">Featured</h2>
                        <ul class="product_list_widget">
                            <li>
                                <a href="product/oshkosh-sparkle-cat-crib-shoes/">
                                    <img width="70" height="70" data-src="wp-content/uploads/2016/10/clothes-2-21-70x70.jpg" class="lazyload attachment-thumbnail size-thumbnail" alt="" data-srcset="wp-content/uploads/2016/10/clothes-2-21-70x70.jpg 70w, wp-content/uploads/2016/10/clothes-2-21-140x140.jpg 140w" data-sizes="(max-width: 70px) 100vw, 70px">		<span class="product-title">Oshkosh sparkle cat crib shoes</span>
                                </a>
                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>22</span>
                            </li>
                            <li>
                                <a href="product/oshkosh-chukka-boots/">
                                    <img width="70" height="70" data-src="wp-content/uploads/2016/10/clothes-2-26-70x70.jpg" class="lazyload attachment-thumbnail size-thumbnail" alt="" data-srcset="wp-content/uploads/2016/10/clothes-2-26-70x70.jpg 70w, wp-content/uploads/2016/10/clothes-2-26-140x140.jpg 140w" data-sizes="(max-width: 70px) 100vw, 70px">		<span class="product-title">Oshkosh chukka boots</span>
                                </a>
                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>44</span>
                            </li>
                            <li>
                                <a href="product/oshkosh-quilted-puffer-vest/">
                                    <img width="70" height="70" data-src="wp-content/uploads/2016/10/clothes-2-5-70x70.jpg" class="lazyload attachment-thumbnail size-thumbnail" alt="" data-srcset="wp-content/uploads/2016/10/clothes-2-5-70x70.jpg 70w, wp-content/uploads/2016/10/clothes-2-5-140x140.jpg 140w" data-sizes="(max-width: 70px) 100vw, 70px">		<span class="product-title">Oshkosh quilted puffer vest</span>
                                </a>
                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span>
                            </li>
                            <li>
                                <a href="product/french-terry-shawl-collar-cardigan/">
                                    <img width="70" height="70" data-src="wp-content/uploads/2016/10/clothes-2-4-70x70.jpg" class="lazyload attachment-thumbnail size-thumbnail" alt="" data-srcset="wp-content/uploads/2016/10/clothes-2-4-70x70.jpg 70w, wp-content/uploads/2016/10/clothes-2-4-140x140.jpg 140w" data-sizes="(max-width: 70px) 100vw, 70px">		<span class="product-title">French terry shawl collar cardigan</span>
                                </a>
                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>23</span>
                            </li>
                        </ul>
                    </aside>
                    <aside id="woocommerce_products-7" class="widget footer-widget woocommerce widget_products col-md-3 col-sm-6 col-xs-6">
                        <h2 class="widget-title">On Sale</h2>
                        <ul class="product_list_widget">
                            <li>
                                <a href="product/tiered-neon-maxi-skirt/">
                                    <img width="70" height="70" data-src="wp-content/uploads/2016/10/clothes-2-10-70x70.jpg" class="lazyload attachment-thumbnail size-thumbnail" alt="" data-srcset="wp-content/uploads/2016/10/clothes-2-10-70x70.jpg 70w, wp-content/uploads/2016/10/clothes-2-10-140x140.jpg 140w" data-sizes="(max-width: 70px) 100vw, 70px">		<span class="product-title">Tiered neon maxi skirt</span>
                                </a>
                                <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>8</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>6</span></ins>
                            </li>
                            <li>
                                <a href="product/oshkosh-jersey-lined-windbreaker/">
                                    <img width="70" height="70" data-src="wp-content/uploads/2016/10/clothes-1-9-70x70.jpg" class="lazyload attachment-thumbnail size-thumbnail" alt="" data-srcset="wp-content/uploads/2016/10/clothes-1-9-70x70.jpg 70w, wp-content/uploads/2016/10/clothes-1-9-140x140.jpg 140w" data-sizes="(max-width: 70px) 100vw, 70px">		<span class="product-title">Oshkosh jersey-lined windbreaker</span>
                                </a>
                                <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>20</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>16</span></ins>
                            </li>
                            <li>
                                <a href="product/oshkosh-quilted-puffer-vest-2/">
                                    <img width="70" height="70" data-src="wp-content/uploads/2016/10/clothes-2-8-70x70.jpg" class="lazyload attachment-thumbnail size-thumbnail" alt="" data-srcset="wp-content/uploads/2016/10/clothes-2-8-70x70.jpg 70w, wp-content/uploads/2016/10/clothes-2-8-140x140.jpg 140w" data-sizes="(max-width: 70px) 100vw, 70px">		<span class="product-title">Oshkosh quilted puffer vest</span>
                                </a>
                                <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>14</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>12</span></ins>
                            </li>
                            <li>
                                <a href="product/2-pocket-denim-bodysuit/">
                                    <img width="70" height="70" data-src="wp-content/uploads/2016/10/clothes-2-2-70x70.jpg" class="lazyload attachment-thumbnail size-thumbnail" alt="" data-srcset="wp-content/uploads/2016/10/clothes-2-2-70x70.jpg 70w, wp-content/uploads/2016/10/clothes-2-2-140x140.jpg 140w" data-sizes="(max-width: 70px) 100vw, 70px">		<span class="product-title">2-pocket denim bodysuit</span>
                                </a>
                                <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>13</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>10</span></ins>
                            </li>
                        </ul>
                    </aside>
                    <aside id="woocommerce_products-8" class="widget footer-widget woocommerce widget_products col-md-3 col-sm-6 col-xs-6">
                        <h2 class="widget-title">New</h2>
                        <ul class="product_list_widget">
                            <li>
                                <a href="product/stride-rite-str-tulip-sandal/">
                                    <img width="70" height="70" data-src="wp-content/uploads/2016/10/clothes-1-28-70x70.jpg" class="lazyload attachment-thumbnail size-thumbnail" alt="" data-srcset="wp-content/uploads/2016/10/clothes-1-28-70x70.jpg 70w, wp-content/uploads/2016/10/clothes-1-28-140x140.jpg 140w" data-sizes="(max-width: 70px) 100vw, 70px">		<span class="product-title">Stride rite str tulip sandal</span>
                                </a>
                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>48</span>
                            </li>
                            <li>
                                <a href="product/carters-unicorn-slippers/">
                                    <img width="70" height="70" data-src="wp-content/uploads/2016/10/clothes-1-27-70x70.jpg" class="lazyload attachment-thumbnail size-thumbnail" alt="" data-srcset="wp-content/uploads/2016/10/clothes-1-27-70x70.jpg 70w, wp-content/uploads/2016/10/clothes-1-27-140x140.jpg 140w" data-sizes="(max-width: 70px) 100vw, 70px">		<span class="product-title">Carter's unicorn slippers</span>
                                </a>
                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>10</span>
                            </li>
                            <li>
                                <a href="product/oshkosh-chukka-boots/">
                                    <img width="70" height="70" data-src="wp-content/uploads/2016/10/clothes-2-26-70x70.jpg" class="lazyload attachment-thumbnail size-thumbnail" alt="" data-srcset="wp-content/uploads/2016/10/clothes-2-26-70x70.jpg 70w, wp-content/uploads/2016/10/clothes-2-26-140x140.jpg 140w" data-sizes="(max-width: 70px) 100vw, 70px">		<span class="product-title">Oshkosh chukka boots</span>
                                </a>
                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>44</span>
                            </li>
                            <li>
                                <a href="product/stride-rite-made2play-sneaker-boot/">
                                    <img width="70" height="70" data-src="wp-content/uploads/2016/10/clothes-2-25-70x70.jpg" class="lazyload attachment-thumbnail size-thumbnail" alt="" data-srcset="wp-content/uploads/2016/10/clothes-2-25-70x70.jpg 70w, wp-content/uploads/2016/10/clothes-2-25-140x140.jpg 140w" data-sizes="(max-width: 70px) 100vw, 70px">		<span class="product-title">Stride rite made2play sneaker boot</span>
                                </a>
                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>55</span>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="row bottom ">
                    <div class="col-xs-6 col-xs-push-6">
                        <div class="soc">
                            <a href="#" target="_blank">
                                <svg class="soc-img soc-facebook">
                                    <use xlink:href="#svg-facebook"></use>
                                </svg>
                            </a>
                            <a href="#" target="_blank">
                                <svg class="soc-img soc-instagram">
                                    <use xlink:href="#svg-instagram"></use>
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
                        </div>
                    </div>
                    <div class="col-xs-6 col-xs-pull-6 copyright">© Copyright 2018, Kidz WordPress Theme</div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- #wrap -->
<div id="ip-quickview"></div>



<!-- Mask --->
<script type="text/javascript" src="/site/js/jquery.maskedinput.min.js"></script>
<!-- Mask --->

<script src="/global/script.js"></script>
<script src="/site/js/script.js"></script>
<script src="/site/js/slick.min.js"></script>
<script src="/site/js/main.js?r={{rand(1, 11000000)}}"></script>


<!--
<script type="text/javascript">
    var sbiajaxurl = "wp-admin/admin-ajax.php";
</script>
<script type="text/javascript">
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
</script>
<script type="text/javascript">
    var wc_product_block_data = JSON.parse( decodeURIComponent( '%7B%22min_columns%22%3A1%2C%22max_columns%22%3A6%2C%22default_columns%22%3A3%2C%22min_rows%22%3A1%2C%22max_rows%22%3A6%2C%22default_rows%22%3A1%2C%22thumbnail_size%22%3A210%2C%22placeholderImgSrc%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fwp-content%5C%2Fthemes%5C%2Fkidz%5C%2Fimg%5C%2Fplaceholder.png%22%2C%22min_height%22%3A500%2C%22default_height%22%3A500%2C%22isLargeCatalog%22%3Afalse%2C%22limitTags%22%3Afalse%2C%22hasTags%22%3Afalse%2C%22productCategories%22%3A%5B%7B%22term_id%22%3A15%2C%22name%22%3A%22Uncategorized%22%2C%22slug%22%3A%22uncategorized%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A15%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A0%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Funcategorized%5C%2F%22%7D%2C%7B%22term_id%22%3A26%2C%22name%22%3A%22Accessories%22%2C%22slug%22%3A%22accessories%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A26%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A9%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Faccessories%5C%2F%22%7D%2C%7B%22term_id%22%3A29%2C%22name%22%3A%22Activewear%22%2C%22slug%22%3A%22activewear%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A29%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A23%2C%22count%22%3A5%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Ffor-boys%5C%2Factivewear%5C%2F%22%7D%2C%7B%22term_id%22%3A30%2C%22name%22%3A%22Activewear%22%2C%22slug%22%3A%22activewear-for-girls%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A30%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A24%2C%22count%22%3A5%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Ffor-girls%5C%2Factivewear-for-girls%5C%2F%22%7D%2C%7B%22term_id%22%3A31%2C%22name%22%3A%22Bottoms%22%2C%22slug%22%3A%22bottoms%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A31%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A23%2C%22count%22%3A5%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Ffor-boys%5C%2Fbottoms%5C%2F%22%7D%2C%7B%22term_id%22%3A32%2C%22name%22%3A%22Bottoms%22%2C%22slug%22%3A%22bottoms-for-girls%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A32%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A24%2C%22count%22%3A7%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Ffor-girls%5C%2Fbottoms-for-girls%5C%2F%22%7D%2C%7B%22term_id%22%3A33%2C%22name%22%3A%22Bottoms%22%2C%22slug%22%3A%22bottoms-for-babies%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A33%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A25%2C%22count%22%3A10%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Ffor-babies%5C%2Fbottoms-for-babies%5C%2F%22%7D%2C%7B%22term_id%22%3A34%2C%22name%22%3A%22Boy%20Shoes%22%2C%22slug%22%3A%22boy-shoes%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A34%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A27%2C%22count%22%3A4%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Fshoes%5C%2Fboy-shoes%5C%2F%22%7D%2C%7B%22term_id%22%3A35%2C%22name%22%3A%22Dresses%20%26amp%3B%20Rompers%22%2C%22slug%22%3A%22dresses-rompers%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A35%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A24%2C%22count%22%3A5%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Ffor-girls%5C%2Fdresses-rompers%5C%2F%22%7D%2C%7B%22term_id%22%3A25%2C%22name%22%3A%22For%20Babies%22%2C%22slug%22%3A%22for-babies%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A25%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A18%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Ffor-babies%5C%2F%22%7D%2C%7B%22term_id%22%3A23%2C%22name%22%3A%22For%20Boys%22%2C%22slug%22%3A%22for-boys%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A23%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A9%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Ffor-boys%5C%2F%22%7D%2C%7B%22term_id%22%3A24%2C%22name%22%3A%22For%20Girls%22%2C%22slug%22%3A%22for-girls%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A24%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A10%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Ffor-girls%5C%2F%22%7D%2C%7B%22term_id%22%3A28%2C%22name%22%3A%22Gifts%22%2C%22slug%22%3A%22gifts%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A28%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A27%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Fgifts%5C%2F%22%7D%2C%7B%22term_id%22%3A36%2C%22name%22%3A%22Girl%20Shoes%22%2C%22slug%22%3A%22girl-shoes%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A36%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A27%2C%22count%22%3A5%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Fshoes%5C%2Fgirl-shoes%5C%2F%22%7D%2C%7B%22term_id%22%3A37%2C%22name%22%3A%22Jackets%20%26amp%3B%20Outerwear%22%2C%22slug%22%3A%22jackets-outerwear%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A37%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A24%2C%22count%22%3A7%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Ffor-girls%5C%2Fjackets-outerwear%5C%2F%22%7D%2C%7B%22term_id%22%3A38%2C%22name%22%3A%22Pajamas%22%2C%22slug%22%3A%22pajamas%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A38%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A23%2C%22count%22%3A4%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Ffor-boys%5C%2Fpajamas%5C%2F%22%7D%2C%7B%22term_id%22%3A39%2C%22name%22%3A%22Pajamas%22%2C%22slug%22%3A%22pajamas-for-babies%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A39%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A25%2C%22count%22%3A5%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Ffor-babies%5C%2Fpajamas-for-babies%5C%2F%22%7D%2C%7B%22term_id%22%3A27%2C%22name%22%3A%22Shoes%22%2C%22slug%22%3A%22shoes%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A27%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A9%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Fshoes%5C%2F%22%7D%2C%7B%22term_id%22%3A40%2C%22name%22%3A%22Shorts%22%2C%22slug%22%3A%22shorts%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A40%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A25%2C%22count%22%3A8%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Ffor-babies%5C%2Fshorts%5C%2F%22%7D%2C%7B%22term_id%22%3A41%2C%22name%22%3A%22Socks%20%26amp%3B%20Tights%22%2C%22slug%22%3A%22socks-tights%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A41%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A24%2C%22count%22%3A4%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Ffor-girls%5C%2Fsocks-tights%5C%2F%22%7D%2C%7B%22term_id%22%3A42%2C%22name%22%3A%22Sweaters%22%2C%22slug%22%3A%22sweaters%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A42%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A23%2C%22count%22%3A7%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Ffor-boys%5C%2Fsweaters%5C%2F%22%7D%2C%7B%22term_id%22%3A43%2C%22name%22%3A%22Sweaters%22%2C%22slug%22%3A%22sweaters-for-babies%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A43%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A25%2C%22count%22%3A5%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Ffor-babies%5C%2Fsweaters-for-babies%5C%2F%22%7D%2C%7B%22term_id%22%3A44%2C%22name%22%3A%22Tops%22%2C%22slug%22%3A%22tops%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A44%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A25%2C%22count%22%3A10%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Ffor-babies%5C%2Ftops%5C%2F%22%7D%2C%7B%22term_id%22%3A45%2C%22name%22%3A%22Tops%20%26amp%3B%20Bodysuits%22%2C%22slug%22%3A%22tops-bodysuits%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A45%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A23%2C%22count%22%3A4%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2Fproduct-category%5C%2Ffor-boys%5C%2Ftops-bodysuits%5C%2F%22%7D%5D%2C%22homeUrl%22%3A%22https%3A%5C%2F%5C%2Fparkofideas.com%5C%2Fkidz%5C%2Fdemo2%5C%2F%22%7D' ) );
</script>
<script type="text/javascript" src="/site/js-template/jquery.js"></script>
<script type="text/javascript">
    var ideapark_svg_content = "";
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "wp-content/themes/kidz/img/sprite.svg", true);
    ajax.send();
    ajax.onload = function (e) {
        ideapark_svg_content = ajax.responseText;
        ideapark_download_svg_onload();
    };
    function ideapark_download_svg_onload() {
        if (typeof document.body != "undefined" && document.body != null && typeof document.body.childNodes != "undefined" && typeof document.body.childNodes[0] != "undefined") {
            var div = document.createElement("div");
            div.className = "svg-sprite-container";
            div.innerHTML = ideapark_svg_content;
            document.body.insertBefore(div, document.body.childNodes[0]);
        } else {
            setTimeout(ideapark_download_svg_onload, 100);
        }
    }

</script>
<script type="text/javascript" src="/site/js-template/jquery-migrate.min.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var ip_wishlist_vars = {"cookieName":"ip-wishlist-items","titleAdd":"Add to Wishlist","titleRemove":"Remove from Wishlist"};
    /* ]]> */
</script>
<script type="text/javascript" src="/site/js-template/frontend.min.js"></script>
<script type="text/javascript" src="/site/js-template/jquery.blockUI.min.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wc_add_to_cart_params = {"ajax_url":"\/kidz\/demo2\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/kidz\/demo2\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/parkofideas.com\/kidz\/demo2\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
    /* ]]> */
</script>
<script type="text/javascript" src="/site/js-template/add-to-cart.min.js"></script>
<script type="text/javascript" src="/site/js-template/js.cookie.min.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url":"\/kidz\/demo2\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/kidz\/demo2\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type="text/javascript" src="/site/js-template/woocommerce.min.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wc_cart_fragments_params = {"ajax_url":"\/kidz\/demo2\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/kidz\/demo2\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_64f931c23d077319fc0e7f381869c4e0","fragment_name":"wc_fragments_64f931c23d077319fc0e7f381869c4e0","request_timeout":"5000"};
    /* ]]> */
</script>
<script type="text/javascript" src="/site/js-template/cart-fragments.min.js"></script>
<script type="text/javascript" src="/site/js-template/underscore.min.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var _wpUtilSettings = {"ajax":{"url":"\/kidz\/demo2\/wp-admin\/admin-ajax.php"}};
    /* ]]> */
</script>
<script type="text/javascript" src="/site/js-template/wp-util.min.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/kidz\/demo2\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_make_a_selection_text":"Please select some product options before adding this product to your cart.","i18n_unavailable_text":"Sorry, this product is unavailable. Please choose a different combination."};
    /* ]]> */
</script>
<script type="text/javascript" src="/site/js-template/add-to-cart-variation.min.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var ideapark_wc_add_to_cart_variation_vars = {"in_stock_svg":"<svg><use xlink:href=\"#svg-check\" \/><\/svg>","out_of_stock_svg":"<svg><use xlink:href=\"#svg-close\" \/><\/svg>"};
    /* ]]> */
</script>
<script type="text/javascript" src="/site/js-template/add-to-cart-variation-3-fix.min.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var ideapark_wp_vars = {
        "themeDir":"\/usr\/www\/parkofideas.com\/kidz\/demo2\/wp-content\/themes\/kidz",
        "themeUri":"https:\/\/parkofideas.com\/kidz\/demo2\/wp-content\/themes\/kidz",
        "ajaxUrl":"https:\/\/parkofideas.com\/kidz\/demo2\/wp-admin\/admin-ajax.php",
        "searchUrl":"https:\/\/parkofideas.com\/kidz\/demo2\/?s=",
        "svgUrl":"",
        "isRtl":"",
        "searchType":"search-type-1",
        "shopProductModal":"1",
        "stickyMenu":"1",
        "arrowLeft":"<a class=\"slick-prev normal\"><span><svg><use xlink:href=\"#svg-angle-left\" \/><\/svg><\/span><\/a>",
        "arrowRight":"<a class=\"slick-next normal\"><span><svg><use xlink:href=\"#svg-angle-right\" \/><\/svg><\/span><\/a>"
    };
    /* ]]> */
</script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded",function(){setTimeout(function(){(function(d, w, c) {w.ChatraID = 'zhn2DbkmMmBtn4k9P';var s = d.createElement('script');w[c] = w[c] || function() {(w[c].q = w[c].q || []).push(arguments);};s.async = true;s.src = 'https://call.chatra.io/chatra.js';if (d.head) d.head.appendChild(s);
        s.onload = function() {document.body.insertAdjacentHTML("beforeEnd", '<a href="#"><img class="ip-message-us" src="wp-content/plugins/ideapark-theme/img/message-us.svg"></a><a href="https://themeforest.net/item/kidz-baby-store-woocommerce-theme/17688768"><img class="ip-buy-now" src="wp-content/plugins/ideapark-theme/img/buy-now.svg"></a>');var button=document.querySelector(".ip-message-us");button.onclick=function(){ Chatra('openChat', true); return false;};};
    })(document, window, 'Chatra');}, 5000);})
</script>
<script type="text/javascript" src="/site/js-template/min.js"></script>
<script type="text/javascript" src="/site/js-template/wp-embed.min.js"></script>
   -->


</body>
</html>
