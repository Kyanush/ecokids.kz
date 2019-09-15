@extends('layouts.site')

<?php $title = 'Сброс пароля';?>
@section('title',       $title)
@section('description', $title)
@section('keywords',    $title)

@section('content')

            <?php $breadcrumbs = [
                [
                    'title' => 'Главная',
                    'link'  => '/'
                ],
                [
                    'title' => $title,
                    'link'  => ''
                ]
            ];?>

            <div class="container post-container">
                <div class="row">
                    <div class="col-md-12">
                        @include('site.includes.breadcrumb', ['breadcrumbs' => $breadcrumbs])
                        <h1>{{ $title }}</h1>
                        <div class="row">
                            <div class="col-md-3">
                                @include('site.includes.menu_left_my_account')
                            </div>
                            <div class="col-md-9">
                                <form id="form" method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <p>
                                        <label>Адрес электронной почты:</label>
                                        <input class="input" type="email"  name="email" value="{{ $email ?? old('email') }}" required autofocus/>
                                    </p>
                                    <p>
                                        <label>Пароль:</label>
                                        <input class="input" type="password" name="password" required/>
                                    </p>
                                    <p>
                                        <label>Подтвердите Пароль:</label>
                                        <input class="input" type="password" name="password_confirmation" required/>
                                    </p>
                                    <p>
                                        <button type="submit" class="btn">Сброс пароля</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection