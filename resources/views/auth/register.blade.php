@extends('layouts.site')

@section('title', 'Регистрация в интернет магазине ' . env('APP_NAME'))
@section('description', 'Регистрация в интернет магазине ' . env('APP_NAME'))
@section('keywords', 'Регистрация в интернет магазине ' . env('APP_NAME'))

@section('content')


    <?php $breadcrumbs = [
        [
            'title' => 'Главная',
            'link'  => '/'
        ],
        [
            'title' => 'Личный кабинет',
            'link'  => '/my-account'
        ],
        [
            'title' => 'Регистрация',
            'link'  => ''
        ]
    ];?>



    <div class="container post-container">

        <div class="row">
            <div class="col-md-12">

                @include('site.includes.breadcrumb', ['breadcrumbs' => $breadcrumbs])

                <section role="main" class="post-open">
                    <article id="post-8" class="post-8 page type-page status-publish hentry">
                        <div class="shop-content">
                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <div id="customer_login">
                                    <h1>
                                        <a href="{{ route('login') }}" class="tab-header">Авторизация</a>
                                        /
                                        <a class="tab-header active">Регистрация</a>
                                    </h1>
                                    <ul class="wrap">
                                        <li class="login-wrap active">

                                            <form class="woocommerce-form woocommerce-form-login login" action="{{ route('register') }}" method="post" enctype="multipart/form-data" id="simplepage_form">
                                                @csrf

                                                <div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <p>
                                                        Если Вы уже зарегистрированы, перейдите на страницу <a href="{{ route('login') }}">входа в систему</a>.
                                                    </p>
                                                </div>

                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label>
                                                        E-Mail:
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="email"
                                                           placeholder="Электронная почта *"
                                                           name="email"
                                                           value="{{ old('email') }}"
                                                           class="woocommerce-Input woocommerce-Input--text input-text"/>
                                                </p>

                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label>
                                                        Пароль:
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input
                                                            placeholder="Повторите пароль *"
                                                            class="woocommerce-Input woocommerce-Input--text input-text"
                                                            type="password"
                                                            name="password"/>
                                                </p>

                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label>
                                                        Повторите пароль:
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input
                                                            placeholder="Повторите пароль *"
                                                            class="woocommerce-Input woocommerce-Input--text input-text"
                                                            type="password"
                                                            name="password_confirmation"
                                                            required/>
                                                </p>

                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label>
                                                        Имя:
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input
                                                            type="text"
                                                            name="name"
                                                            class="woocommerce-Input woocommerce-Input--text input-text"
                                                            value="{{ old('name') }}"
                                                            placeholder="Имя *">
                                                </p>

                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label>
                                                        Телефон:
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input
                                                            type="tel"
                                                            name="phone"
                                                            class="woocommerce-Input woocommerce-Input--text input-text"
                                                            class="phone-mask"
                                                            value="{{ old('phone') }}"
                                                            placeholder="Мобильный телефон *">
                                                </p>

                                                <div class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <button type="submit" class="btn btn-firm">Продолжить</button>
                                                </div>

                                            </form>

                                        </li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </article>
                </section>
            </div>
        </div>

    </div>







@endsection
