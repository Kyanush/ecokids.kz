<span id="quickView">

    <div class="mfp-bg ip-mfp-quickview ip-mfp-fade-in mfp-ready" v-if="!loading && price"></div>

    <div  v-if="!loading && price" class="mfp-wrap mfp-close-btn-in mfp-auto-cursor ip-mfp-quickview ip-mfp-fade-in mfp-ready" tabindex="-1" style="overflow: hidden auto;">
        <div class="mfp-container mfp-s-ready mfp-inline-holder">
            <div class="mfp-content">
                <div id="ip-quickview">
                    <div class="ip-p-c qv">
                        <div id="product-35" class="post-35 product type-product status-publish has-post-thumbnail product_cat-activewear product_cat-bottoms product_cat-bottoms-for-babies product_cat-for-babies product_cat-for-boys product_cat-gifts product_cat-sweaters product_cat-tops product_cat-tops-bodysuits first instock featured shipping-taxable purchasable product-type-simple">
                            <div class="ip-qv-product-image">
                                <div class="product-images images">
                                       <div class="slide woocommerce-product-gallery__image">
                                           <img :src="pathPhoto"
                                                class="attachment-ideapark-shop-quickview size-ideapark-shop-quickview" :alt="product.name" :title="product.name"/>
                                       </div>
                                </div>
                            </div>
                            <div class="summary entry-summary ip-qv-product-summary">
                                <div class="ip-product-stock-status">
                                    <span class="ip-stock ip-in-stock" v-if="product.stock > 0">
                                       <svg>
                                          <use xlink:href="#svg-check">
                                              <svg viewBox="0 0 1792 1792" id="svg-check" fill="inherit" stroke="inherit"><path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z" stroke="none"></path></svg>
                                          </use>
                                       </svg>
                                       В наличии
                                    </span>
                                    <span class="ip-stock ip-out-of-stock" v-else>
                                       <svg>
                                          <use xlink:href="#svg-check">
                                              <svg viewBox="0 0 1792 1792" id="svg-check" fill="inherit" stroke="inherit"><path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z" stroke="none"></path></svg>
                                          </use>
                                       </svg>
                                       Товар отсутствует
                                    </span>
                                </div>
                                <h1 class="product_title entry-title" itemprop="name">
                                    @{{ product.name }}
                                </h1>
                                <div class="woocommerce-product-details__short-description">
                                    <p v-html="product.description"></p>
                                </div>
                                <p class="price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">
                                            @{{ price }}
                                        </span>
                                    </span>
                                </p>
                                <form class="cart" v-if="product.stock > 0">
                                    <div class="quantity">
                                        <input
                                            type="number"
                                            class="input-text qty text"
                                            step="1"
                                            min="1"
                                            v-model="quantity"
                                            value="1"
                                            title="Кол-во"
                                            size="4"
                                            inputmode="numeric"
                                            pattern="[0-9]*"
                                            aria-labelledby="Детская толстовка из флиса quantity"/>
                                        <button @click="quantityMinus" class="ip-quantity-btn ip-quantity-btn--minus ip-prod-quantity-minus" type="button">-</button>
                                        <button @click="quantityPlus" class="ip-quantity-btn ip-prod-quantity-plus" type="button">+</button>
                                    </div>
                                    <button @click="addToCartSite" type="button" name="add-to-cart" class="single_add_to_cart_button button alt">
                                        Купить
                                    </button>
                                </form>
                                <div class="ip-product-share-wrap">
                                    <div class="ip-product-wishlist-button">
                                        <input id="product_id" type="hidden" :value="product.id"/>
                                        <a @click="productFeaturesWishlist" class="ip-wishlist-btn ip-wishlist-item-35-btn"  data-title="Wishlist" :class="{ 'added': features_wishlist }">
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
                                            <span class="on">Удалить из списка желаний</span>
                                            <span class="off">Добавить в список желаний</span>
                                        </a>
                                    </div>
                                    <div class="ip-product-share">
                                        <a :href="detailUrlProduct" class="ip-qv-details-button button">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="mfp-close ip-mfp-close" @click="close">
                        <svg>
                            <use xlink:href="#svg-close-light">
                                <svg viewBox="0 0 12 13" id="svg-close-light" fill="inherit" stroke="inherit"><path d="M6.22 4.751L2.578 1.11a1.179 1.179 0 0 0-1.661-.004 1.17 1.17 0 0 0 .003 1.66L4.563 6.41.92 10.05a1.179 1.179 0 0 0-.003 1.66 1.17 1.17 0 0 0 1.66-.003L6.22 8.066l3.642 3.642c.459.457 1.2.46 1.661.004a1.172 1.172 0 0 0-.003-1.661L7.877 6.409l3.643-3.643a1.18 1.18 0 0 0 .003-1.66 1.172 1.172 0 0 0-1.66.003L6.22 4.75v.001z" fill="inherit" fill-rule="evenodd" stroke="none"></path></svg>
                            </use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="mfp-preloader">Loading...</div>
        </div>
    </div>

    <div id="ip-quickview-shadow" :class="{ 'loading': loading && price }">
        <div class="ip-shop-loop-loading">
            <i></i>
            <i></i>
            <i></i>
        </div>
    </div>
</span>
