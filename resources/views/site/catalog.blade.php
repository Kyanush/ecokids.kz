@extends('layouts.site')

@section('title',    	 $seo['title'])
@section('description', $seo['description'])
@section('keywords',    $seo['keywords'])

@section('body_class') sidebar-left @stop

@section('add_in_head')
    <!-- jquery-ui --->
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <link href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <!-- jquery-ui --->
@stop

@section('content')

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container ip-shop-container ">
                <div class="row">
                    <div class="col-md-3">
                        <div id="ip-shop-sidebar">


                            <aside class="widget woocommerce widget_shopping_cart" id="widget_shopping_cart" v-if="list_cart.length > 0">
                                <h2 class="widget-title">Корзина</h2>
                                <div class="hide_cart_widget_if_empty">
                                    <div class="widget_shopping_cart_content">
                                        <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                            <li class="woocommerce-mini-cart-item mini_cart_item" v-for="(item, index) in list_cart">
                                                <a class="remove remove_from_cart_button" @click="deleteProductQuantity(item.product_id)">×</a>
                                                <a v-bind:href="item.product_url">
                                                    <img width="70"
                                                         height="70"
                                                         class="attachment-thumbnail size-thumbnail lazyloaded"
                                                         v-bind:src="item.product_photo"
                                                         v-bind:alt="item.product_name"
                                                         v-bind:title="item.product_name"/>
                                                    @{{ item.product_name }}
                                                </a>
                                                <span class="quantity">@{{ item.quantity }} ×
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">
                                                            @{{ item.product_specific_price }}
                                                        </span>
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                        <p class="woocommerce-mini-cart__total total">
                                            <strong>ИТОГО:</strong>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">
                                                    @{{ cart_total.sum }}
                                                </span>
                                            </span>
                                        </p>
                                        <p class="woocommerce-mini-cart__buttons buttons">
                                            <a href="{{ route('cart') }}" class="button wc-forward">
                                                Корзина
                                            </a>
                                            <a href="{{ route('checkout') }}" class="button checkout wc-forward">
                                                Оформить
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </aside>



                            <aside class="widget woocommerce widget_top_rated_products">
                                <h2 class="widget-title">Фильтр</h2>
                                <form id="filterpro">

                                    <table>
                                        <tr>
                                            <td colspan="2">Цена</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div id="slider-range" class="slider_range"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                @php
                                                    $filter_price_start = round($filters['price_start'] ?? $priceMinMax['min'] ?? 0);
                                                    $filter_price_end   = round($filters['price_end'] ?? $priceMinMax['max'] ?? 0);
                                                @endphp
                                                <input id="catalog-price-min"   type="hidden" value="{{ $priceMinMax['min'] }}"/>
                                                <input id="catalog-price-max"   type="hidden" value="{{ $priceMinMax['max'] }}"/>
                                                <input id="catalog-price-value" type="hidden" value='{{ json_encode([$filter_price_start, $filter_price_end]) }}'/>
                                                <input name="price_start" id="price_start" type="number" value="{{ $filter_price_start }}"/>
                                            </td>
                                            <td>
                                                <input name="price_end"   id="price_end" type="number" value="{{ $filter_price_end }}"/>
                                            </td>
                                        </tr>




                                        @foreach($productsAttributesFilters as $attribute)
                                            <tr>
                                                <td colspan="2">
                                                    <b>
                                                        {{ $attribute->name }}
                                                        <i class="fa fa-info-circle" title="{{ $attribute->description }}"></i>
                                                    </b>
                                                </td>
                                            </tr>
                                            @if($attribute->type == 'color')
                                                @foreach($attribute->values as $value)
                                                    <tr>
                                                        <td colspan="2">
                                                            <label for="attribute_value_{{$attribute->id}}{{$value->id}}">
                                                                <input onclick="urlParamsGenerate()"
                                                                       id="attribute_value_{{$attribute->id}}{{$value->id}}"
                                                                       value="{{ $value->code }}"
                                                                       @if(isset($filters[$attribute->code]))
                                                                           @if(is_array($filters[$attribute->code]))
                                                                               @foreach($filters[$attribute->code] as $filter_value)
                                                                                   @if($filter_value == $value->code)
                                                                                       checked
                                                                                   @endif
                                                                               @endforeach
                                                                           @else
                                                                               @if($filters[$attribute->code] == $value->code)
                                                                                   checked
                                                                               @endif
                                                                           @endif
                                                                       @endif
                                                                       style="display: none;"
                                                                       type="checkbox"
                                                                       name="{{ $attribute->code }}"/>
                                                                    <span class="color" style="background: {{ $value->props }};@if($value->props == '#ffffff') border: solid 1px #e1e1e1; @endif">
                                                                        <span>{{ $value->value }}</span>
                                                                    </span>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                @foreach($attribute->values as $value)
                                                    <tr>
                                                        <td colspan="2">
                                                            <input
                                                                onclick="urlParamsGenerate()"
                                                                id="attribute_value_{{$attribute->id}}{{$value->id}}"
                                                                value="{{ $value->code }}"
                                                                @if(isset($filters[$attribute->code]))
                                                                    @if(is_array($filters[$attribute->code]))
                                                                        @foreach($filters[$attribute->code] as $filter_value)
                                                                            @if($filter_value == $value->code)
                                                                                checked
                                                                            @endif
                                                                        @endforeach
                                                                    @else
                                                                        @if($filters[$attribute->code] == $value->code)
                                                                            checked
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                                type="checkbox"
                                                                name="{{ $attribute->code }}"/>
                                                            <label for="attribute_value_{{$attribute->id}}{{$value->id}}">
                                                                <a>
                                                                    {{ $value->value }}
                                                                </a>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        @endforeach
                                        <tr>
                                            <td colspan="2">
                                                <a onclick="filtersClear()">
                                                    <i class="fa fa-filter"></i>
                                                    Сбросить фильтр
                                                </a>
                                            </td>
                                        </tr>
                                    </table>




                                </form>
                            </aside>




                            <a class="mobile-sidebar-close" href="#">
                                <svg>
                                    <use xlink:href="#svg-close"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <header class="woocommerce-products-header main-header ip-shop-header">
                            <h1 class="woocommerce-products-header__title page-title">
                                {{ $category->name }}
                            </h1>
                            @php
                                $categories = \App\Models\Category::orderBy('sort')
                                        ->isActive()
                                        ->whereIn('id', \App\Services\ServiceCategory::categoryChildIds($category->id, false, true))
                                        ->get();
                            @endphp
                            @if(count($categories) > 0)
                                <ul class="products">
                                    @foreach ($categories as $category_item)
                                        <li class="product-category product first">
                                            <div class="ip-shop-loop-wrap">
                                                <a href="{{ $category_item->catalogUrl() }}">
                                                    <div class="ip-shop-loop-thumb">
                                                        @php
                                                            $image = $category_item->pathImage(true);
                                                            if(!$image)
                                                                $image = '/site/images/no-image.png';
                                                        @endphp
                                                        <img src="{{ $image }}" alt="{{ $category_item->name }}" width="70" height="70"/>
                                                    </div>
                                                    <div class="ip-shop-loop-details">
                                                        <h2 class="woocommerce-loop-category__title">
                                                            {{ $category_item->name }}
                                                            <!--<mark class="count">(10)</mark>-->
                                                        </h2>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                            <div class="row grid-header">
                                <div class="col-md-8">
                                    @include('site.includes.breadcrumb', ['breadcrumbs' => $breadcrumbs])
                                </div>
                                <div class="col-md-4 col-sm-12 ip-shop-ordering-row">
                                    <form class="woocommerce-ordering" method="get">
                                        <?php
                                            $orderBy = \App\Tools\Helpers::getSortedToFilter($filters);
                                            $column  = $orderBy['sorting_product']['column'];
                                            $order   = $orderBy['sorting_product']['order'];
                                        ?>
                                        <select name="orderby" class="orderby styled hasCustomSelect" aria-label="Shop order" style="-webkit-appearance: menulist-button; width: 133px; position: absolute; opacity: 0; height: 20px; font-size: 11px;">
                                            @foreach(\App\Tools\Helpers::listSortingProducts() as $item)
                                                <option
                                                    @if($item['column'] == $column && mb_strtolower($item['order']) == mb_strtolower($order))
                                                    selected
                                                    @endif
                                                    value="{{ $item['value'] }}">{{ $item['title'] }}</option>
                                            @endforeach
                                        </select>
                                        <span class="customSelect orderby styled">
                                            <span class="customSelectInner">{{ $orderBy['sorting_product']['title'] }}</span>
                                        </span>
                                    </form>
                                    <a href="#" class="mobile-sidebar">
                                        <svg>
                                            <use xlink:href="#svg-sidebar">
                                                <svg viewBox="0 0 110 92" id="svg-sidebar" fill="inherit" stroke="inherit"><path d="M14.804 45.802l11.164 11.164-7.653 7.654L-.187 46.118l.316-.316-.316-.316 18.502-18.501 7.653 7.653-11.164 11.164zM47.204 0H110v10.824H47.204V0zm0 27.059H110v10.823H47.204V27.06zm0 27.059H110V64.94H47.204V54.118zm0 27.058H110V92H47.204V81.176z" fill="inherit" fill-rule="evenodd" stroke="none"></path></svg>
                                            </use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </header>
                        <div class="woocommerce-notices-wrapper"></div>

                        <ul class="products columns-3 products--mobile-small">
                            @foreach($products as $product)
                                <li class="product">
                                    @include('site.includes.product_item', ['product' => $product])
                                </li>
                            @endforeach
                        </ul>

                        <div class="clear"></div>

                        <nav class="woocommerce-pagination">
                            {!! $products->links("pagination::default") !!}
                        </nav>

                        @if(isset($category->description))
                            <div>
                                <h2>{{ $category->name }}</h2>
                                @if($category->description)
                                    {!! $category->description  !!}
                                @endif
                                <h2>Где купить {{ $category->name }}</h2>
                                <p>
                                    Заказать товар с доставкой на дом в пределах <b>{{ $currentCity->name }}</b>, <b>Казахстан</b> можно круглосуточно, через корзину на сайте.
                                    Интернет-магазин официальных товаров {{ env('APP_NO_URL') }} предлагает доставку заказов и в
                                    другие города Республики Казахстан. К оплате принимаются банковские карты и наличные средства.
                                </p>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
