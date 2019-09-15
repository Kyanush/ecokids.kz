@extends('layouts.site')

@section('title',       $seo['title'])
@section('description', $seo['description'])
@section('keywords',    $seo['keywords'])

@section('content')

@section('body_class') woocommerce-checkout @stop

        <?php $breadcrumbs = [
            [
                'title' => 'Главная',
                'link'  => '/'
            ],
            [
                'title' => 'Корзина',
                'link'  => route('cart')
            ],
            [
                'title' => $seo['title'],
                'link'  => ''
            ]
        ];?>

        <header class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        @include('site.includes.breadcrumb', ['breadcrumbs' => $breadcrumbs])
                        <h1>{{ $seo['title'] }}</h1>
                    </div>
                </div>
            </div>
        </header>

        <div class="container post-container" id="checkout">

            <div class="row">
                <div class="col-md-12">

                    <span v-if="list_cart.length == 0">
                        <p v-if="order_id > 0" class="kok">
                            Ваш заказ успешно оформлен, номер заказа <b><a v-bind:href="'/order-history/' + order_id" class="kok">№:@{{ order_id }}</a></b>
                        </p>
                        <p v-else>
                            Ваша корзина пуста!
                        </p>
                    </span>

                    <section v-else role="main" class="post-open">
                        <article id="post-7" class="post-7 page type-page status-publish hentry">
                            <div class="shop-content">
                                <div class="woocommerce">
                                    <div class="checkout woocommerce-checkout">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="col2-set" id="customer_details">

                                                    <div class="col-1">
                                                        <div class="woocommerce-billing-fields">
                                                            <h3>Покупатель</h3>
                                                            <div class="woocommerce-billing-fields__field-wrapper">

                                                                <p class="form-row form-row-wide validate-required">
                                                                    <label class="">Мобильный телефон&nbsp;
                                                                        <abbr class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <span class="woocommerce-input-wrapper">
                                                                        <input type="text"
                                                                               v-model="user.phone"
                                                                               class="input-text phone-mask"
                                                                               @blur="user.phone = $event.target.value;"
                                                                               placeholder="Мобильный телефон *"/>
                                                                    </span>
                                                                </p>

                                                                <p class="form-row form-row-wide validate-required">
                                                                    <label class="">E-mail&nbsp;
                                                                        <abbr class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <span class="woocommerce-input-wrapper">
                                                                        <input class="input-text"
                                                                               type="email"
                                                                               v-model="user.email"
                                                                               placeholder="Электронная почта *">
                                                                    </span>
                                                                </p>

                                                                <p class="form-row form-row-wide validate-required">
                                                                    <label class="">Имя&nbsp;
                                                                        <abbr class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <span class="woocommerce-input-wrapper">
                                                                        <input class="input-text"
                                                                               type="text"
                                                                               v-model="user.name"
                                                                               placeholder="Имя"/>
                                                                    </span>
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-2">
                                                        <div class="woocommerce-additional-fields">
                                                            <h3>Оплата/Доставка</h3>
                                                            <div class="woocommerce-additional-fields__field-wrapper">
                                                                <div class="form-row form-row-wide validate-required">
                                                                    <label class="">Оплата&nbsp;
                                                                        <abbr class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <span class="woocommerce-input-wrapper">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-12" v-for="(item, index) in list_payments">
                                                                                <div :for="'payment' + index" @click="selectedPayment(item)">
                                                                                    <input type="radio" name="payment" :id="'payment' + index" :checked="payment.id == item.id"/>
                                                                                    @{{ item.name }}
                                                                                    <img width="20" v-bind:src="item.logo">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                                <div class="form-row form-row-wide validate-required">
                                                                    <label class="">Доставка&nbsp;
                                                                        <abbr class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <span class="woocommerce-input-wrapper">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-12" v-for="(item, index) in list_carriers">
                                                                                <div  :for="'carrier' + index" @click="selectedCarrier(item)">
                                                                                    <input type="radio" name="carrier" :id="'carrier' + index" :checked="item.id == carrier.id"/>
                                                                                    @{{ item.name }} @{{ item.format_price }}
                                                                                </div>
                                                                                <small v-html="item.delivery_text"></small>
                                                                            </div>
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-3">
                                                        <div class="woocommerce-additional-fields">
                                                            <h3>Комментарий к заказу</h3>
                                                            <div class="woocommerce-additional-fields__field-wrapper">
                                                                <p class="form-row notes" id="order_comments_field" data-priority="">
                                                                    <span class="woocommerce-input-wrapper">
                                                                        <textarea v-model="comment"
                                                                                  name="order_comments"
                                                                                  class="input-text "
                                                                                  id="order_comments"
                                                                                  placeholder="Комментарий к заказу"
                                                                                  rows="2" cols="5">
                                                                        </textarea>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-4" v-if="carrier.id == 1">
                                                        <div class="woocommerce-additional-fields">
                                                            <h3>Укажите адрес доставки</h3>
                                                            <div class="woocommerce-additional-fields__field-wrapper">
                                                                <div class="form-row form-row-wide validate-required">
                                                                    <label class="">Укажите адрес доставки&nbsp;
                                                                        <abbr class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <span class="woocommerce-input-wrapper">
                                                                        <select v-model="address.id" class="input-text">
                                                                            <option value="0">Новый адрес</option>
                                                                            <option v-bind:value="item.id" v-for="item in addresses">
                                                                                @{{ item.city }} - @{{ item.address }}
                                                                            </option>
                                                                        </select>
                                                                    </span>
                                                                </div>
                                                                <div class="form-row form-row-wide validate-required" v-if="address.id == 0">
                                                                    <label class="">Адрес&nbsp;
                                                                        <abbr class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <span class="woocommerce-input-wrapper">
                                                                        <input v-model="address.address" type="text" class="input-text" placeholder="Адрес *"/>
                                                                    </span>
                                                                </div>
                                                                <div class="form-row form-row-wide validate-required" v-if="address.id == 0">
                                                                    <label class="">Город&nbsp;
                                                                        <abbr class="required" title="required">*</abbr>
                                                                    </label>
                                                                    <span class="woocommerce-input-wrapper">
                                                                        <input v-model="address.city" type="text" class="input-text" placeholder="Город *"/>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <!-- col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="collaterals checkout-collaterals" style="position: relative; top: 0px;">
                                                    <h3 id="order_review_heading">Ваш заказ</h3>
                                                    <div id="order_review" class="woocommerce-checkout-review-order">

                                                        <table class="shop_table woocommerce-checkout-review-order-table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="product-name">Товар</th>
                                                                    <th class="product-total">Итого</th>
                                                                </tr>
                                                            </thead>
                                                                <tbody>
                                                                    <tr class="cart_item"   v-for="(item, index) in list_cart">
                                                                        <td class="product-name">
                                                                            <a  v-bind:href="item.product_url">
                                                                                @{{ item.product_name }}
                                                                            </a>
                                                                            &nbsp;
                                                                            <strong class="product-quantity">× @{{ item.quantity }}</strong>
                                                                        </td>
                                                                        <td class="product-total">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                     @{{ item.product_specific_price }}
                                                                                </span>
                                                                            </span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            <tfoot>
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
                                                                <tr class="cart-subtotal">
                                                                    <th>Доставка</th>
                                                                    <td>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">
                                                                                @{{ carrier.format_price }}
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
                                                            </tfoot>
                                                        </table>
                                                        <button class="button alt" id="place_order" @click="checkout">
                                                            <img :class="{ 'active': checkout_wait}" class="ajax-loader" src="/site/images/ajax-loader.gif"/>
                                                            Оформить заказ
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- col-md-4 -->
                                        </div>
                                        <!-- row -->
                                    </div>
                                    <!-- checkout woocommerce-checkout -->
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <!-- shop-content -->
                        </article>
                    </section>

                </div>
            </div>

        </div>

        <script>
            var checkout = new Vue({
                el: '#checkout',
                data () {
                    return {
                        list_cart: [],
                        list_carriers: [],
                        list_payments: [],
                        addresses: <?=json_encode($user ? $user->addresses : []);?>,
                        cart_total: {
                            sum: 0,
                            quantity: 0
                        },
                        order_id: 0,

                        carrier: {},
                        payment: {},
                        address:{
                            id: 0,
                            city: '',
                            address: ''
                        },
                        user:{
                            phone: '{{$user->phone ?? '' }}',
                            email: '{{$user->email ?? '' }}',
                            name:  '{{$user->name  ?? '' }}'
                        },
                        comment: '',

                        checkout_wait: false
                    }
                },
                methods:{
                    selectedCarrier(item){
                        this.carrier = item;
                    },
                    selectedPayment(item){
                        this.payment = item;
                    },
                    listCart(){
                        axios.post('/list-cart').then((res)=>{
                            this.list_cart = res.data;
                        });
                    },
                    cartTotal(){
                        axios.get('/cart-total/' + (this.carrier.id ? this.carrier.id : 0)).then((res)=>{
                            this.cart_total.sum = res.data.sum;
                            this.cart_total.quantity = res.data.quantity;
                        });
                    },
                    cartSave(product_id, quantity){
                        axios.post('/cart-save', {product_id: product_id, quantity: quantity}).then((res)=>{
                            if(res.data)
                            {
                                this.listCart();
                                this.cartTotal();
                                header.listCart();
                                header.cartTotal();
                            }
                        });
                    },
                    async checkout(){
                        if(!this.checkout_wait)
                        {
                            this.checkout_wait = true;

                            var data = {
                                carrier_id: this.carrier.id,
                                payment_id: this.payment.id,
                                address: {
                                    id:      this.address.id,
                                    city:    this.address.city,
                                    address: this.address.address
                                },
                                user: {
                                    phone: this.user.phone,
                                    email: this.user.email,
                                    name:  this.user.name
                                },
                                comment: this.comment
                            };


                            await axios.post('/checkout', data).then((res) => {
                                var data = res.data;
                                if (data) {
                                    this.order_id = data['order_id'];
                                    if (this.order_id) {
                                        this.list_cart = [];
                                        Swal({
                                            type: 'success',
                                            html: 'Номер заказа <a style="font-size: 20px;" href="/order-history/' + this.order_id + '">№:' + this.order_id + '</a>',
                                            title: 'Ваш заказ успешно оформлен'
                                        });
                                    }
                                }
                            }).catch(function (error) {
                               swalErrors(error.response.data.errors, 'Пожалуйста! Заполните все обязательные поля');
                            });

                            this.checkout_wait = false;
                        }
                    }
                },
                watch: {
                    carrier: {
                        handler: function (val, oldVal) {
                            this.cartTotal();
                        },
                        deep: true
                    }
                },
                created(){

                    setTimeout(function() {
                        $(".phone-mask").mask("+7(999) 999-9999");
                    }, 2000);

                    this.listCart();
                    this.cartTotal();

                    axios.post('/list-carriers').then((res)=>{
                        if(res.data){
                            this.list_carriers = res.data;
                            this.carrier = this.list_carriers[0];
                        }
                    });

                    axios.post('/list-payments').then((res)=>{
                        if(res.data)
                            this.list_payments = res.data;
                        this.payment = this.list_payments[0];
                    });

                }
            });
        </script>

@endsection