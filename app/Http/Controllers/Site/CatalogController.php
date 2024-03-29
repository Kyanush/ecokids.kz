<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Services\ServiceCategory;
use App\Services\ServiceCity;
use App\Services\ServiceProduct;
use App\Services\ServiceYouWatchedProduct;
use App\Tools\Helpers;
use App\Tools\Seo;

class CatalogController extends Controller
{

    public function c($cCategory){

        //категория
        $category = Category::isActive()->where('url', $cCategory)->firstOrFail();
        //город
        $currentCity = ServiceCity::getCurrentCity();
        //seo
        $seo = Seo::catalog($category);

        return view('mobile.c', [
            'category'    => $category,
            'currentCity' => $currentCity,
            'seo'         => $seo
        ]);

    }

    public function catalogCity($city, $category){
        return $this->catalogMain($city, $category);
    }

    public function catalog($category){
        return $this->catalogMain('almaty', $category);
    }

    public function catalogMain($city, $category_code){
        //категория
        $category = Category::isActive()->where('url', $category_code)->firstOrFail();

        $filters = Helpers::filtersProductsDecodeUrl($category_code);

        $filters['active'] = 1;

        $orderBy = Helpers::getSortedToFilter($filters);
        $column  = $orderBy['sorting_product']['column'];
        $order   = $orderBy['sorting_product']['order'];

        $priceMinMax = ServiceProduct::priceMinMax(['category' => $filters['category'], 'active' => 1]);
        $productsAttributesFilters = ServiceProduct::productsAttributesFilters($filters);




        $products = Product::productInfoWith()
            ->filters($filters)
            ->filtersAttributes($filters)
            ->OrderBy($column, $order)
            ->paginate(12)->onEachSide(1);

        //seo
        $seo = Seo::catalog($category);
        if(!$seo)
            return abort(404);

        //город
        $currentCity = ServiceCity::getCurrentCity();
        if(!$currentCity)
            return abort(404);

        //Хлебная крошка
        $breadcrumbs = ServiceCategory::breadcrumbCategories($category->parent_id, $category->name);


        return view('site.catalog', [
            'products' => $products,
            'filters' => $filters,
            'category' => $category,
            'priceMinMax' => $priceMinMax,
            'productsAttributesFilters' => $productsAttributesFilters,
            'seo' => $seo,
            'currentCity' => $currentCity,
            'breadcrumbs' => $breadcrumbs
        ]);
    }


}
