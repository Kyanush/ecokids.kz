@extends('layouts.site')


@section('title',    	 $seo['title'])
@section('description', $seo['description'])
@section('keywords',    $seo['keywords'])

@section('og_title',    	  $seo['title'])
@section('og_description',   $seo['description'])
@section('og_image',    	  env('APP_URL') . $product->pathPhoto(true))

@section('content')

    @include('schemas.product', [
        'product'          => $product,
        'group_products'   => $group_products,
        'category'         => $category
    ])


    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container ip-p-c">

                @include('site.includes.breadcrumb', ['breadcrumbs' => $breadcrumbs])

                <div class="row">
                    <div class="col-md-12">
                        <div class="woocommerce-notices-wrapper"></div>
                        <div class="product type-product post-144 status-publish first instock product_cat-boy-shoes product_cat-shoes has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                            <div class="row ip-single-product-nav">
                                <div class="col-xs-12">
                                </div>
                            </div>
                            <div class="row">

                                <div class="ip-product-thumbnails-col col-md-1 hidden-sm hidden-xs">
                                    <div class="thumbnails slick-product flex-control-nav" id="slider-nav">
                                        <div class="current slide">
                                            <li>
                                                <img width="70"
                                                     height="70"
                                                     src="{{ $product->pathPhoto(true) }}"
                                                     class="attachment-thumbnail size-thumbnail wp-post-image"
                                                     alt="{{ $product->name }}"/>
                                            </li>
                                        </div>
                                        @if(count($product->images) > 0)
                                            @foreach($product->images as $image)
                                                <div class="slide">
                                                    <li>
                                                        <img src="{{ $image->imagePath(true) }}"
                                                             title="{{ $product->name }}"
                                                             alt="{{ $product->name }}"
                                                             width="70"
                                                             height="70"
                                                             class="attachment-thumbnail size-thumbnail"/>
                                                    </li>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>

                                <div class="images ip-product-images-col col-lg-6 col-md-6 col-sm-12">
                                    <div class="wrap">
                                        <div class="slick-product-single product-modal-gallery" id="slider-wrap">

                                            <div class="slide ip-product-image--zoom1 woocommerce-product-gallery__image">
                                                <a href="{{ $product->pathPhoto(true) }}" class="ip-product-image-link zoom">
                                                    <img src="{{ $product->pathPhoto(true) }}"
                                                         title="{{ $product->name }}"
                                                         alt="{{ $product->name }}"
                                                         class="attachment-woocommerce_single size-woocommerce_single wp-post-image"/>
                                                </a>
                                            </div>
                                            @if(count($product->images) > 0)
                                                @foreach($product->images as $image)
                                                    <div class="slide ip-product-image--zoom1 woocommerce-product-gallery__image">
                                                        <a href="" class="ip-product-image-link zoom">
                                                            <img src="{{ $image->imagePath(true) }}"
                                                                 title="{{ $product->name }}"
                                                                 alt="{{ $product->name }}"
                                                                 class="attachment-woocommerce_single size-woocommerce_single wp-post-image"/>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        @if($product->specificPrice)
                                            <span class="onsale">
                                                {{ $product->getDiscountTypeinfo() }}
                                            </span>
                                        @endif
                                        @foreach($product->attributes as $attribute)
                                            @if($attribute->id == 4 and $attribute->pivot->value)
                                                @foreach($attribute->values as $value)
                                                    @if($value->value == $attribute->pivot->value && $value->value != 'Нет')
                                                        <span class="ip-shop-loop-{{ $value->code  }}-badge">
                                                            {{ $attribute->pivot->value  }}
                                                        </span>
                                                        @break;
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </div>





                                    <div class="ip-product-share-wrap">
                                        <div class="ip-product-wishlist-button">
                                            <a onclick="productFeaturesWishlist(this, {{ $product->id }}, 'added')"
                                               data-title="Добавить в закладки"
                                               class="ip-wishlist-btn ip-wishlist-item-144-btn {{ $product->oneProductFeaturesWishlist ? 'added' : '' }}">
                                                <svg class="on">
                                                    <use xlink:href="#svg-wishlist-on">
                                                        <svg viewBox="0 0 272 233" id="svg-wishlist-on" fill="inherit" stroke="inherit"><path d="M135.695 42.202c66.16-117.992 269.043 32.762 0 189.985V42.202zm-.017.097c-66.16-117.992-269.043 32.762 0 189.985V42.299zM31 58.601c.002-11.835 16.913-13.483 19.315 0 4.519 25.377 6.931 47.092 36.805 74.913 15.406 14.348-4.92 21.15-11.85 14.71 0 0-44.28-33.076-44.27-89.623z" fill="inherit" fill-rule="evenodd" stroke="none"></path></svg>
                                                    </use>
                                                </svg>
                                                <svg class="off">
                                                    <use xlink:href="#svg-wishlist-off">
                                                        <svg viewBox="0 0 23 20" id="svg-wishlist-off" fill="inherit" stroke="inherit"><path d="M11.437 7.692c.02-.06.041-.118.062-.176V3.585c-5.607-10-22.802 2.777 0 16.102v-3.092l-.054.032v.01a25.852 25.852 0 0 1-.008-.005l-.007.004v-.009c-18.1-10.586-3.907-20.304.007-8.935zm.064 8.902v3.085c22.802-13.325 5.607-26.103 0-16.102v3.935c3.997-11.073 17.917-1.435 0 9.082z" fill="inherit" fill-rule="evenodd" stroke="none"></path></svg>
                                                    </use>
                                                </svg>
                                                <span class="on">Удалить со списка желаний</span>
                                                <span class="off">Добавить в список желаний</span>
                                            </a>
                                        </div>

                                        <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                                        <script src="//yastatic.net/share2/share.js"></script>
                                        <div style="display: none;"  class="ya-share2" data-services="vkontakte,facebook,whatsapp,telegram"></div>

                                        <div class="ip-product-share">
                                            <span>поделиться</span>
                                            <a title="VK" onclick="$('.ya-share2__item_service_vkontakte').trigger('click');">
                                                <i class="fa fa-vk fa-2x"></i>
                                            </a>
                                            <a title="Facebook" onclick="$('.ya-share2__item_service_facebook').trigger('click');">
                                                <i class="fa fa-facebook fa-2x"></i>
                                            </a>
                                            <a title="WhatsApp" onclick="$('.ya-share2__item_service_whatsapp .ya-share2__link')[0].click();">
                                                <i class="fa fa-whatsapp fa-2x"></i>
                                            </a>
                                            <a title="Telegram" onclick="$('.ya-share2__item_service_telegram .ya-share2__link')[0].click();">
                                                <i class="fa fa-telegram fa-2x"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="product_meta">
                                                <span class="posted_in">
                                                    Категории:
                                                    @foreach($product->categories as $k => $category_item)
                                                        <a href="{{ $category_item->pathImage(true) }}" rel="tag">{{ $category_item->name }}</a>@if(count($product->categories) > $k+1), @endif
                                                    @endforeach
                                                </span>
                                        <span class="posted_in">
                                                    Сравнить товар:
                                                    <a class="features-compare {{ $product->oneProductFeaturesCompare ? 'active' : '' }}" onclick="productFeaturesCompare(this, {{ $product->id }})">
                                                        <i class="fa fa-exchange" title="Сравнить товар"></i>
                                                    </a>
                                                </span>
                                    </div>

                                </div>



                                <div class="summary entry-summary col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-6 col-xs-6">

                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-6 ip-product-stock-status">
                                            @if($product->stock > 0)
                                                <span class="ip-stock ip-in-stock in-stock">
                                                     <svg>
                                                        <use xlink:href="#svg-check">
                                                            <svg viewBox="0 0 1792 1792" id="svg-check" fill="inherit" stroke="inherit"><path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z" stroke="none"></path></svg>
                                                        </use>
                                                     </svg>
                                                     В наличии
                                                </span>
                                            @else
                                                <span class="red">Нет в наличии</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-6 break">
                                            <h1 class="product_title entry-title">
                                                {{ $product->name }}
                                            </h1>
                                            <div class="woocommerce-product-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                    <span style="width:{{ ($product->avgRating->avg_rating ?? 0) * 20 }}%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on
                                                        <span class="rating">1</span> customer rating
                                                    </span>
                                                </div>
                                                <a href="#reviews" class="woocommerce-review-link" rel="nofollow">
                                                    (<span class="count">1</span> customer review)
                                                </a>
                                            </div>
                                            <div class="woocommerce-product-details__short-description">
                                                <p>
                                                    <a href="{{ route('delivery_payment') }}">Доставка по всему казахстану </a> от 1000 тг до 3000 тг.
                                                    По городам <a href="{{ route('delivery_payment') }}"> Казахстана</a>, работаем с курьерской компанией "Алем-Тат", срок доставки 3-4 рабочих дня.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xs-6 ip-buttons-block break">
                                            <p class="price">
                                                @if($product->specificPrice)
                                                    <del>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">
                                                                {{ \App\Tools\Helpers::priceFormat($product->price) }}
                                                            </span>
                                                        </span>
                                                    </del>
                                                @endif
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">
                                                            {{ \App\Tools\Helpers::priceFormat($product->getReducedPrice()) }}
                                                        </span>
                                                    </span>
                                                </ins>
                                            </p>
                                            @if($product->stock > 0)
                                                <div class="cart">
                                                    <div class="quantity">
                                                        <input type="number"
                                                               class="input-text qty text"
                                                               step="1"
                                                               min="1"
                                                               name="quantity"
                                                               id="quantity"
                                                               value="1"
                                                               title="Кол-во"
                                                               size="4"
                                                               inputmode="numeric"
                                                               pattern="[0-9]*"/>
                                                        <button class="ip-quantity-btn ip-quantity-btn--minus ip-prod-quantity-minus" type="button">-</button>
                                                        <button class="ip-quantity-btn ip-prod-quantity-plus" type="button">+</button>
                                                    </div>
                                                    <button onclick="addToCartSite(this, {{ $product->id }}, $('#quantity').val())" type="button" name="add-to-cart" value="144" class="single_add_to_cart_button button alt">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        Купить
                                                    </button>
                                                </div>
                                                <p class="cart">
                                                    <a href="#one-click-order" rel="modal:open">
                                                        <button class="button">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            Купить в 1 клик
                                                        </button>
                                                    </a>
                                                </p>
                                            @else
                                                <form action="javascript:void(null);" onsubmit="subscribe(this); return false;" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <table>
                                                        <tr>
                                                            <td colspan="2">
                                                                <span class="red">Оставьте электронную почту, чтобы узнать о поступлении товара</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <input style="width: 100%"
                                                                       class="input-text "
                                                                       type="text"
                                                                       name="email"
                                                                       @auth value="{{ Auth::user()->email }}" @endauth
                                                                       placeholder="Ваша электронная почта"/>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <button type="submit" class="button cart_button">
                                                                    <i class="fa fa-bell"></i>
                                                                    Подписаться
                                                                </button>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    </table>
                                                </form>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <!-- .summary -->
                            </div>
                            <div class="row">
                                <div class="woocommerce-tabs wc-tabs-wrapper">
                                    <div class="wrap">
                                        <ul class="tabs wc-tabs col-lg-12">
                                            <li class="description_tab active">
                                                <a href="#tab-description">
                                                    Описание
                                                </a>
                                            </li>
                                            <li class="attributes_tab">
                                                <a href="#tab-additional_information">
                                                    Характеристики
                                                </a>
                                            </li>
                                            <li class="reviews_tab">
                                                <a href="#tab-reviews">Отзывы ({{$product->reviews_count}})</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab  col-md-10 col-md-offset-1 current" id="tab-description">
                                        {!! $product->description  !!}
                                    </div>
                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel  wc-tab  col-md-10 col-md-offset-1" id="tab-additional_information">
                                        <table class="woocommerce-product-attributes shop_attributes">
                                            <tbody>
                                                @foreach($product->attributes as $attribute)
                                                    <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_color">
                                                        <th class="woocommerce-product-attributes-item__label">
                                                            {{ $attribute->name }}
                                                        </th>
                                                        <td class="woocommerce-product-attributes-item__value">
                                                            <p>
                                                                <a>{{ $attribute->pivot->value }}</a>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel  wc-tab  col-md-10 col-md-offset-1" id="tab-reviews">
                                        <div id="reviews" class="woocommerce-Reviews">

                                            <div id="comments">
                                                <h2 class="woocommerce-Reviews-title">
                                                    ОТЗЫВЫ
                                                </h2>
                                                @if(count($product->reviews) == 0)
                                                    <p class="woocommerce-noreviews">Нет отзывы</p>
                                                @else
                                                    <ul class="reviews">
                                                        @foreach($product->reviews as $review)
                                                            <li>
                                                                <div class="review-heading">
                                                                    <h5 class="name">{{ $review->name }}</h5>
                                                                    <p class="date">{{ \App\Tools\Helpers::ruDateFormat($review->created_at) }}</p>
                                                                    <div class="review-rating">
                                                                        <i class="fa {{ $review->rating < 1 ? 'fa-star-o empty' : 'fa-star kok' }}"></i>
                                                                        <i class="fa {{ $review->rating < 2 ? 'fa-star-o empty' : 'fa-star kok' }}"></i>
                                                                        <i class="fa {{ $review->rating < 3 ? 'fa-star-o empty' : 'fa-star kok' }}"></i>
                                                                        <i class="fa {{ $review->rating < 4 ? 'fa-star-o empty' : 'fa-star kok' }}"></i>
                                                                        <i class="fa {{ $review->rating < 5 ? 'fa-star-o empty' : 'fa-star kok' }}"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="review-body">
                                                                    @if($review->comment)
                                                                        <p>
                                                                            <b>Комментарий</b>
                                                                            <br/>
                                                                            {{ $review->comment }}
                                                                        </p>
                                                                    @endif
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </div>


                                            <div id="review_form_wrapper">
                                                <div id="review_form">
                                                    <div id="respond" class="comment-respond">
                                                        <span id="reply-title" class="comment-reply-title">
                                                            Ваш отзыв
                                                        </span>
                                                        <form id="commentform" class="comment-form" action="javascript:void(null);" onsubmit="writeReview(this); return false;" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="product_id" value="{{ $product->id }}"/>
                                                            <p class="comment-notes">
                                                                <span id="email-notes">Ваш e-mail не будет опубликован.</span>
                                                                Обязательные поля помечены
                                                                <span class="required">*</span>
                                                            </p>
                                                            <div class="comment-form-rating">
                                                                <label for="rating">Оценка</label>
                                                                <p class="stars">
                                                                    <span>
                                                                        <a class="star-1">1</a>
                                                                        <a class="star-2">2</a>
                                                                        <a class="star-3">3</a>
                                                                        <a class="star-4">4</a>
                                                                        <a class="star-5">5</a>
                                                                    </span>
                                                                </p>
                                                                <input name="rating" id="rating" value="" type="hidden"/>
                                                            </div>
                                                            <p class="comment-form-comment">
                                                                <label for="comment">
                                                                    Комментарий&nbsp;<span class="required">*</span>
                                                                </label>
                                                                <textarea id="comment"
                                                                          name="comment"
                                                                          cols="45"
                                                                          rows="8"
                                                                          placeholder="Введите комментарий *"></textarea>
                                                            </p>
                                                            <p class="comment-form-author">
                                                                <label for="author">
                                                                    Имя&nbsp;<span class="required">*</span>
                                                                </label>
                                                                <input
                                                                        name="name"
                                                                        placeholder="Введите имя *"
                                                                        @auth
                                                                        value="{{ Auth::user()->name }}"
                                                                        @endauth
                                                                        type="text"/>
                                                            </p>
                                                            <p class="comment-form-email">
                                                                <label for="email">
                                                                    E-mail&nbsp;<span class="required">*</span>
                                                                </label>
                                                                <input
                                                                        name="email"
                                                                        placeholder="Введите e-mail *"
                                                                        @auth
                                                                        value="{{ Auth::user()->email }}"
                                                                        @endauth
                                                                        type="text"/>
                                                            </p>
                                                            <p class="form-submit">
                                                                <button class="submit" type="submit" type="submit">
                                                                    <img class="ajax-loader" src="/site/images/ajax-loader.gif"/>
                                                                    Отправить отзыв
                                                                </button>
                                                            </p>
                                                        </form>
                                                    </div>
                                                    <!-- #respond -->
                                                </div>
                                            </div>


                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            @php
                                if(count($group_products) == 0)
                                    $group_products = \App\Models\Product::productInfoWith()
                                             ->filters(['category' => $category->name])
                                            ->limit(4)
                                            ->inRandomOrder()
                                            ->get();
                            @endphp
                            @if($group_products)
                                <section class="related products">
                                    <h2>Похожие товары</h2>
                                    <ul class="products columns-4 products--mobile-small">
                                        @foreach($group_products as $product)
                                            <li class="product">
                                                @include('site.includes.product_item', ['product' => $product])
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="clear"></div>
                                </section>
                            @endif

                        </div>
                        <!-- #product-144 -->
                    </div>
                </div>
            </div>
        </main>
    </div>



    <!-- Modal -->
    <div id="one-click-order" class="modal">
        <form action="javascript:void(null);" onsubmit="oneClickOrder(this); return false;" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <table>
                <tr>
                    <td>
                        <h1>
                            Быстрый заказ
                        </h1>
                    </td>
                </tr>
                <tr>
                    <td><b>Имя:</b></td>
                </tr>
                <tr>
                    <td>
                        <input @auth value="{{ Auth::user()->name }}" @endauth type="text" name="name" placeholder="Имя" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <td><b>E-mail:</b></td>
                </tr>
                <tr>
                    <td>
                        <input @auth value="{{ Auth::user()->email }}" @endauth type="email" name="email" placeholder="E-mail" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <td><b>Введите номер телефона:</b></td>
                </tr>
                <tr>
                    <td>
                        <input @auth value="{{ Auth::user()->phone }}" @endauth type="text" name="phone" placeholder="+7 (___) ___-__-__" class="phone-mask form-control"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn btn-primary">
                            <img class="ajax-loader" src="/site/images/ajax-loader.gif"/>
                            Заказать
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

@endsection
