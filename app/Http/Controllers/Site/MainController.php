<?php
namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Services\ServiceSlider;
use App\Models\Product;
use App\Services\ServiceYouWatchedProduct;
use App\Tools\Helpers;
use App\Tools\Seo;

class MainController extends Controller
{

    public function main(){

        //Вы смотрели
        $youWatchedProducts = ServiceYouWatchedProduct::listProducts();

        //Популярные товары
        $popularProducts = Product::productInfoWith()
                            ->limit(9)
                            ->where('stock', '>', 0)
                            ->OrderBy('view_count', 'DESC')
                            ->get();

        //Новинки товаров
        $novinkiProducts = Product::productInfoWith()
                            ->limit(9)
                            ->where('stock', '>', 0)
                            ->OrderBy('id', 'DESC')
                            ->get();


        $seo = Seo::main();


        return view('site.main',
            [
                'listSlidersHomePage'          => ServiceSlider::listSlidersHomePage(),
                'seo'                          => $seo,
                'youWatchedProducts'           => $youWatchedProducts,
                'popularProducts'              => $popularProducts,
                'novinkiProducts'              => $novinkiProducts
            ]);
    }

}
