<!-------------------------------------- Поиск ---------------------------------------->
<span id="search">
    <div id="ajax-search" class="search-type-1">
        <div class="container ajax-search-container">
            <div class="ajax-search-tip">Что вы ищите?</div>
            <form role="search">
                <input id="ajax-search-input" v-model="search" autocomplete="off" type="text" name="s" placeholder="Поиск товара..." value="">
                <input type="hidden" name="post_type" value="product">
                <a id="search-close" href="#">
                    <svg>
                        <use xlink:href="#svg-close">
                            <svg viewBox="0 0 13 13" id="svg-close" fill="inherit" stroke="inherit"><path d="M2.19.326A1.671 1.671 0 0 0 .568 3.122L4.21 6.763v-.708L.568 9.696a1.671 1.671 0 1 0 2.366 2.362l3.64-3.638h-.707l3.642 3.642a1.68 1.68 0 0 0 2.366.006 1.674 1.674 0 0 0-.002-2.372l-3.641-3.64v.707l3.643-3.643A1.68 1.68 0 0 0 11.88.755a1.674 1.674 0 0 0-2.37.002l-3.642 3.64h.706L2.931.756a1.674 1.674 0 0 0-.74-.431z" stroke="none"></path></svg>
                        </use>
                    </svg>
                </a>
                <button type="button" class="search">
                    <svg>
                        <use xlink:href="#svg-search">
                            <svg viewBox="0 0 20 20" id="svg-search" fill="inherit" stroke="inherit"><path d="M11.124 15.367l.001.001 3.528 3.527a3.005 3.005 0 0 0 4.246.004 3.005 3.005 0 0 0-.004-4.246l-3.527-3.528h-.001A7.977 7.977 0 0 0 16 8a8 8 0 1 0-4.876 7.367zM8 13A5 5 0 1 0 8 3a5 5 0 0 0 0 10z" fill="inherit" fill-rule="evenodd" stroke="none"></path>
                            </svg>
                        </use>
                    </svg>
                </button>
            </form>
        </div>
    </div>

    <div id="ajax-search-result" class="search-type-1 loading">
        <div class="container ajax-search-result-container js-ajax-search-result loaded">
            <ul>
                <li v-if="results.length > 0" class="ajax-search-row post-126 type-product status-publish has-post-thumbnail product_cat-girl-shoes product_cat-shoes product first instock featured shipping-taxable purchasable product-type-simple" v-for="item in results">
                    <a :href="item.url" target="_blank">
                        <div class="post-img">
                            <img :src="item.photo" :alt="item.name">
                        </div>
                    </a>
                    <div class="post-content">
                        <a :href="item.url" target="_blank">
                            <h4>@{{ item.name }}</h4>
                        </a>
                        <span class="price">
                            <span class="woocommerce-Price-amount amount">
                                @{{ item.price }}
                            </span>
                        </span>
                        <div class="actions">
                            <a target="_blank" :href="item.url" class="button product_type_simple add_to_cart_button ajax_add_to_cart" rel="nofollow">
                                Купить
                            </a>
                            <span class="ip-shop-loop-loading">
                                <i></i><i></i><i></i>
                            </span>
                        </div>
                    </div>
                </li>
                <li v-if="results.length > 0"></li>
                <li v-if="results.length == 0 && search" class="no-results">Результатов не найдено</li>
            </ul>
        </div>
    </div>

    <!--
    <div class="search-shadow search-type-1 loading">
        <span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>
    </div>
    --->
</span>
<!-------------------------------------- Поиск ---------------------------------------->
