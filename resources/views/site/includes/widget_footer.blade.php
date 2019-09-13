<aside id="woocommerce_products-6" class="widget footer-widget woocommerce widget_products col-md-3 col-sm-6 col-xs-6">
    <h2 class="widget-title">{{ $title }}</h2>
    <ul class="product_list_widget">

        @foreach($products as $product)
            <li>
                <a href="{{ $product->detailUrlProduct() }}">

                    <img class="lazyload attachment-thumbnail size-thumbnail"
                         title="{{ $product->name }}"
                         alt="{{ $product->name }}"
                         width="70"
                         height="70"
                         src="{{ $product->pathPhoto(true) }}"/>

                    <span class="product-title">{{ $product->name }}</span>
                </a>
                <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">
                         {{ \App\Tools\Helpers::priceFormat($product->getReducedPrice()) }}
                    </span>
                </span>
            </li>
        @endforeach

    </ul>
</aside>
