
@extends('layouts.site')

@php
    $title = 'Страница не найдена';
@endphp

@section('title',    	$title)
@section('description', $title)
@section('keywords',    $title)

@section('content')

    <div class="error404">
        <header class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Страница не найдена</h1>
                    </div>
                </div>
            </div>
        </header>
        <div class="container post-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-page">
                        <h2>404</h2>
                        <svg>
                            <use xlink:href="#svg-close-light">
                                <svg viewBox="0 0 12 13" id="svg-close-light" fill="inherit" stroke="inherit"><path d="M6.22 4.751L2.578 1.11a1.179 1.179 0 0 0-1.661-.004 1.17 1.17 0 0 0 .003 1.66L4.563 6.41.92 10.05a1.179 1.179 0 0 0-.003 1.66 1.17 1.17 0 0 0 1.66-.003L6.22 8.066l3.642 3.642c.459.457 1.2.46 1.661.004a1.172 1.172 0 0 0-.003-1.661L7.877 6.409l3.643-3.643a1.18 1.18 0 0 0 .003-1.66 1.172 1.172 0 0 0-1.66.003L6.22 4.75v.001z" fill="inherit" fill-rule="evenodd" stroke="none"></path></svg>
                            </use>
                        </svg>
                        <p><a href="/">Перейти на главную страницу</a></p>
                        <!--
                        <div class="searchform-wrap">
                            <form role="search" method="get" class="searchform" action="https://parkofideas.com/kidz/demo1/">
                                <div>
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search …" value="" name="s"><input type="hidden" name="post_type" value="product"></label>
                                    <button type="submit" class="search-submit"><svg><use xlink:href="#svg-search"></use></svg></button>
                                </div>
                            </form>
                        </div>
                        --->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    <div class="error-404" style="text-align: center;padding: 40px 0;">
        <h1>Страница не найдена</h1>
        <h2 style="padding: 32px;font-size: 50px;">404</h2>
        <a href="/">Перейти на главную страницу</a>
    </div>-->

@endsection
