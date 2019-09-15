@extends('layouts.site')

@section('title',       $seo['title'])
@section('description', $seo['description'])
@section('keywords',    $seo['keywords'])

@section('content')

@section('body_class') woocommerce-cart @stop

        <?php $breadcrumbs = [
            [
                'title' => 'Главная',
                'link'  => '/'
            ],
            [
                'title' => 'Корзина',
                'link'  => ''
            ]
        ];?>

        <header class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        @include('site.includes.breadcrumb', ['breadcrumbs' => $breadcrumbs])
                        <h1>Корзина</h1>
                    </div>
                </div>
            </div>
        </header>

        <div class="container post-container" id="cart">
            <div class="row">
                <div class="col-md-12">
                    <section role="main" class="post-open" v-if="list_cart.length > 0">
                        <article id="post-348" class="post-348 page type-page status-publish hentry">
                            <div class="shop-content">

                                <div class="woocommerce">

                                        <div class="woocommerce-notices-wrapper" v-if="message">
                                            <div class="woocommerce-message" role="alert">
                                                @{{ message }}
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8">

                                                <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                                    <thead>
                                                    <tr>
                                                        <th class="product-name" colspan="2">товар</th>
                                                        <th class="product-quantity">Количество</th>
                                                        <th class="product-subtotal">Сумма</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="woocommerce-cart-form__cart-item cart_item"  v-for="(item, index) in list_cart">

                                                            <td class="product-thumbnail">
                                                                <a  @click="deleteProductQuantity(item.product_id)" class="remove" title="Удалить">×</a>
                                                                <a v-bind:href="item.product_url">
                                                                    <img width="70"
                                                                         height="70"
                                                                         class="attachment-thumbnail size-thumbnail lazyloaded"
                                                                         v-bind:src="item.product_photo"
                                                                         v-bind:alt="item.product_name"
                                                                         v-bind:title="item.product_name">
                                                                </a>
                                                            </td>
                                                            <td class="product-name">
                                                                <a  v-bind:href="item.product_url">
                                                                    @{{ item.product_name }}
                                                                </a>
                                                                <div class="product-price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">
                                                                            @{{ item.product_specific_price }}
                                                                        </span>
                                                                        <del v-if="item.product_price != item.product_specific_price">
                                                                           @{{ item.product_price }}
                                                                        </del>
                                                                    </span>
                                                                </div>
                                                            </td>
                                                            <td class="product-quantity">
                                                                <div class="quantity">
                                                                    <!--
                                                                    <label class="screen-reader-text" for="quantity_5d7d050e9027e">Casual buckle belt quantity</label>
                                                                    -->
                                                                    <input @change="cartSave(item.product_id, item.quantity)"
                                                                           type="number"
                                                                           class="input-text qty text"
                                                                           v-model="item.quantity"/>
                                                                    <button @click="decreaseProductQuantity(item, index)"
                                                                            class="ip-quantity-btn ip-quantity-btn--minus ip-prod-quantity-minus"
                                                                            type="button">-</button>
                                                                    <button @click="increaseProductQuantity(item, index)"
                                                                            class="ip-quantity-btn ip-prod-quantity-plus"
                                                                            type="button">+</button>
                                                                </div>
                                                            </td>

                                                            <td class="product-subtotal">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">
                                                                        @{{ item.sum }}
                                                                    </span>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <!--
                                                        <tr>
                                                            <td colspan="4" class="actions">
                                                                <div class="update-cart">
                                                                    <input type="submit" class="button" name="update_cart" value="Update cart" disabled="">
                                                                    <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="c237686728">
                                                                    <input type="hidden" name="_wp_http_referer" value="/kidz/demo2/cart/">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        -->
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="collaterals cart-collaterals">
                                                    <div class="cart_totals">

                                                        <!--
                                                        <div class="coupon">
                                                            <span class="header">
                                                                <a href="#">
                                                                    <svg>
                                                                        <use xlink:href="#svg-coupon"></use>
                                                                    </svg>
                                                                    Coupon code
                                                                </a>
                                                            </span>
                                                            <div class="form">
                                                                <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
                                                                <input type="submit" class="button" name="apply_coupon" value="Apply coupon">
                                                            </div>
                                                        </div>
                                                        -->

                                                        <table cellspacing="0" class="shop_table shop_table_responsive">
                                                            <tbody>
                                                                <tr class="cart-subtotal">
                                                                    <th>Количество</th>
                                                                    <td>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">
                                                                                @{{ cart_total.quantity }}
                                                                            </span>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="order-total">
                                                                    <th>Итого</th>
                                                                    <td>
                                                                        <strong>
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                    @{{ cart_total.sum }}
                                                                                </span>
                                                                            </span>
                                                                        </strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="wc-proceed-to-checkout" colspan="2">
                                                                        <a href="{{ route('checkout') }}" class="checkout-button button alt wc-forward">
                                                                            Оформить
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                                <div class="clear"></div>

                            </div>






                        </article>

                    </section>
                    <p v-else>
                        Ваша корзина пуста!
                    </p>
                </div>
            </div>

        </div>



<script>
    var checkout = new Vue({
        el: '#cart',
        data () {
            return {
                list_cart: [],
                cart_total: {
                    sum: 0,
                    quantity: 0
                },
                message: ''
            }
        },
        methods:{
            cartSave(product_id, quantity){
                if(quantity > 0)
                {
                    axios.post('/cart-save', {product_id: product_id, quantity: quantity}).then((res)=>{
                        if(res.data)
                        {
                            this.listCart();
                            this.cartTotal();
                            header.cartTotal();
                        }
                    });
                }
            },
            listCart(){
                axios.post('/list-cart').then((res)=>{
                    this.list_cart = res.data;
                });
            },
            decreaseProductQuantity(item, index){
                if(this.list_cart[index].quantity > 1)
                {
                    this.cartSave(item.product_id, this.list_cart[index].quantity -1 );
                    this.showMessage('Корзина обновлена.');
                }
            },
            increaseProductQuantity(item, index){
                this.cartSave(item.product_id, this.list_cart[index].quantity + 1);
                this.showMessage('Корзина обновлена.');
            },
            deleteProductQuantity(product_id){
                axios.post('/cart-delete/' + product_id).then((res)=>{
                    if(res.data)
                    {
                        this.listCart();
                        this.cartTotal();
                        header.cartTotal();
                        this.showMessage('Товар удален.');
                    }
                });
            },
            cartTotal(){
                axios.get('/cart-total/0').then((res)=>{
                    this.cart_total.sum = res.data.sum;
                    this.cart_total.quantity = res.data.quantity;
                });
            },
            showMessage(message){
                this.message = message;
                setTimeout(function () {
                    this.message = '';
                }.bind(this), 3000);
            }
        },
        created(){
            this.listCart();
            this.cartTotal();
        }
    });
</script>

@endsection