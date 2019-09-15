@extends('layouts.site')

@section('title',       $seo['title'])
@section('description', $seo['description'])
@section('keywords',    $seo['keywords'])

@section('content')

    <div class="woocommerce-notices-wrapper">
    </div>
    <section id="home-slider" class="home-section" data-slides-count="3" data-slider_speed="500" data-slider_hide_dots="0" data-slider_effect="slide" data-slider_interval="5000" data-slider_show_mute_unmute="0">
        <!--
                <div class="slick-preloader">
                    <div class="img" style="background-image: url(https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-0815085765-360x132.jpg);"></div>
                    <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                </div>
        -->
        <div class="slick">

            @foreach($listSlidersHomePage as $item)
                <div class="bgimg" style="background-image: url('{{ $item->pathImage(true) }}');">
                    <div class="inner">
                        <h3>{{ $item->name }}</h3>
                        <h4>Подробнее</h4>
                    </div>
                    <a class="whole" href="{{ $item->link }}"></a>
                </div>
            @endforeach

        </div>
    </section>


    <section id="home-banners" class="preloading">
        <?php
            $productsDay =  \App\Models\Product::productInfoWith()
                ->filtersAttributes(['na_glavnuyu_stranitsu' => 'da'])
                ->limit(3)
                ->where('stock', '>', 0)
                ->inRandomOrder()
                ->get();

            $color = [
                [
                    'bg'    => '#D72378',
                    'price' => '#D72378',
                    'btn'   => '#D72378'
                ],
                [
                    'bg'    => '#3DB0D8',
                    'price' => '#3DB0D8',
                    'btn'   => '#3DB0D8'
                ],
                [
                    'bg'    => '#D72378',
                    'price' => '#D72378',
                    'btn'   => '#D72378'
                ]
            ];
        ?>
        @foreach($productsDay as $key => $product)
            <div class="banner  boxed-layout alfa-image">
                <div class="bg" style="background: {{ $color[$key]['bg'] }}"></div>
                <a href="{{ $product->detailUrlProduct() }}">
                    <img class="thumb"
                         title="{{ $product->name }}"
                         alt="{{ $product->name }}"
                         src="{{ $product->pathPhoto(true) }}"/>
                </a>
                <div class="inner">
                    <h3>{{ $product->name }}</h3>
                </div>
                <div class="price" style="color: {{ $color[$key]['price'] }}">
                    {{ \App\Tools\Helpers::priceFormat($product->getReducedPrice()) }}
                </div>
                <a class="more" href="{{ $product->detailUrlProduct() }}" style="background: {{ $color[$key]['btn'] }}">
                    Купить
                </a>
            </div>
        @endforeach
    </section>


    <div id="home-tabs" class="c-home-tabs">
        <div class="container home-tabs-wrap">
            <ul class="home-tabs clear">
                <li class="current" data-tab="home-tab-1">
                    <a>
                        Товары со скидкой
                    </a>
                </li>
                <li data-tab="home-tab-2">
                    <a>
                        Коляски
                    </a>
                </li>
                <li data-tab="home-tab-3">
                    <a>
                        Коляски 2
                    </a>
                </li>
                <li data-tab="home-tab-4">
                    <a>
                        Коляски 3
                    </a>
                </li>
            </ul>
        </div>
        <div id="home-tab-1" class="container home-tab visible current">
            <div class="woocommerce columns-4 ">
                <ul class="products columns-4 products--mobile-small">
                    @php
                    $products = \App\Models\Product::productInfoWith()
                            ->whereHas('specificPrice', function ($query){
                                $query->dateActive();
                            })
                            ->limit(8)
                            //->where('stock', '>', 0)
                            ->inRandomOrder()
                            ->get();
                    @endphp
                    @foreach($products as $product)
                        <li class="product">
                            @include('site.includes.product_item', ['product' => $product])
                        </li>
                    @endforeach
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div id="home-tab-2" class="container home-tab">
            <div class="woocommerce columns-4 ">
                <ul class="products columns-4 products--mobile-small">
                    @php
                        $products = \App\Models\Product::productInfoWith()
                                ->limit(8)
                                ->filters(['category' => 'kolyaski'])
                                //->where('stock', '>', 0)
                                ->inRandomOrder()
                                ->get();
                    @endphp
                    @foreach($products as $product)
                        <li class="product">
                            @include('site.includes.product_item', ['product' => $product])
                        </li>
                    @endforeach
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div id="home-tab-3" class="container home-tab">
            <div class="woocommerce columns-4 ">
                <ul class="products columns-4 products--mobile-small">
                    @php
                        $products = \App\Models\Product::productInfoWith()
                                ->limit(8)
                                ->filters(['category' => 'kolyaski'])
                                //->where('stock', '>', 0)
                                ->inRandomOrder()
                                ->get();
                    @endphp
                    @foreach($products as $product)
                        <li class="product">
                            @include('site.includes.product_item', ['product' => $product])
                        </li>
                    @endforeach
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div id="home-tab-4" class="container home-tab">
            <div class="woocommerce columns-4 ">
                <ul class="products columns-4 products--mobile-small">
                    @php
                        $products = \App\Models\Product::productInfoWith()
                                ->limit(8)
                                ->filters(['category' => 'kolyaski'])
                                //->where('stock', '>', 0)
                                ->inRandomOrder()
                                ->get();
                    @endphp
                    @foreach($products as $product)
                        <li class="product">
                            @include('site.includes.product_item', ['product' => $product])
                        </li>
                    @endforeach
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <section id="home-brand" style="background-color: #F4F8FF">
        <div class="container">
            <div class="slick-brands ">
                <div class="lazyload brand"
                     title="">
                    <img style="width: 160px;" src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-logo1-142x137.png"/>
                </div>
                <div class="lazyload brand"
                     title="">
                    <img style="width: 160px;" src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-group-2-142x142.png"/>
                </div>
                <div class="lazyload brand"
                     title="">
                    <img style="width: 160px;" src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-13-142x128.png"/>
                </div>
                <div class="lazyload brand"
                     title="">
                    <img style="width: 160px;" src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-11-142x70.png"/>
                </div>
                <div class="lazyload brand"
                     title="">
                    <img style="width: 160px;" src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-10-1-142x142.png"/>
                </div>
                <div class="lazyload brand"
                     title="">
                    <img style="width: 160px;" src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-usa-142x128.png"/>
                </div>
                <div class="lazyload brand"
                     title="">
                    <img style="width: 160px;" src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-8-142x142.png"/>
                </div>
            </div>
        </div>
    </section>


    <section id="home-post">
        <div class="container">
            <div class="home-post-header-wrap">
                <a href="">
                    <h2>Полезные статьи</h2>
                </a>
            </div>
            <div class="row">
                @php
                    $news = \App\Models\News::isActive()->limit(4)->OrderBy('created_at', 'DESC')->get();
                @endphp
                @foreach ($news as $item)
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <article id="bottom-post-173" class="post-173 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
                            <div class="lazyload post-img" style="background-image:url('{{ $item->pathImage(true) }}')"></div>
                            <div class="post-content">
                                <div class="post-meta">
                                      <span class="post-date">
                                           {{ \App\Tools\Helpers::ruDateFormat($item->created_at) }}
                                      </span>
                                </div>
                                <header class="post-header">
                                    <a href="{{ $item->detailUrl() }}">
                                        <h3>{{ $item->title }}</h3>
                                    </a>
                                </header>
                                <span class="more">
                                    Читать далее
                                </span>
                            </div>
                            <a href="{{ $item->detailUrl() }}" class="whole"></a>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section id="home-review">
        <div class="container">
            <div class="slick-review preloading">
                @php
                    $reviews = \App\Models\Review::with('product')->OrderBy('id', 'DESC')->isActive()->limit(7)->get();
                @endphp
                @foreach($reviews as $review)
                    <div class="review">
                        <svg class="quote">
                            <use xlink:href="#svg-quote">
                                <svg viewBox="0 0 32 25" id="svg-quote" fill="inherit" stroke="inherit"><path d="M14.633 17.347c0 2.177-.72 3.997-2.16 5.46C11.033 24.268 9.33 25 7.366 25c-1.964 0-3.683-.731-5.156-2.194C.737 21.344 0 19.592 0 17.551c0-2.04.884-4.524 2.652-7.449L8.544 0h5.696l-3.633 10.612c2.684 1.293 4.026 3.538 4.026 6.735zm17.367 0c0 2.177-.72 3.997-2.16 5.46C28.398 24.268 26.696 25 24.731 25c-1.964 0-3.682-.731-5.156-2.194-1.473-1.462-2.21-3.214-2.21-5.255 0-2.04.885-4.524 2.652-7.449L25.911 0h5.696l-3.634 10.612C30.658 11.905 32 14.15 32 17.347z" fill="inherit" fill-rule="evenodd" stroke="none"></path></svg>
                            </use>
                        </svg>
                        <p>
                            {{ $review->comment }}
                        </p>
                        <a href="{{ $review->product->detailUrlProduct() }}">
                            <div class="thumb lazyload" style="background-image: url('{{ $review->product->pathPhoto(true) }}');"></div>
                        </a>
                        <div class="author">– {{ $review->name }}</div>
                        <div class="occupation">
                            <div class="review-rating">
                                <i class="fa {{ $review->rating < 1 ? 'fa-star-o empty' : 'fa-star' }}"></i>
                                <i class="fa {{ $review->rating < 2 ? 'fa-star-o empty' : 'fa-star' }}"></i>
                                <i class="fa {{ $review->rating < 3 ? 'fa-star-o empty' : 'fa-star' }}"></i>
                                <i class="fa {{ $review->rating < 4 ? 'fa-star-o empty' : 'fa-star' }}"></i>
                                <i class="fa {{ $review->rating < 5 ? 'fa-star-o empty' : 'fa-star' }}"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section id="home-text">
        <div class="container">
            <h1>Интернет-магазин детских товаров {{ env('APP_NAME') }}</h1>
            <div class="row">
                <div class="col-lg-12">
                    <div class="entry-content">
                        <div class="clear"></div>
                        <div class="two-col">
                            <div class="left">
                                <div>
                                    {{ env('APP_NAME') }} — интернет магазин товаров для детей и новорожденных! Лучшие цены на детские товары возможны благодаря прямым поставкам от производителей.
                                    <br>
                                    В интернет магазине {{ env('APP_NAME') }} только безопасные, сертифицированные товары и игрушки для детей.
                                    <br>
                                    За несколько лет работы с наших складов были доставлены тысячи посылок по всему Казахстану.
                                </div>
                            </div>
                            <div class="right">
                                <div>
                                    Высокий сервис достигается тем, что доставка осуществляется собственной курьерской службой в таких городах как Алматы, Нур-Султан, Караганда, Кокшетау, Темиртау, Уральск, Усть-Каменагорск, Шымкент.
                                    <br>
                                    Мы сделаем все, чтобы покупка в нашем магазине оказалась приятной для Вас!
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('instagram.widget')


@endsection
