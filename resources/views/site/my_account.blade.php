@extends('layouts.site')

<?php $title = "Личный кабинет"; ?>
@section('title', $title)
@section('description', $title)
@section('keywords', $title)

@section('content')


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
                              <h2>Информация</h2>
                              <table class="table">
                                   <tbody>
                                         <tr>
                                            <td><b>Имя:</b></td>
                                            <td><a href="/account-edit">{{ $user->name }}</a></td>
                                            <td><a href="/account-edit">Изменить</a></td>
                                         </tr>
                                         <tr>
                                            <td><b>E-mail:</b></td>
                                            <td><a href="/account-edit">{{ $user->email }}</a></td>
                                            <td><a href="/account-edit">Изменить</a></td>
                                         </tr>
                                         <tr>
                                            <td><b>Телефон:</b></td>
                                            <td><a href="/account-edit">{{ $user->phone }}</a></td>
                                            <td><a href="/account-edit">Изменить</a></td>
                                         </tr>
                                   </tbody>
                              </table>
                       </div>
               </div>
           </div>
       </div>
   </div>

@endsection