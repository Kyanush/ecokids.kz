
function addToCartSite(self, product_id, quantity){
    if(addToCart(product_id, quantity))
    {

        header.cartTotal();
        if(widget_shopping_cart)
        {
            widget_shopping_cart.listCart();
            widget_shopping_cart.cartTotal();
        }

        Swal.fire({
            title: 'Товар в корзине',
            type: 'success',
            showCancelButton: true,
            confirmButtonColor: '#4aa90b',
            cancelButtonColor: '#0089d0',
            confirmButtonText: 'Оформление заказа',
            cancelButtonText: 'Продолжить покупки',
        }).then((result) => {
            if (result.value) {
                location.href = '/cart';
            }
        });
    }
}

var quickView = new Vue({
    el: '#quickView',
    data: {
        product: [],
        detailUrlProduct: '',
        pathPhoto: '',
        price: 0,
        attributes: [],
        loading: false,
        quantity: 1,
        features_wishlist: false
    },
    methods:{
        quantityMinus(){
            if(this.quantity > 1)
                this.quantity--;
        },
        quantityPlus(){
            this.quantity++;
        },
        addToCartSite(){
            if(this.quantity > 0)
                addToCartSite(this, this.product.id, this.quantity);
        },
        productFeaturesWishlist(){
            productFeaturesWishlist(false, this.product.id);
            var self = this;
            setTimeout(function () {
                getProduct(this.product.id, function(result){
                    self.features_wishlist = result.features_wishlist;
                });
            }.bind(this), 1000);
        },
        getProduct(product_id)
        {
            this.loading = true;

            var self = this;
            getProduct(product_id, function(result){
                self.product          = result.product;
                self.detailUrlProduct = result.detailUrlProduct;
                self.pathPhoto        = result.pathPhoto;
                self.price            = result.price;
                self.attributes       = result.attributes;
                self.features_wishlist = result.features_wishlist;
                $('body').addClass('quickview-open');
                self.loading = false;
            });
        },
        close(){
            $('body').removeClass('quickview-open');
            this.product = [];
            this.detailUrlProduct = '';
            this.pathPhoto = '';
            this.price = 0;
            this.attributes = [];
        }
    }
});


var search = new Vue({
    el: '#search',
    data () {
        return {
            search: '',
            results: []
        }
    },
    methods:{
        productsSearch(){
            this.results = [];
            axios.get('/product-search?searchText=' + this.search).then((res)=>{
                this.results = res.data;
            });
        }
    },
    watch: {
        search: {
            handler: function (val, oldVal) {
                this.productsSearch();
            },
            deep: true
        }
    },
});

var header = new Vue({
    el: '#header',
    data () {
        return {
            product_features_compare_count: 0,
            product_features_wishlist_count: 0,
            cart_total: {
                sum: 0,
                quantity: 0
            }
        }
    },
    methods:{
        getProductFeaturesCompareCount(){
            axios.get('/product-features-compare-count').then((res)=>{
                this.product_features_compare_count = res.data;
            });
        },
        getProductFeaturesWishlistCount(){
            axios.get('/product-features-wishlist-count').then((res)=>{
                this.product_features_wishlist_count = res.data;
            });
        },
        cartTotal(){
            axios.get('/cart-total/0').then((res)=>{
                this.cart_total.sum      = res.data.sum;
                this.cart_total.quantity = res.data.quantity;
            });
        }
    },
    created(){
        this.getProductFeaturesCompareCount();
        this.getProductFeaturesWishlistCount();
        this.cartTotal();
    }
});


if($('#widget_shopping_cart').length > 0)
{
    var widget_shopping_cart = new Vue({
        el: '#widget_shopping_cart',
        data () {
            return {
                cart_total: {
                    sum: 0,
                    quantity: 0
                },
                list_cart:  null
            }
        },
        methods:{
            listCart(){
                axios.post('/list-cart').then((res)=>{
                    this.list_cart = res.data;
                });
            },
            cartTotal(){
                axios.get('/cart-total/0').then((res)=>{
                    this.cart_total.sum      = res.data.sum;
                    this.cart_total.quantity = res.data.quantity;
                });
            },
            deleteProductQuantity(product_id){
                axios.post('/cart-delete/' + product_id).then((res)=>{
                    if(res.data)
                    {
                        this.listCart();
                        this.cartTotal();
                        header.cartTotal();
                    }
                });
            },
        },
        created(){
            this.listCart();
            this.cartTotal();
        }
    });
}

function subscribe(self) {
    var formData = getFormData(self);
    ajaxLoader(self, true);

    $.ajax({
        type: 'POST',
        url: '/subscribe',
        data: formData,
        success: function(data) {
            if(data){
                var html  = formData['product_id'] ? 'Вы успешно подписались на уведомление о поступлении товара' : 'Вы успешно подписались на наши новости!';
                var title = formData['product_id'] ? 'Подписка на товары' : 'Подписка';
                Swal({
                    title: title,
                    html: html
                });
            }else{
                Swal({
                    type: 'error',
                    title: 'Подписка',
                    html: 'Вы уже подписаны!'
                });
            }
            clearFormData(self);
            ajaxLoader(self, false);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            if(jqXHR.status == 422)
            {
                swalErrors(jqXHR.responseJSON.errors, 'Ошибка 422');
            }
            ajaxLoader(self, false);
        }
    });
}


