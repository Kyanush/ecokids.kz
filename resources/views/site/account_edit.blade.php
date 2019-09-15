@extends('layouts.site')

<?php $title = 'Учетная запись';?>
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
                           <form action="" method="post" enctype="multipart/form-data" id="simplepage_form">
                               @csrf

                               <table>
                                   <tr>
                                       <td>
                                           <label>Имя *</label>
                                       </td>
                                       <td>
                                           <input class="input" type="text" name="account[name]" value="{{ $user->name }}" placeholder="Имя *">
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <label>Фамилия</label>
                                       </td>
                                       <td>
                                           <input class="input" type="text" name="account[surname]" value="{{ $user->surname }}" placeholder="Фамилия">
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <label>Email *</label>
                                       </td>
                                       <td>
                                           <input class="input" type="email" name="account[email]" value="{{ $user->email }}" placeholder="Электронная почта *">
                                       </td>
                                   </tr>
                                   <tr>
                                       <td>
                                           <label>Телефон *</label>
                                       </td>
                                       <td>
                                           <input class="input phone-mask" type="tel" name="account[phone]" value="{{ $user->phone }}" placeholder="Мобильный телефон *">
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