@extends('layouts.site')

@section('title',       'Полезные статьи')
@section('description', 'Полезные статьи')
@section('keywords',    'Полезные статьи')

@section('content')


    <header class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    @include('site.includes.breadcrumb', ['breadcrumbs' => [
                        [
                            'title' => 'Главная',
                            'link'  => '/',
                        ],

                        [
                            'title' => 'Полезные статьи',
                            'link'  => ''
                        ]
                    ]])
                    <h1>Полезные статьи</h1>
                </div>
            </div>
        </div>
    </header>


    <div class="container blog-container archive">
        <div class="row">


            <div class="main-col col-md-9">
                <section role="main">
                    <div class="grid masonry">

                        @foreach($news as $key => $item)
                            @if($key == 0 or $key == 3)
                                <div class="row">
                                <div class="col-md-12">
                            @endif
                            <article class="post-80 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized masonry-brick">
                                <div class="post-img">
                                    <a href="{{ $item->detailUrl() }}">
                                        <img src="{{ $item->pathImage(true) }}"
                                             class="attachment-medium size-medium wp-post-image"
                                             width="360"
                                             height="361"
                                             title="{{ $item->title }}"
                                             alt="{{ $item->title }}"/>
                                    </a>
                                </div>
                                <header class="post-header">
                                    <h2>
                                        <a href="{{ $item->detailUrl() }}">
                                            {{ $item->title }}
                                        </a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-date">
                                            {{ \App\Tools\Helpers::ruDateFormat($item->created_at) }}
                                        </span>
                                        <!--
                                        <ul class="post-categories">
                                            <li>
                                                <a href="https://parkofideas.com/kidz/demo1/category/uncategorized/" title="View all posts in Uncategorized">
                                                    Uncategorized
                                                </a>
                                            </li>
                                        </ul>
                                        --->
                                    </div>
                                </header>
                                <div class="post-except">
                                    <p>{!! $item->preview_text !!}</p>
                                </div>
                            </article>
                            @if(count($news) == $key + 1 or $key == 2)
                                </div>
                                </div>
                            @endif
                        @endforeach

                        <nav class="woocommerce-pagination">
                            {!! $news->links("pagination::default") !!}
                        </nav>

                        <div class="post-sizer masonry-brick"></div>
                    </div>
                    <div class="clearfix"></div>
                </section>
            </div>
            <!--
            <div class="col-md-3">
                <aside id="sidebar">
                    <aside id="ideapark_latest_posts_widget-3" class="widget custom-latest-posts-widget"><h2 class="widget-title">Latest Posts</h2>			<ul>
                            <li>
                                <div class="post-img">
                                    <a href="https://parkofideas.com/kidz/demo1/few-quips-galvanized-the-mock-jury-box/" rel="bookmark">
                                        <img width="70" height="70" src="https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/12/0b39e430882505.5637b77946c01-70x70.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/12/0b39e430882505.5637b77946c01-70x70.jpg 70w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/12/0b39e430882505.5637b77946c01-360x361.jpg 360w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/12/0b39e430882505.5637b77946c01-588x590.jpg 588w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/12/0b39e430882505.5637b77946c01-425x425.jpg 425w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/12/0b39e430882505.5637b77946c01-241x241.jpg 241w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/12/0b39e430882505.5637b77946c01-142x142.jpg 142w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/12/0b39e430882505.5637b77946c01-249x250.jpg 249w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/12/0b39e430882505.5637b77946c01-53x53.jpg 53w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/12/0b39e430882505.5637b77946c01-140x140.jpg 140w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/12/0b39e430882505.5637b77946c01-210x210.jpg 210w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/12/0b39e430882505.5637b77946c01-555x557.jpg 555w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/12/0b39e430882505.5637b77946c01.jpg 729w" sizes="(max-width: 70px) 100vw, 70px">								</a>
                                </div>
                                <div class="post-content">
                                    <a href="https://parkofideas.com/kidz/demo1/few-quips-galvanized-the-mock-jury-box/" rel="bookmark">
                                        <h4>Few quips galvanized the mock jury box</h4>
                                    </a>
                                    <span class="post-meta post-date">September 1, 2016</span>
                                </div>
                            </li>
                            <li>
                                <div class="post-img">
                                    <a href="https://parkofideas.com/kidz/demo1/a-quick-movement-of-the-enemy-will-jeopardize-six-gunboats/" rel="bookmark">
                                        <img width="70" height="70" src="https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/09/7240c6228ef757f9551ed11014fb4f6a-70x70.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/09/7240c6228ef757f9551ed11014fb4f6a-70x70.jpg 70w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/09/7240c6228ef757f9551ed11014fb4f6a-425x425.jpg 425w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/09/7240c6228ef757f9551ed11014fb4f6a-241x241.jpg 241w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/09/7240c6228ef757f9551ed11014fb4f6a-140x140.jpg 140w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/09/7240c6228ef757f9551ed11014fb4f6a-210x210.jpg 210w" sizes="(max-width: 70px) 100vw, 70px">								</a>
                                </div>
                                <div class="post-content">
                                    <a href="https://parkofideas.com/kidz/demo1/a-quick-movement-of-the-enemy-will-jeopardize-six-gunboats/" rel="bookmark">
                                        <h4>A quick movement of the enemy will jeopardize six gunboats</h4>
                                    </a>
                                    <span class="post-meta post-date">September 1, 2016</span>
                                </div>
                            </li>
                            <li>
                                <div class="post-img">
                                    <a href="https://parkofideas.com/kidz/demo1/brawny-gods-just-flocked-up-to-quiz-and-vex-him/" rel="bookmark">
                                        <img width="70" height="70" src="https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/09/5be1c438590861.5767fb873e249-e1482328204182-70x70.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/09/5be1c438590861.5767fb873e249-e1482328204182-70x70.jpg 70w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/09/5be1c438590861.5767fb873e249-e1482328204182-425x425.jpg 425w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/09/5be1c438590861.5767fb873e249-e1482328204182-241x241.jpg 241w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/09/5be1c438590861.5767fb873e249-e1482328204182-140x140.jpg 140w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/09/5be1c438590861.5767fb873e249-e1482328204182-210x210.jpg 210w" sizes="(max-width: 70px) 100vw, 70px">								</a>
                                </div>
                                <div class="post-content">
                                    <a href="https://parkofideas.com/kidz/demo1/brawny-gods-just-flocked-up-to-quiz-and-vex-him/" rel="bookmark">
                                        <h4>Brawny gods just flocked up to quiz and vex him</h4>
                                    </a>
                                    <span class="post-meta post-date">September 1, 2016</span>
                                </div>
                            </li>
                            <li>
                                <div class="post-img">
                                    <a href="https://parkofideas.com/kidz/demo1/all-questions-asked-by-five-watch-experts-amazed-the-judge/" rel="bookmark">
                                        <img width="70" height="70" src="https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/12/Illustrations_Portfolio-on-Behance-2016-09-01-17-00-28-70x70.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/12/Illustrations_Portfolio-on-Behance-2016-09-01-17-00-28-70x70.jpg 70w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/12/Illustrations_Portfolio-on-Behance-2016-09-01-17-00-28-425x425.jpg 425w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/12/Illustrations_Portfolio-on-Behance-2016-09-01-17-00-28-241x241.jpg 241w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/12/Illustrations_Portfolio-on-Behance-2016-09-01-17-00-28-140x140.jpg 140w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/12/Illustrations_Portfolio-on-Behance-2016-09-01-17-00-28-210x210.jpg 210w" sizes="(max-width: 70px) 100vw, 70px">								</a>
                                </div>
                                <div class="post-content">
                                    <a href="https://parkofideas.com/kidz/demo1/all-questions-asked-by-five-watch-experts-amazed-the-judge/" rel="bookmark">
                                        <h4>All questions asked by five watch experts amazed the judge</h4>
                                    </a>
                                    <span class="post-meta post-date">September 1, 2016</span>
                                </div>
                            </li>
                            <li>
                                <div class="post-img">
                                    <a href="https://parkofideas.com/kidz/demo1/a-very-bad-quack-might-jinx-zippy-fowls/" rel="bookmark">
                                        <img width="70" height="70" src="https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/09/Illustrations-for-children-book.-on-Behance-2016-09-01-16-51-39-70x70.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/09/Illustrations-for-children-book.-on-Behance-2016-09-01-16-51-39-70x70.jpg 70w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/09/Illustrations-for-children-book.-on-Behance-2016-09-01-16-51-39-425x425.jpg 425w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/09/Illustrations-for-children-book.-on-Behance-2016-09-01-16-51-39-241x241.jpg 241w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/09/Illustrations-for-children-book.-on-Behance-2016-09-01-16-51-39-140x140.jpg 140w, https://parkofideas.com/kidz/demo1/wp-content/uploads/2016/09/Illustrations-for-children-book.-on-Behance-2016-09-01-16-51-39-210x210.jpg 210w" sizes="(max-width: 70px) 100vw, 70px">								</a>
                                </div>
                                <div class="post-content">
                                    <a href="https://parkofideas.com/kidz/demo1/a-very-bad-quack-might-jinx-zippy-fowls/" rel="bookmark">
                                        <h4>A very bad quack might jinx zippy fowls</h4>
                                    </a>
                                    <span class="post-meta post-date">September 1, 2016</span>
                                </div>
                            </li>
                        </ul>
                    </aside><aside id="recent-comments-4" class="widget widget_recent_comments"><h2 class="widget-title">Recent Comments</h2><ul id="recentcomments"><li class="recentcomments"><span class="comment-author-link">admin</span> on <a href="https://parkofideas.com/kidz/demo1/product/stokke-scoot-stroller-in-slate-blue/#comment-3">Stokke Scoot Stroller in Slate Blue</a></li><li class="recentcomments"><span class="comment-author-link"><a href="https://wordpress.org/" rel="external nofollow" class="url">A WordPress Commenter</a></span> on <a href="https://parkofideas.com/kidz/demo1/the-quick-brown-fox-jumps-over-a-lazy-dog/#comment-2">The quick, brown fox jumps over a lazy dog</a></li></ul></aside></aside>
            </div>
            -->
        </div>
    </div>


@endsection
