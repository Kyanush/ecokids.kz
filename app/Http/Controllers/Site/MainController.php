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
        $seo = Seo::main();
        return view('site.main',
            [
                'listSlidersHomePage'          => ServiceSlider::listSlidersHomePage(),
                'seo'                          => $seo,
            ]);
    }

}
