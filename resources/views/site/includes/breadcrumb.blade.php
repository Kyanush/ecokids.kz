<nav class="woocommerce-breadcrumb">
    <ul itemscope itemtype="http://schema.org/BreadcrumbList">
        @foreach($breadcrumbs as $key => $item)
            @if(!empty($item['link']))
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="{{ $item['link'] }}">
                        <span itemprop="name">{{ $item['title'] }}</span>
                        <meta itemprop="position" content="{{ $key + 1 }}"/>
                    </a>
                </li>
            @else
                <li class="active">
                   {{ $item['title'] }}
                </li>
            @endif
        @endforeach
    </ul>
</nav>

@include('schemas.breadcrumb_list', ['breadcrumbs' => $breadcrumbs])

@include('site.includes.message')
