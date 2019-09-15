@extends('layouts.site')

<?php $title = "Смена пароля"; ?>
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
               'title' => 'Личный кабинет',
               'link'  => '/my-account'
           ],
           [
               'title' => $title,
               'link'  => ''
           ]
       ];?>


       <div class="container post-container">
           <div class="row">
               <div class="col-md-12">
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
                   @include('site.includes.breadcrumb', ['breadcrumbs' => $breadcrumbs])
                   <h1>{{ $title }}</h1>
                   <div class="row">
                       <div class="col-md-3">
                           @include('site.includes.menu_left_my_account')
                       </div>
                       <div class="col-md-9">
                           <form action="" method="post" enctype="multipart/form-data">
                               @csrf
                               <table>
                                   <tr>
                                       <td>Пароль *</td>
                                       <td>
                                           <input class="input" type="password" name="password" value=""/>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>Подтвердите пароль *</td>
                                       <td>
                                           <input class="input" type="password" name="password_confirmation" value=""/>
                                       </td>
                                   </tr>
                                   <tr>
                                       <td colspan="2">
                                           <button class="btn">Изменить</button>
                                       </td>
                                   </tr>
                               </table>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>

@endsection