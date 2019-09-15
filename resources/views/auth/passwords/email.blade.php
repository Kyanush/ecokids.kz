@extends('layouts.site')

<?php $title = 'Забыли пароль?';?>
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
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form id="form" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <p>Введите адрес электронной почты Вашей учетной записи. <br/>Нажмите кнопку Вперед, чтобы получить пароль по электронной почте.</p>
                                <p>
                                    <label>E-Mail:</label>
                                    <input class="input" id="email" type="email" name="email" value="{{ old('email') }}" required>
                                </p>
                                <p>
                                    <button type="submit" class="btn btn-firm">Продолжить</button>
                                </p>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
