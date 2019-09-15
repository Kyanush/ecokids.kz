@extends('layouts.site')

@section('title',       $news->title )
@section('description', strip_tags($news->preview_text))
@section('keywords',    '')

@section('content')

        @php $breadcrumbs = [
           [
               'title' => 'Главная',
               'link'  => '/',
           ],
           [
               'title' => 'Новости',
               'link'  => route('news_list')
           ],
           [
               'title' => $news->title,
               'link'  => ''
           ]
       ];
       @endphp

        <div class="container post-container">
            <div class="row">
                <div class="col-md-12">
                    @include('site.includes.breadcrumb', ['breadcrumbs' => $breadcrumbs])
                    <h1>{{ $news->title }}</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <p><i class="fa fa-clock-o firm-red"></i> {{ \App\Tools\Helpers::ruDateFormat($news->created_at) }}</p>
                            {!! $news->detail_text !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
