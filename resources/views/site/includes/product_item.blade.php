<div class="ip-shop-loop-wrap">
    <div class="ip-shop-loop-thumb">
        <a href="{{ $product->detailUrlProduct() }}">
            @if($product->specificPrice)
                <span class="onsale">{{ $product->getDiscountTypeinfo() }}</span>
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

            <img class="thumb-shop-catalog lazyload1 front"
                 title="{{ $product->name }}"
                 alt="{{ $product->name }}"
                 src="{{ $product->pathPhoto(true) }}"/>
        </a>
    </div>
    <div class="ip-shop-loop-details">
        <h3>
            <a href="{{ $product->detailUrlProduct() }}">
                {{ $product->name }}
            </a>
        </h3>
        <div class="ip-shop-loop-after-title">
            <div class="ip-shop-loop-price">
                <span class="price">
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
                </span>
            </div>
            <div class="ip-shop-loop-actions">
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
                </a>
                <a onclick="quickView.getProduct({{ $product->id }})" data-title="Быстрый просмотр" class="ip-quickview-btn product_type_simple">
                    <svg>
                        <use xlink:href="#svg-quick-view">
                            <svg viewBox="0 0 340 199" id="svg-quick-view" fill="inherit" stroke="inherit"><path d="M161.576 59.303c2.875-.63 5.86-.962 8.924-.962 22.92 0 41.5 18.58 41.5 41.5s-18.58 41.5-41.5 41.5-41.5-18.58-41.5-41.5a42 42 0 0 1 .2-4.104 24.389 24.389 0 0 0 14.3 4.604c13.531 0 24.5-10.969 24.5-24.5a24.41 24.41 0 0 0-6.424-16.538zM.29 99.208l-.031.125H.32c33.335 132 302.272 132 339.527 0h.07l-.035-.125.035-.125h-.07c-37.255-132-306.192-132-339.527 0H.258l.031.125zM170 170.341c39.212 0 71-31.788 71-71s-31.788-71-71-71-71 31.788-71 71 31.788 71 71 71z" fill="inherit" fill-rule="evenodd" stroke="none"></path></svg>
                        </use>
                    </svg>
                </a>
                <a @if($product->stock > 0) onclick="addToCartSite(this, {{ $product->id }})" @endif class="button product_type_simple add_to_cart_button ajax_add_to_cart" rel="nofollow">
                    @if($product->stock > 0)
                        <svg class="svg-add">
                            <use xlink:href="#svg-cart">
                                <svg viewBox="0 0 24 22" id="svg-cart" fill="inherit" stroke="inherit"><path d="M9 7H1.501C.667 7 0 7.672 0 8.5v2c0 .826.672 1.5 1.501 1.5H2v7.506A2.5 2.5 0 0 0 4.493 22h15.014A2.495 2.495 0 0 0 22 19.506V12h.499c.834 0 1.501-.672 1.501-1.5v-2c0-.826-.672-1.5-1.501-1.5H15v1.002A2 2 0 0 1 13.002 10h-2.004A2 2 0 0 1 9 8.002V7zm-4 6.003A.999.999 0 0 1 6 12c.552 0 1 .438 1 1.003v4.994A.999.999 0 0 1 6 19c-.552 0-1-.438-1-1.003v-4.994zm4 0A.999.999 0 0 1 10 12c.552 0 1 .438 1 1.003v4.994A.999.999 0 0 1 10 19c-.552 0-1-.438-1-1.003v-4.994zm4 0A.999.999 0 0 1 14 12c.552 0 1 .438 1 1.003v4.994A.999.999 0 0 1 14 19c-.552 0-1-.438-1-1.003v-4.994zm4 0A.999.999 0 0 1 18 12c.552 0 1 .438 1 1.003v4.994A.999.999 0 0 1 18 19c-.552 0-1-.438-1-1.003v-4.994zM10 .998A.998.998 0 0 1 11.01 0h1.98c.558 0 1.01.446 1.01.998v7.004A.998.998 0 0 1 12.99 9h-1.98C10.451 9 10 8.554 10 8.002V.998z" fill="inherit" fill-rule="evenodd" stroke="none"></path></svg>
                            </use>
                        </svg>
                        Купить
                    @else
                        <span class="red">Нет в наличии</span>
                    @endif
                </a>
                <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
            </div>
        </div>
    </div>
</div>
