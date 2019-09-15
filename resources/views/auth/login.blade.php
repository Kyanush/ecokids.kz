@extends('layouts.site')

<?php $title = "Авторизация"; ?>
@section('title', $title)
@section('description', $title)
@section('keywords', $title)


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
            'title' => 'Логин',
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
                                        <a class="tab-header active">Авторизация</a>
                                        /
                                        <a href="{{ route('register') }}" class="tab-header">Регистрация</a>
                                    </h1>
                                    <ul class="wrap">
                                        <li class="login-wrap active">
                                            <form class="woocommerce-form woocommerce-form-login login" action="{{ route('login') }}" id="form" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="username">
                                                        E-Mail:
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input class="woocommerce-Input woocommerce-Input--text input-text {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                           required
                                                           autofocus
                                                           type="text"
                                                           name="email"
                                                           value="{{ old('email') }}"/>
                                                </p>
                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="password">
                                                        Пароль
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input class="woocommerce-Input woocommerce-Input--text input-text {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                           id="password"
                                                           type="password"
                                                           name="password"
                                                           required>
                                                </p>
                                                <p class="form-row">
                                                    <!--
                                                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                                        <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">
                                                        <i></i> Remember me
                                                    </label>
                                                    --->
                                                    <button type="submit" class="woocommerce-Button button" name="login" value="Login">
                                                        Войти
                                                    </button>
                                                </p>
                                                <div class="clear"></div>
                                                <p class="woocommerce-LostPassword lost_password">
                                                    <a href="{{ route('password.request') }}">Забыли пароль?</a>
                                                </p>
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
