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
                        <h4>$75 - SHOP NOW</h4>
                    </div>
                    <a class="whole" href="{{ $item->link }}"></a>
                </div>
            @endforeach

        </div>
    </section>

    <section id="home-banners" class="preloading">
        <!--
           -->
        <div class="banner  boxed-layout alfa-image">
            <div class="bg" style="background: #D72378"></div>
            <img class="thumb" src="./KIDZ – Baby Shop &amp; Kids Store WooCommerce WordPress Theme – Just another WordPress site_files/clothes-2150084789-198x250.png" srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2150084789-198x250.png 198w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2150084789-127x160.png 127w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2150084789-42x53.png 42w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2150084789.png 206w" sizes="(min-width: 1200px) 198px, (min-width: 769px) and (max-width: 1199px) 174px, (min-width: 601px) and (max-width: 768px) 143px, (min-width: 414px) and (max-width: 600px) 174px, (max-width: 413px) 143px" alt="Mini Pink Backpack">
            <div class="inner">
                <h3>Mini Pink Backpack</h3>
            </div>
            <div class="price" style="color: #D72378">$34</div>
            <a class="more" href="https://parkofideas.com/kidz/demo2/index.php/product/flannel-lined-cordroy-overalls/" style="background: #D72378">Shop Now</a>
        </div>
        <!--
           -->
        <div class="banner  boxed-layout alfa-image">
            <div class="bg" style="background: #3DB0D8"></div>
            <img class="thumb" src="./KIDZ – Baby Shop &amp; Kids Store WooCommerce WordPress Theme – Just another WordPress site_files/clothes-b5-198x250.png" srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-b5-198x250.png 198w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-b5-127x160.png 127w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-b5-42x53.png 42w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-b5.png 206w" sizes="(min-width: 1200px) 198px, (min-width: 769px) and (max-width: 1199px) 174px, (min-width: 601px) and (max-width: 768px) 143px, (min-width: 414px) and (max-width: 600px) 174px, (max-width: 413px) 143px" alt="Warm Winter Jacket">
            <div class="inner">
                <h3>Warm Winter Jacket</h3>
            </div>
            <div class="price" style="color: #3DB0D8">$56</div>
            <a class="more" href="https://parkofideas.com/kidz/demo2/index.php/product/flannel-lined-cordroy-overalls/" style="background: #3DB0D8">Shop Now</a>
        </div>
        <!--
           -->
        <div class="banner  boxed-layout alfa-image">
            <div class="bg" style="background: #D72378"></div>
            <img class="thumb" src="./KIDZ – Baby Shop &amp; Kids Store WooCommerce WordPress Theme – Just another WordPress site_files/clothes-2030416022-209x250.png" srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2030416022-209x250.png 209w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2030416022-134x160.png 134w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2030416022-44x53.png 44w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2030416022.png 215w" sizes="(min-width: 1200px) 209px, (min-width: 769px) and (max-width: 1199px) 184px, (min-width: 601px) and (max-width: 768px) 150px, (min-width: 414px) and (max-width: 600px) 184px, (max-width: 413px) 150px" alt="Dark Blue Jacket">
            <div class="inner">
                <h3>Dark Blue Jacket</h3>
            </div>
            <div class="price" style="color: #D72378">$27</div>
            <a class="more" href="https://parkofideas.com/kidz/demo2/index.php/product/flannel-lined-cordroy-overalls/" style="background: #D72378">Shop Now</a>
        </div>
        <!--
           -->
    </section>
    <div id="home-tabs" class="c-home-tabs">
        <div class="container home-tabs-wrap">
            <ul class="home-tabs clear">
                <li class="current">
                    <a href="https://parkofideas.com/kidz/demo2/#tab-featured_products">
                        Featured							</a>
                </li>
                <li>
                    <a href="https://parkofideas.com/kidz/demo2/#tab-sale_products">
                        On a Sale							</a>
                </li>
                <li>
                    <a href="https://parkofideas.com/kidz/demo2/#tab-best_selling_products">
                        Bestsellers							</a>
                </li>
                <li>
                    <a href="https://parkofideas.com/kidz/demo2/#tab-recent_products">
                        Latest							</a>
                </li>
            </ul>
        </div>
        <div id="tab-featured_products" class="container home-tab visible current">
            <div class="woocommerce columns-4 ">
                <ul class="products columns-4 products--mobile-small">
                    <li class="product type-product post-144 status-publish first instock product_cat-boy-shoes product_cat-shoes has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-chukka-boots/">
                                    <span class="ip-shop-loop-new-badge">New</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-210x210.jpg" alt="Oshkosh chukka boots" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-360x361.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-249x250.jpg 249w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26.jpg 470w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/oshkosh-chukka-boots/">Oshkosh chukka boots</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>44</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-144-btn" data-product-id="144" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-chukka-boots/" data-title="Quick View" data-product_id="144" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=144" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="144" data-product_sku="" aria-label="Add “Oshkosh chukka boots” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-126 status-publish instock product_cat-girl-shoes product_cat-shoes has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-sparkle-cat-crib-shoes/">
                                    <span class="ip-shop-loop-new-badge">New</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-210x210.jpg" alt="Oshkosh sparkle cat crib shoes" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-360x361.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21.jpg 500w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/oshkosh-sparkle-cat-crib-shoes/">Oshkosh sparkle cat crib shoes</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>22</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-126-btn" data-product-id="126" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-sparkle-cat-crib-shoes/" data-title="Quick View" data-product_id="126" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=126" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="126" data-product_sku="" aria-label="Add “Oshkosh sparkle cat crib shoes” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-61 status-publish instock product_cat-activewear product_cat-bottoms-for-girls product_cat-dresses-rompers product_cat-for-babies product_cat-for-boys product_cat-gifts product_cat-pajamas product_cat-tops-bodysuits has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-quilted-puffer-vest/">
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-210x210.jpg" alt="Oshkosh quilted puffer vest" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-590x590.jpg 590w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5.jpg 594w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/oshkosh-quilted-puffer-vest/">Oshkosh quilted puffer vest</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-61-btn" data-product-id="61" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-quilted-puffer-vest/" data-title="Quick View" data-product_id="61" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=61" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="61" data-product_sku="" aria-label="Add “Oshkosh quilted puffer vest” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-57 status-publish last instock product_cat-bottoms product_cat-bottoms-for-babies product_cat-for-babies product_cat-for-boys product_cat-gifts product_cat-sweaters product_cat-sweaters-for-babies product_cat-tops has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/french-terry-shawl-collar-cardigan/">
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-4-210x210.jpg" alt="French terry shawl collar cardigan" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-4-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-4-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-4-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-4-140x140.jpg 140w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/french-terry-shawl-collar-cardigan/">French terry shawl collar cardigan</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>23</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-57-btn" data-product-id="57" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/french-terry-shawl-collar-cardigan/" data-title="Quick View" data-product_id="57" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=57" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="57" data-product_sku="" aria-label="Add “French terry shawl collar cardigan” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-53 status-publish first instock product_cat-bottoms product_cat-bottoms-for-babies product_cat-for-babies product_cat-for-boys product_cat-gifts product_cat-shorts product_cat-sweaters product_cat-tops has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/flannel-lined-cordroy-overalls/">
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2-210x210.jpg" alt="Flannel-lined condroy overalls" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2.jpg 588w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/flannel-lined-cordroy-overalls/">Flannel-lined condroy overalls</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>21</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-53-btn" data-product-id="53" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/flannel-lined-cordroy-overalls/" data-title="Quick View" data-product_id="53" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=53" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="53" data-product_sku="" aria-label="Add “Flannel-lined condroy overalls” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-35 status-publish instock product_cat-activewear product_cat-bottoms product_cat-bottoms-for-babies product_cat-for-babies product_cat-for-boys product_cat-gifts product_cat-sweaters product_cat-tops product_cat-tops-bodysuits has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/heritage-fleece-hoodie/">
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1-210x210.jpg" alt="Детская толстовка из флиса" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1.jpg 586w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/heritage-fleece-hoodie/">Детская толстовка из флиса</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>12</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-35-btn" data-product-id="35" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/heritage-fleece-hoodie/" data-title="Quick View" data-product_id="35" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=35" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="35" data-product_sku="" aria-label="Add “Детская толстовка из флиса” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-30 status-publish instock product_cat-activewear product_cat-bottoms-for-babies product_cat-for-babies product_cat-for-boys product_cat-gifts product_cat-pajamas product_cat-shorts product_cat-tops product_cat-tops-bodysuits has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/hooded-cable-knit-coveralls/">
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3-210x210.jpg" alt="Hooded cable-knit coveralls" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3.jpg 589w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/hooded-cable-knit-coveralls/">Hooded cable-knit coveralls</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>20</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-30-btn" data-product-id="30" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/hooded-cable-knit-coveralls/" data-title="Quick View" data-product_id="30" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=30" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="30" data-product_sku="" aria-label="Add “Hooded cable-knit coveralls” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-25 status-publish last instock product_cat-bottoms product_cat-for-babies product_cat-for-boys product_cat-gifts product_cat-pajamas-for-babies product_cat-sweaters product_cat-sweaters-for-babies has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/pique-polo-bodysuit/">
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-1-210x210.jpg" alt="Pique polo bodysuit" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-1-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-1-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-1-590x590.jpg 590w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-1-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-1-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-1-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-1-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-1-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-1-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-1.jpg 594w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/pique-polo-bodysuit/">Pique polo bodysuit</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>7</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-25-btn" data-product-id="25" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/pique-polo-bodysuit/" data-title="Quick View" data-product_id="25" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=25" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="25" data-product_sku="" aria-label="Add “Pique polo bodysuit” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div id="tab-sale_products" class="container home-tab">
            <div class="woocommerce columns-4 ">
                <ul class="products columns-4 products--mobile-small">
                    <li class="product type-product post-46 status-publish first instock product_cat-activewear product_cat-bottoms-for-babies product_cat-for-babies product_cat-for-boys product_cat-gifts product_cat-sweaters product_cat-tops product_cat-tops-bodysuits has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/2-pocket-denim-bodysuit/">
                                    <span class="onsale">-23%</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-2-210x210.jpg" alt="2-pocket denim bodysuit" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-2-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-2-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-2-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-2-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-2-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-2-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-2-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-2.jpg 541w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/2-pocket-denim-bodysuit/">2-pocket denim bodysuit</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>13</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>10</span></ins></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-46-btn" data-product-id="46" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/2-pocket-denim-bodysuit/" data-title="Quick View" data-product_id="46" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=46" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="46" data-product_sku="" aria-label="Add “2-pocket denim bodysuit” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-39 status-publish instock product_cat-bottoms product_cat-bottoms-for-babies product_cat-for-babies product_cat-for-boys product_cat-gifts product_cat-pajamas product_cat-shorts product_cat-sweaters has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/oorbuster-oshkosh-colorblock-heavyweight-jacket/">
                                    <span class="onsale">-18%</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-210x210.jpg" alt="Oorbuster oshkosh colorblock heavyweight jacket" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1.jpg 579w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/oorbuster-oshkosh-colorblock-heavyweight-jacket/">Oorbuster oshkosh colorblock heavyweight jacket</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>34</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>28</span></ins></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-39-btn" data-product-id="39" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/oorbuster-oshkosh-colorblock-heavyweight-jacket/" data-title="Quick View" data-product_id="39" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=39" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="39" data-product_sku="" aria-label="Add “Oorbuster oshkosh colorblock heavyweight jacket” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-76 status-publish instock product_cat-activewear-for-girls product_cat-dresses-rompers product_cat-for-babies product_cat-for-girls product_cat-gifts product_cat-jackets-outerwear has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-jersey-lined-windbreaker/">
                                    <span class="onsale">-20%</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9-210x210.jpg" alt="Oshkosh jersey-lined windbreaker" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9.jpg 583w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/oshkosh-jersey-lined-windbreaker/">Oshkosh jersey-lined windbreaker</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>20</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>16</span></ins></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-76-btn" data-product-id="76" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-jersey-lined-windbreaker/" data-title="Quick View" data-product_id="76" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=76" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="76" data-product_sku="" aria-label="Add “Oshkosh jersey-lined windbreaker” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-42 status-publish last instock product_cat-activewear product_cat-for-babies product_cat-for-boys product_cat-gifts product_cat-pajamas product_cat-pajamas-for-babies product_cat-sweaters product_cat-sweaters-for-babies has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-originals-graphic-bodysuit/">
                                    <span class="onsale">-19%</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-1-210x210.jpg" alt="Oshkosh originals graphic bodysuit" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-1-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-1-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-1-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-1-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-1-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-1-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-1-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-1-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-1.jpg 557w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/oshkosh-originals-graphic-bodysuit/">Oshkosh originals graphic bodysuit</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>16</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>13</span></ins></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-42-btn" data-product-id="42" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-originals-graphic-bodysuit/" data-title="Quick View" data-product_id="42" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=42" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="42" data-product_sku="" aria-label="Add “Oshkosh originals graphic bodysuit” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-73 status-publish first instock product_cat-bottoms-for-girls product_cat-bottoms-for-babies product_cat-for-babies product_cat-for-girls product_cat-gifts product_cat-jackets-outerwear product_cat-shorts product_cat-tops has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-quilted-puffer-vest-2/">
                                    <span class="onsale">-14%</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-8-210x210.jpg" alt="Oshkosh quilted puffer vest" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-8-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-8-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-8-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-8-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-8-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-8-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-8-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-8-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-8.jpg 587w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/oshkosh-quilted-puffer-vest-2/">Oshkosh quilted puffer vest</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>14</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>12</span></ins></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-73-btn" data-product-id="73" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-quilted-puffer-vest-2/" data-title="Quick View" data-product_id="73" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=73" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="73" data-product_sku="" aria-label="Add “Oshkosh quilted puffer vest” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-22 status-publish instock product_cat-activewear-for-girls product_cat-bottoms-for-girls product_cat-bottoms-for-babies product_cat-for-babies product_cat-for-girls product_cat-gifts product_cat-jackets-outerwear product_cat-shorts product_cat-socks-tights product_cat-tops has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/removed-patch-denim-jumper-ravine-blue/">
                                    <span class="onsale">-22%</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-r-210x210.jpg" alt="Removed patch denim jumper – ravine blue" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-r-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-r-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-r-590x590.jpg 590w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-r-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-r-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-r-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-r-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-r-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-r-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-r.jpg 606w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/removed-patch-denim-jumper-ravine-blue/">Removed patch denim jumper – ravine blue</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>18</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>14</span></ins></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-22-btn" data-product-id="22" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/removed-patch-denim-jumper-ravine-blue/" data-title="Quick View" data-product_id="22" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=22" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="22" data-product_sku="" aria-label="Add “Removed patch denim jumper - ravine blue” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-17 status-publish instock product_cat-bottoms-for-girls product_cat-for-babies product_cat-for-girls product_cat-gifts product_cat-jackets-outerwear product_cat-pajamas-for-babies product_cat-shorts product_cat-tops has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/sparkle-stripe-bodysuit/">
                                    <span class="onsale">-20%</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-210x210.jpg" alt="Sparkle stripe bodysuit" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-im1.jpg 565w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/sparkle-stripe-bodysuit/">Sparkle stripe bodysuit</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>10</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>8</span></ins></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-17-btn" data-product-id="17" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/sparkle-stripe-bodysuit/" data-title="Quick View" data-product_id="17" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=17" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="17" data-product_sku="" aria-label="Add “Sparkle stripe bodysuit” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-79 status-publish last instock product_cat-activewear-for-girls product_cat-bottoms-for-girls product_cat-dresses-rompers product_cat-for-babies product_cat-for-girls product_cat-gifts product_cat-jackets-outerwear product_cat-socks-tights has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/tiered-neon-maxi-skirt/">
                                    <span class="onsale">-25%</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-10-210x210.jpg" alt="Tiered neon maxi skirt" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-10-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-10-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-10-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-10-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-10-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-10-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-10-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-10-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-10.jpg 559w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/tiered-neon-maxi-skirt/">Tiered neon maxi skirt</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>8</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>6</span></ins></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-79-btn" data-product-id="79" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/tiered-neon-maxi-skirt/" data-title="Quick View" data-product_id="79" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=79" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="79" data-product_sku="" aria-label="Add “Tiered neon maxi skirt” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div id="tab-best_selling_products" class="container home-tab">
            <div class="woocommerce columns-4 ">
                <ul class="products columns-4 products--mobile-small">
                    <li class="product type-product post-57 status-publish first instock product_cat-bottoms product_cat-bottoms-for-babies product_cat-for-babies product_cat-for-boys product_cat-gifts product_cat-sweaters product_cat-sweaters-for-babies product_cat-tops has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/french-terry-shawl-collar-cardigan/">
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-4-210x210.jpg" alt="French terry shawl collar cardigan" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-4-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-4-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-4-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-4-140x140.jpg 140w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/french-terry-shawl-collar-cardigan/">French terry shawl collar cardigan</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>23</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-57-btn" data-product-id="57" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/french-terry-shawl-collar-cardigan/" data-title="Quick View" data-product_id="57" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=57" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="57" data-product_sku="" aria-label="Add “French terry shawl collar cardigan” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-53 status-publish instock product_cat-bottoms product_cat-bottoms-for-babies product_cat-for-babies product_cat-for-boys product_cat-gifts product_cat-shorts product_cat-sweaters product_cat-tops has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/flannel-lined-cordroy-overalls/">
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2-210x210.jpg" alt="Flannel-lined condroy overalls" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-k2.jpg 588w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/flannel-lined-cordroy-overalls/">Flannel-lined condroy overalls</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>21</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-53-btn" data-product-id="53" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/flannel-lined-cordroy-overalls/" data-title="Quick View" data-product_id="53" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=53" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="53" data-product_sku="" aria-label="Add “Flannel-lined condroy overalls” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-65 status-publish instock product_cat-activewear-for-girls product_cat-dresses-rompers product_cat-for-babies product_cat-for-girls product_cat-gifts product_cat-pajamas-for-babies product_cat-socks-tights product_cat-sweaters-for-babies has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/2-piece-neon-striped-dress/">
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-6-210x210.jpg" alt="2-piece neon striped dress" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-6-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-6-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-6-590x590.jpg 590w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-6-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-6-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-6-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-6-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-6-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-6-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-6.jpg 596w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/2-piece-neon-striped-dress/">2-piece neon striped dress</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>13</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-65-btn" data-product-id="65" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/2-piece-neon-striped-dress/" data-title="Quick View" data-product_id="65" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=65" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="65" data-product_sku="" aria-label="Add “2-piece neon striped dress” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-126 status-publish last instock product_cat-girl-shoes product_cat-shoes has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-sparkle-cat-crib-shoes/">
                                    <span class="ip-shop-loop-new-badge">New</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-210x210.jpg" alt="Oshkosh sparkle cat crib shoes" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-360x361.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21.jpg 500w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/oshkosh-sparkle-cat-crib-shoes/">Oshkosh sparkle cat crib shoes</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>22</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-126-btn" data-product-id="126" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-sparkle-cat-crib-shoes/" data-title="Quick View" data-product_id="126" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=126" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="126" data-product_sku="" aria-label="Add “Oshkosh sparkle cat crib shoes” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-46 status-publish first instock product_cat-activewear product_cat-bottoms-for-babies product_cat-for-babies product_cat-for-boys product_cat-gifts product_cat-sweaters product_cat-tops product_cat-tops-bodysuits has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/2-pocket-denim-bodysuit/">
                                    <span class="onsale">-23%</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-2-210x210.jpg" alt="2-pocket denim bodysuit" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-2-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-2-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-2-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-2-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-2-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-2-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-2-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-2.jpg 541w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/2-pocket-denim-bodysuit/">2-pocket denim bodysuit</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>13</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>10</span></ins></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-46-btn" data-product-id="46" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/2-pocket-denim-bodysuit/" data-title="Quick View" data-product_id="46" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=46" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="46" data-product_sku="" aria-label="Add “2-pocket denim bodysuit” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-61 status-publish instock product_cat-activewear product_cat-bottoms-for-girls product_cat-dresses-rompers product_cat-for-babies product_cat-for-boys product_cat-gifts product_cat-pajamas product_cat-tops-bodysuits has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-quilted-puffer-vest/">
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-210x210.jpg" alt="Oshkosh quilted puffer vest" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-590x590.jpg 590w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-5.jpg 594w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/oshkosh-quilted-puffer-vest/">Oshkosh quilted puffer vest</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>15</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-61-btn" data-product-id="61" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-quilted-puffer-vest/" data-title="Quick View" data-product_id="61" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=61" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="61" data-product_sku="" aria-label="Add “Oshkosh quilted puffer vest” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-144 status-publish instock product_cat-boy-shoes product_cat-shoes has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-chukka-boots/">
                                    <span class="ip-shop-loop-new-badge">New</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-210x210.jpg" alt="Oshkosh chukka boots" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-360x361.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-249x250.jpg 249w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26.jpg 470w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/oshkosh-chukka-boots/">Oshkosh chukka boots</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>44</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-144-btn" data-product-id="144" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-chukka-boots/" data-title="Quick View" data-product_id="144" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=144" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="144" data-product_sku="" aria-label="Add “Oshkosh chukka boots” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-30 status-publish last instock product_cat-activewear product_cat-bottoms-for-babies product_cat-for-babies product_cat-for-boys product_cat-gifts product_cat-pajamas product_cat-shorts product_cat-tops product_cat-tops-bodysuits has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/hooded-cable-knit-coveralls/">
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3-210x210.jpg" alt="Hooded cable-knit coveralls" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-3.jpg 589w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/hooded-cable-knit-coveralls/">Hooded cable-knit coveralls</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>20</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-30-btn" data-product-id="30" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/hooded-cable-knit-coveralls/" data-title="Quick View" data-product_id="30" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=30" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="30" data-product_sku="" aria-label="Add “Hooded cable-knit coveralls” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-35 status-publish first instock product_cat-activewear product_cat-bottoms product_cat-bottoms-for-babies product_cat-for-babies product_cat-for-boys product_cat-gifts product_cat-sweaters product_cat-tops product_cat-tops-bodysuits has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/heritage-fleece-hoodie/">
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1-210x210.jpg" alt="Детская толстовка из флиса" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-h1.jpg 586w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/heritage-fleece-hoodie/">Детская толстовка из флиса</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>12</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-35-btn" data-product-id="35" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/heritage-fleece-hoodie/" data-title="Quick View" data-product_id="35" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=35" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="35" data-product_sku="" aria-label="Add “Детская толстовка из флиса” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-76 status-publish instock product_cat-activewear-for-girls product_cat-dresses-rompers product_cat-for-babies product_cat-for-girls product_cat-gifts product_cat-jackets-outerwear has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-jersey-lined-windbreaker/">
                                    <span class="onsale">-20%</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9-210x210.jpg" alt="Oshkosh jersey-lined windbreaker" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-9.jpg 583w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/oshkosh-jersey-lined-windbreaker/">Oshkosh jersey-lined windbreaker</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>20</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>16</span></ins></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-76-btn" data-product-id="76" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-jersey-lined-windbreaker/" data-title="Quick View" data-product_id="76" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=76" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="76" data-product_sku="" aria-label="Add “Oshkosh jersey-lined windbreaker” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-94 status-publish instock product_cat-accessories product_cat-gifts has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/casual-buckle-belt/">
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-97209_brown-210x210.jpg" alt="Casual buckle belt" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-97209_brown-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-97209_brown-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-97209_brown-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-97209_brown-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-97209_brown-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-97209_brown-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-97209_brown-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-97209_brown.jpg 470w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/casual-buckle-belt/">Casual buckle belt</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>8</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-94-btn" data-product-id="94" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/casual-buckle-belt/" data-title="Quick View" data-product_id="94" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=94" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="94" data-product_sku="" aria-label="Add “Casual buckle belt” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-120 status-publish last instock product_cat-accessories product_cat-gifts has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/woven-belt/">
                                    <span class="ip-shop-loop-new-badge">New</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19-210x210.jpg" alt="Woven belt" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19.jpg 576w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/woven-belt/">Woven belt</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>8</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-120-btn" data-product-id="120" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/woven-belt/" data-title="Quick View" data-product_id="120" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=120" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="120" data-product_sku="" aria-label="Add “Woven belt” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div id="tab-recent_products" class="container home-tab">
            <div class="woocommerce columns-4 ">
                <ul class="products columns-4 products--mobile-small">
                    <li class="product type-product post-150 status-publish first instock product_cat-girl-shoes product_cat-shoes has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/stride-rite-str-tulip-sandal/">
                                    <span class="ip-shop-loop-new-badge">New</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-28-210x210.jpg" alt="Stride rite str tulip sandal" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-28-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-28-360x361.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-28-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-28-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-28-142x143.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-28-249x250.jpg 249w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-28-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-28.jpg 496w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/stride-rite-str-tulip-sandal/">Stride rite str tulip sandal</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>48</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-150-btn" data-product-id="150" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/stride-rite-str-tulip-sandal/" data-title="Quick View" data-product_id="150" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=150" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="150" data-product_sku="" aria-label="Add “Stride rite str tulip sandal” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-147 status-publish instock product_cat-girl-shoes product_cat-shoes has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/carters-unicorn-slippers/">
                                    <span class="ip-shop-loop-new-badge">New</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-27-210x210.jpg" alt="Carter’s unicorn slippers" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-27-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-27-360x361.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-27-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-27-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-27-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-27-249x250.jpg 249w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-27-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-27.jpg 470w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/carters-unicorn-slippers/">Carter’s unicorn slippers</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>10</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-147-btn" data-product-id="147" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/carters-unicorn-slippers/" data-title="Quick View" data-product_id="147" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=147" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="147" data-product_sku="" aria-label="Add “Carter&#39;s unicorn slippers” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-144 status-publish instock product_cat-boy-shoes product_cat-shoes has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-chukka-boots/">
                                    <span class="ip-shop-loop-new-badge">New</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-210x210.jpg" alt="Oshkosh chukka boots" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-360x361.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-249x250.jpg 249w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-26.jpg 470w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/oshkosh-chukka-boots/">Oshkosh chukka boots</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>44</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-144-btn" data-product-id="144" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-chukka-boots/" data-title="Quick View" data-product_id="144" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=144" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="144" data-product_sku="" aria-label="Add “Oshkosh chukka boots” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-140 status-publish last instock product_cat-girl-shoes product_cat-shoes has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/stride-rite-made2play-sneaker-boot/">
                                    <span class="ip-shop-loop-new-badge">New</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-25-210x210.jpg" alt="Stride rite made2play sneaker boot" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-25-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-25-360x361.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-25-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-25-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-25-142x143.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-25-249x250.jpg 249w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-25-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-25.jpg 537w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/stride-rite-made2play-sneaker-boot/">Stride rite made2play sneaker boot</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>55</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-140-btn" data-product-id="140" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/stride-rite-made2play-sneaker-boot/" data-title="Quick View" data-product_id="140" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=140" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="140" data-product_sku="" aria-label="Add “Stride rite made2play sneaker boot” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-137 status-publish first instock product_cat-boy-shoes product_cat-shoes has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/carters-hiker-boots/">
                                    <span class="ip-shop-loop-new-badge">New</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-24-210x210.jpg" alt="Carter’s hiker boots" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-24-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-24-360x361.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-24-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-24-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-24-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-24-249x250.jpg 249w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-24-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-24.jpg 470w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/carters-hiker-boots/">Carter’s hiker boots</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>26</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-137-btn" data-product-id="137" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/carters-hiker-boots/" data-title="Quick View" data-product_id="137" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=137" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="137" data-product_sku="" aria-label="Add “Carter&#39;s hiker boots” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-133 status-publish instock product_cat-girl-shoes product_cat-shoes has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-kitty-slip-on-loafers/">
                                    <span class="ip-shop-loop-new-badge">New</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-23-210x210.jpg" alt="Oshkosh kitty slip-on loafers" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-23-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-23-360x361.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-23-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-23-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-23-142x143.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-23-249x250.jpg 249w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-23-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-23.jpg 541w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/oshkosh-kitty-slip-on-loafers/">Oshkosh kitty slip-on loafers</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>34</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-133-btn" data-product-id="133" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-kitty-slip-on-loafers/" data-title="Quick View" data-product_id="133" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=133" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="133" data-product_sku="" aria-label="Add “Oshkosh kitty slip-on loafers” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-129 status-publish instock product_cat-boy-shoes product_cat-shoes has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/western-chief-monster-crusher-rain-boots/">
                                    <span class="ip-shop-loop-new-badge">New</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-22-210x210.jpg" alt="Western chief monster crusher rain boots" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-22-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-22-360x361.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-22-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-22-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-22-142x143.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-22-249x250.jpg 249w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-22-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-22.jpg 534w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/western-chief-monster-crusher-rain-boots/">Western chief monster crusher rain boots</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>30</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-129-btn" data-product-id="129" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/western-chief-monster-crusher-rain-boots/" data-title="Quick View" data-product_id="129" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=129" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="129" data-product_sku="" aria-label="Add “Western chief monster crusher rain boots” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-126 status-publish last instock product_cat-girl-shoes product_cat-shoes has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-sparkle-cat-crib-shoes/">
                                    <span class="ip-shop-loop-new-badge">New</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-210x210.jpg" alt="Oshkosh sparkle cat crib shoes" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-360x361.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-21.jpg 500w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/oshkosh-sparkle-cat-crib-shoes/">Oshkosh sparkle cat crib shoes</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>22</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-126-btn" data-product-id="126" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/oshkosh-sparkle-cat-crib-shoes/" data-title="Quick View" data-product_id="126" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=126" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="126" data-product_sku="" aria-label="Add “Oshkosh sparkle cat crib shoes” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-123 status-publish first instock product_cat-boy-shoes product_cat-shoes has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/stride-rite-petra-sandal/">
                                    <span class="ip-shop-loop-new-badge">New</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-20-210x210.jpg" alt="Stride rite petra sandal" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-20-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-20-360x361.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-20-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-20-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-20-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-20-249x250.jpg 249w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-20-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-20.jpg 494w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/stride-rite-petra-sandal/">Stride rite petra sandal</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>40</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-123-btn" data-product-id="123" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/stride-rite-petra-sandal/" data-title="Quick View" data-product_id="123" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=123" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="123" data-product_sku="" aria-label="Add “Stride rite petra sandal” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-120 status-publish instock product_cat-accessories product_cat-gifts has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/woven-belt/">
                                    <span class="ip-shop-loop-new-badge">New</span>
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19-210x210.jpg" alt="Woven belt" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-1-19.jpg 576w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/woven-belt/">Woven belt</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>8</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-120-btn" data-product-id="120" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/woven-belt/" data-title="Quick View" data-product_id="120" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=120" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="120" data-product_sku="" aria-label="Add “Woven belt” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-116 status-publish instock product_cat-accessories product_cat-gifts has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/flower-headband/">
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-18-210x210.jpg" alt="Flower headband" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-18-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-18-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-18-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-18-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-18-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-18-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-18-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-18-555x555.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-18.jpg 571w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/flower-headband/">Flower headband</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>8</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-116-btn" data-product-id="116" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/flower-headband/" data-title="Quick View" data-product_id="116" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=116" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="116" data-product_sku="" aria-label="Add “Flower headband” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="product type-product post-113 status-publish last instock product_cat-accessories product_cat-gifts has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="ip-shop-loop-wrap">
                            <div class="ip-shop-loop-thumb">
                                <a href="https://parkofideas.com/kidz/demo2/product/plume-hsir-clip/">
                                    <img data-src="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-17-210x210.jpg" alt="Plume hsir clip" class="thumb-shop-catalog lazyload front" data-srcset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-17-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-17-360x360.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-17-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-17-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-17-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-17-250x250.jpg 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-17-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-2-17.jpg 548w" data-sizes="(min-width: 1200px) 210px, (min-width: 992px) 241px, (max-width: 600px) and (min-width: 412px) 140px, (max-width: 411px) and (min-width: 360px) 100px, 360px">			</a>
                            </div>
                            <div class="ip-shop-loop-details">
                                <h3><a href="https://parkofideas.com/kidz/demo2/product/plume-hsir-clip/">Plume hsir clip</a></h3>
                                <div class="ip-shop-loop-after-title">
                                    <div class="ip-shop-loop-price">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>3</span></span>
                                    </div>
                                    <div class="ip-shop-loop-actions">
                                        <a href="https://parkofideas.com/kidz/demo2/#" class="ip-wishlist-btn ip-wishlist-item-113-btn" data-product-id="113" data-title="Wishlist">
                                            <svg class="on">
                                                <use xlink:href="#svg-wishlist-on"></use>
                                            </svg>
                                            <svg class="off">
                                                <use xlink:href="#svg-wishlist-off"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/product/plume-hsir-clip/" data-title="Quick View" data-product_id="113" class="ip-quickview-btn product_type_simple">
                                            <svg>
                                                <use xlink:href="#svg-quick-view"></use>
                                            </svg>
                                        </a>
                                        <a href="https://parkofideas.com/kidz/demo2/?add-to-cart=113" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="113" data-product_sku="" aria-label="Add “Plume hsir clip” to your cart" rel="nofollow">
                                            <svg class="svg-add">
                                                <use xlink:href="#svg-cart"></use>
                                            </svg>
                                            Add to cart
                                        </a>
                                        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <section id="home-brand" style="background-color: #F4F8FF">
        <div class="container">
            <div class="slick-brands preloading">
                <div class="lazyload brand" title="Brand 1" data-bgset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-logo1-142x137.png 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-logo1-259x250.png 259w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-logo1-55x53.png 55w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-logo1.png 356w">
                </div>
                <div class="lazyload brand" title="Brand 2" data-bgset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-group-2-142x142.png 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-group-2-70x70.png 70w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-group-2-360x360.png 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-group-2-425x425.png 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-group-2-241x241.png 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-group-2-250x250.png 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-group-2-53x53.png 53w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-group-2-140x140.png 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-group-2-210x210.png 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-group-2.png 490w">
                </div>
                <div class="lazyload brand" title="Brand 3" data-bgset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-13-142x128.png 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-13-360x324.png 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-13-277x250.png 277w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-13-59x53.png 59w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-13.png 375w">
                </div>
                <div class="lazyload brand" title="Brand 4" data-bgset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-11-142x70.png 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-11-360x177.png 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-11-425x212.png 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-11-108x53.png 108w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-11.png 430w">
                </div>
                <div class="lazyload brand" title="Brand 5" data-bgset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-10-1-142x142.png 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-10-1-70x70.png 70w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-10-1.png 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-10-1-241x241.png 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-10-1-249x250.png 249w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-10-1-53x53.png 53w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-10-1-140x140.png 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-10-1-210x210.png 210w">
                </div>
                <div class="lazyload brand" title="Brand 6" data-bgset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-usa-142x128.png 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-usa-360x325.png 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-usa-277x250.png 277w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-usa-59x53.png 59w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-usa-555x501.png 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-usa.png 578w">
                </div>
                <div class="lazyload brand" title="Brand 7" data-bgset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-8-142x142.png 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-8-70x70.png 70w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-8-360x360.png 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-8-425x425.png 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-8-241x241.png 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-8-250x250.png 250w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-8-53x53.png 53w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-8-140x140.png 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-8-210x210.png 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-bitmap-8.png 453w">
                </div>
            </div>
        </div>
    </section>
    <section id="home-post">
        <div class="container">
            <div class="home-post-header-wrap">
                <a href="https://parkofideas.com/kidz/demo2/">
                    <h2>Blog Posts</h2>
                </a>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <article id="bottom-post-179" class="post-179 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
                        <div class="lazyload post-img" data-bgset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-0b39e430882505.5637b77946c01-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-0b39e430882505.5637b77946c01-70x70.jpg 70w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-0b39e430882505.5637b77946c01-360x361.jpg 360w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-0b39e430882505.5637b77946c01-588x590.jpg 588w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-0b39e430882505.5637b77946c01-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-0b39e430882505.5637b77946c01-142x142.jpg 142w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-0b39e430882505.5637b77946c01-249x250.jpg 249w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-0b39e430882505.5637b77946c01-53x53.jpg 53w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-0b39e430882505.5637b77946c01-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-0b39e430882505.5637b77946c01-210x210.jpg 210w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-0b39e430882505.5637b77946c01-555x557.jpg 555w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-0b39e430882505.5637b77946c01.jpg 729w"></div>
                        <div class="post-content">
                            <div class="post-meta">
                              <span class="post-date">
                              October 20, 2016				</span>
                            </div>
                            <header class="post-header">
                                <a href="https://parkofideas.com/kidz/demo2/few-quips-galvanized-the-mock-jury-box/">
                                    <h3>Few quips galvanized the mock jury box</h3>
                                </a>
                            </header>
                            <span class="more">Read More</span>
                        </div>
                        <a href="https://parkofideas.com/kidz/demo2/few-quips-galvanized-the-mock-jury-box/" class="whole"></a>
                    </article>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <article id="bottom-post-177" class="post-177 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
                        <div class="lazyload post-img" data-bgset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/08/clothes-7240c6228ef757f9551ed11014fb4f6a-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/08/clothes-7240c6228ef757f9551ed11014fb4f6a-70x70.jpg 70w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/08/clothes-7240c6228ef757f9551ed11014fb4f6a-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/08/clothes-7240c6228ef757f9551ed11014fb4f6a-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/08/clothes-7240c6228ef757f9551ed11014fb4f6a-210x210.jpg 210w"></div>
                        <div class="post-content">
                            <div class="post-meta">
                              <span class="post-date">
                              October 20, 2016				</span>
                            </div>
                            <header class="post-header">
                                <a href="https://parkofideas.com/kidz/demo2/a-quick-movement-of-the-enemy-will-jeopardize-six-gunboats/">
                                    <h3>A quick movement of the enemy will jeopardize six gunboats</h3>
                                </a>
                            </header>
                            <span class="more">Read More</span>
                        </div>
                        <a href="https://parkofideas.com/kidz/demo2/a-quick-movement-of-the-enemy-will-jeopardize-six-gunboats/" class="whole"></a>
                    </article>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                    <article id="bottom-post-175" class="post-175 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
                        <div class="lazyload post-img" data-bgset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-5be1c438590861.5767fb873e249-1-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-5be1c438590861.5767fb873e249-1-70x70.jpg 70w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-5be1c438590861.5767fb873e249-1-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-5be1c438590861.5767fb873e249-1-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-5be1c438590861.5767fb873e249-1-210x210.jpg 210w"></div>
                        <div class="post-content">
                            <div class="post-meta">
                              <span class="post-date">
                              October 20, 2016				</span>
                            </div>
                            <header class="post-header">
                                <a href="https://parkofideas.com/kidz/demo2/brawny-gods-just-flocked-up-to-quiz-and-vex-him/">
                                    <h3>Brawny gods just flocked up to quiz and vex him</h3>
                                </a>
                            </header>
                            <span class="more">Read More</span>
                        </div>
                        <a href="https://parkofideas.com/kidz/demo2/brawny-gods-just-flocked-up-to-quiz-and-vex-him/" class="whole"></a>
                    </article>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <article id="bottom-post-173" class="post-173 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
                        <div class="lazyload post-img" data-bgset="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-illustrations_portfolio-on-behance-2016-09-01-17-00-28-241x241.jpg 241w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-illustrations_portfolio-on-behance-2016-09-01-17-00-28-70x70.jpg 70w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-illustrations_portfolio-on-behance-2016-09-01-17-00-28-425x425.jpg 425w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-illustrations_portfolio-on-behance-2016-09-01-17-00-28-140x140.jpg 140w, https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-illustrations_portfolio-on-behance-2016-09-01-17-00-28-210x210.jpg 210w"></div>
                        <div class="post-content">
                            <div class="post-meta">
                              <span class="post-date">
                              October 20, 2016				</span>
                            </div>
                            <header class="post-header">
                                <a href="https://parkofideas.com/kidz/demo2/all-questions-asked-by-five-watch-experts-amazed-the-judge/">
                                    <h3>All questions asked by five watch experts amazed the judge</h3>
                                </a>
                            </header>
                            <span class="more">Read More</span>
                        </div>
                        <a href="https://parkofideas.com/kidz/demo2/all-questions-asked-by-five-watch-experts-amazed-the-judge/" class="whole"></a>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section id="home-review">
        <div class="container">
            <div class="slick-review preloading">
                <div class="review">
                    <svg class="quote">
                        <use xlink:href="#svg-quote"></use>
                    </svg>
                    <p>I STRONGLY recommend KIDZ Baby Store to EVERYONE interested in running a successful online business! It’s incredible. Best. Product. Ever! KIDZ Baby Store was worth a fortune to my company</p>
                    <div class="thumb lazyload" data-bg="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-untitled-6-2016-09-01-11-41-14-70x70.png"></div>
                    <div class="author">– Mair Q.</div>
                    <div class="occupation">
                        Dover, North Carolina
                    </div>
                </div>
                <div class="review">
                    <svg class="quote">
                        <use xlink:href="#svg-quote"></use>
                    </svg>
                    <p>Very easy to use. I love your system. Definitely worth the investment. Buy this now.</p>
                    <div class="thumb lazyload" data-bg="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-untitled-6-2016-09-01-11-41-43-70x70.png"></div>
                    <div class="author">– Neely E.</div>
                    <div class="occupation">
                        Whippleville, New York
                    </div>
                </div>
                <div class="review">
                    <svg class="quote">
                        <use xlink:href="#svg-quote"></use>
                    </svg>
                    <p>I made back the purchase price in just 48 hours! You guys rock!</p>
                    <div class="thumb lazyload" data-bg="https://parkofideas.com/kidz/demo2/wp-content/uploads/2016/10/clothes-untitled-6-2016-09-01-11-42-00-70x70.png"></div>
                    <div class="author">– Melony A.</div>
                    <div class="occupation">
                        Faifax, Washington DC
                    </div>
                </div>
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
    <div id="home-shortcode" class="home-shortcode">
        <div id="sb_instagram" data-script="https://parkofideas.com/kidz/demo2/wp-content/plugins/instagram-feed/js/sb-instagram.min.js" data-link="https://parkofideas.com/kidz/demo2/wp-content/plugins/instagram-feed/css/sb-instagram.min.css" class="lazyload sbi sbi_mob_col_auto sbi_col_6" style="width:100%; " data-id="3620813244" data-num="6" data-res="auto" data-cols="6" data-options="{&quot;sortby&quot;: &quot;none&quot;, &quot;showbio&quot;: &quot;false&quot;,&quot;feedID&quot;: &quot;3620813244&quot;, &quot;headercolor&quot;: &quot;&quot;, &quot;imagepadding&quot;: &quot;&quot;,&quot;mid&quot;: &quot;M2E4MWE5Zg==&quot;, &quot;disablecache&quot;: &quot;false&quot;, &quot;sbiCacheExists&quot;: &quot;true&quot;,&quot;callback&quot;: &quot;ZmIwNmIzMTQ0ZDI3.NDIzNTliYTJlNmQwNmFlZDkyOTA=&quot;, &quot;sbiHeaderCache&quot;: &quot;true&quot;}">
            <div class="sb_instagram_header" style="padding: 0px; padding-bottom: 0;"></div>
            <div id="sbi_images">
                <div class="sbi_loader"></div>
            </div>
            <div id="sbi_load" class="sbi_hidden"></div>
        </div>
        <!-- INSTA -->
    </div>

@endsection
