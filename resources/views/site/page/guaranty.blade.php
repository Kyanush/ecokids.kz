@extends('layouts.site')

@section('title',       $seo['title'])
@section('description', $seo['description'])
@section('keywords',    $seo['keywords'])

@section('content')

       <?php $breadcrumbs = [
           [
               'title' => 'Главная',
               'link'  => '/'
           ],
           [
               'title' => $seo['title'],
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
                           'title' => $seo['title'],
                           'link'  => ''
                       ]
                   ];?>
                   @include('site.includes.breadcrumb', ['breadcrumbs' => $breadcrumbs])
                   <h1>{{ $seo['title'] }}</h1>
                   <div class="row">
                       <div class="col-md-12">
                           text
                       </div>
                   </div>
               </div>
           </div>
       </div>



@endsection