var callbackWait = false;
function callback(self){
    if(!callbackWait)
    {
        callbackWait = true;
        ajaxLoader(self, true);

        $.ajax({
            type: 'POST',
            url: '/callback',
            data: getFormData(self),
            success: function (data) {
                if (data) {
                    $("#callback .close-modal ").trigger('click');
                    Swal({
                        title: 'Обратный звонок',
                        html: 'Заявка отправлена! В ближайшее время с Вами свяжется наш менеджер.'
                    });
                    clearFormData(self);
                }

                callbackWait = false;
                ajaxLoader(self, false);

            },
            error: function (jqXHR, textStatus, errorThrown) {
                if (jqXHR.status == 422) {
                    swalErrors(jqXHR.responseJSON.errors, 'Ошибка 422');
                }

                callbackWait = false;
                ajaxLoader(self, false);
            }
        });
    }
}

$(document).ready(function() {



    /******************** Лайк отзыва ******************/
    $('.review_plus').on('click', function () {
        var review_id = $(this).attr('review_id');
        var this_var = $(this);

        productReviewSetLike(review_id, 1, function (data) {
            if(data)
            {
                $('#review_' + review_id).find('.review_plus').find('.review_number').html(data['likes_count']);
                $('#review_' + review_id).find('.review_minus').find('.review_number').html(data['dis_likes_count']);
                this_var.addClass('active');
                this_var.parent().find('.review_minus').removeClass('active');
            }
        });
    });
    $('.review_minus').on('click', function () {
        var review_id = $(this).attr('review_id');
        var this_var = $(this);

        productReviewSetLike(review_id, 0, function (data) {
            if(data)
            {
                $('#review_' + review_id).find('.review_plus').find('.review_number').html(data['likes_count']);
                $('#review_' + review_id).find('.review_minus').find('.review_number').html(data['dis_likes_count']);
                this_var.addClass('active');
                this_var.parent().find('.review_plus').removeClass('active');
            }
        });
    });
    /******************** Лайк отзыва ******************/

});




//Написать отзыв
function writeReview(self) {
    ajaxLoader(self, true);
    $.ajax({
        type: 'POST',
        url: '/write-review',
        data: getFormData(self),
        success: function(data) {
            if(data){
                Swal({
                    title: 'Написать отзыв',
                    html: 'Ваш отзыв успешно оставлен'
                });
                clearFormData(self);
            }else{
                alert('Ошибка БД');
            }
            ajaxLoader(self, false);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            if(jqXHR.status == 422)
            {
                swalErrors(jqXHR.responseJSON.errors, 'Ошибка 422');
            }
            ajaxLoader(self, false);
        }
    });
}

//Написать отзыв
function writeQuestion(self)
{
    ajaxLoader(self, true);
    $.ajax({
        type: 'POST',
        url: '/write-question',
        data: getFormData(self),
        success: function(data) {
            if(data){
                Swal({
                    title: 'Задать вопрос',
                    html: 'Ваш вопрос успешно задан'
                });
                clearFormData(self);
            }else{
                alert('Ошибка БД');
            }
            ajaxLoader(self, false);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            if(jqXHR.status == 422)
            {
                swalErrors(jqXHR.responseJSON.errors, 'Ошибка 422');
            }
            ajaxLoader(self, false);
        }
    });
}




var ocoWait = false;
function oneClickOrder(self) {

    if(!ocoWait)
    {
        ocoWait = true;
        ajaxLoader(self, true);

        $.ajax({
            type: 'POST',
            url: '/one-click-order',
            data: getFormData(self),
            success: function (data) {
                if (data) {
                    this.order_id = data['order_id'];
                    if (this.order_id) {
                        Swal({
                            type: 'success',
                            html: 'Номер заказа <a style="font-size: 20px;" href="/order-history/' + this.order_id + '">№:' + this.order_id + '</a>',
                            title: 'Ваш заказ успешно оформлен'
                        });
                    }
                } else {
                    alert('Ошибка БД');
                }

                $("#one-click-order .close-modal ").trigger('click');

                ocoWait = false;
                ajaxLoader(self, false);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                if (jqXHR.status == 422) {
                    swalErrors(jqXHR.responseJSON.errors, 'Ошибка 422');
                }
                ocoWait = false;
                ajaxLoader(self, false);
            }
        });

    }

}

function getFormData(self) {
    var data_array = $(self).serializeArray();
    var data = {};
    data_array.forEach(function (item, index) {
        data[item['name']] = item['value'];
    });
    return data;
}

function clearFormData(self){
    $(self).find('input[type=text]').val('');
    $(self).find('input[type=email]').val('');
    $(self).find('input[type=password]').val('');
    $(self).find('textarea').val('');
}

function ajaxLoader(self, active){
    if(active)
        $(self).find('.ajax-loader').addClass('active');
    else
        $(self).find('.ajax-loader').removeClass('active');
}
