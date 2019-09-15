<?php
/**
 * Created by PhpStorm.
 * User: Kyanush
 * Date: 27.12.2018
 * Time: 17:23
 */

namespace App\Tools;

use App\Services\ServiceCity;

class Seo
{

    public static function main(){

            $title       = "Интернет-магазин детских товаров в Казахстане EcoKids.kz";
            $description = "Интернет-магазин лучших детских товаров в Казахстане - Minim. Быстрая доставка в Алматы, Нур-Султан и другие города. Широкий ассортимент товаров по доступным ценам.";
            $keywords    = "интернет-магазин, детские, товары, казахстан, ecokids";

        return [
            'title'       => $title,
            'keywords'    => $keywords,
            'description' => $description
        ];
    }

    public static function productDetail($product, $category){

        $city     = ServiceCity::getCurrentCity();

        $siteName = env('APP_NAME');

        if($product->seo_keywords)
            $keywords = $product->seo_keywords;
        else
            $keywords =  "{$category->name}, {$product->name}, {$city->name}, Казахстан, купить, НИЗКАЯ ЦЕНА, Скидки, Акции, {$siteName}, характеристики, описание, отзывы, рейтинг, цена, обзоры";

        if($product->seo_description)
            $description = $product->seo_description;
        else
            $description = "{$product->name} в {$city->name}, Казахстан. Сравнивайте цены всех продавцов ✅, читайте характеристики и отзывы покупаталей ⭐, покупайте по самым выгодным условиям ⚡, заказывайте доставку в любой город Казахстана ☝.";

        return [
            'title'       => "{$product->name} купить в {$city->name}, Казахстан",
            'keywords'    => $keywords,
            'description' => $description
        ];
    }




    public static function catalog($category){

        $keywords = $description = $title = 'Каталог товаров';


        if($category)
        {
            $city = ServiceCity::getCurrentCity();

            if($category->seo_keywords)
                $keywords = $category->seo_keywords;
            else
                $keywords =  "{$category->name}, купить, казахстан, цена, характеристики, отзывы, обзоры, доставка";

            if($category->seo_description)
                $description = $category->seo_description;
            else
                $description = "✿ {$category->name} с доставкой в {$city->name} и другие города Казахстана теперь просто. "
                                . "Высокое качество ✅, доступные цены ⭐ и большой выбор товаров ⚡ в интернет-магазине EcoKids. "
                                . "Цены ⭐, характеристики ⚡, отзывы, обзоры, доставка ☝.";

            $title = "{$category->name} купить в {$city->name}, Казахстан";
        }

        return [
            'title'       => $title,
            'keywords'    => $keywords,
            'description' => $description
        ];
    }

    public static function pageSeo($page = ''){

        $keywords = 'товары, НИЗКАЯ ЦЕНА, Скидки, Акции, ' . env('APP_NO_URL') . ' интернет-магазин, купить, детские, товары, казахстан, ecokids';
        $description = env('APP_NO_URL') . ' – интернет-магазин детских товаров в Казахстане.';

        $page_date = [
            'compare-products' => [
                'title'       => 'Сравнение товаров',
                'keywords'    => $keywords,
                'description' => $description
            ],
            'contact' => [
                'title'       => 'Контакты',
                'keywords'    => $keywords,
                'description' => $description
            ],
            'guaranty' => [
                'title'       => 'Гарантия',
                'keywords'    => $keywords,
                'description' => $description
            ],
            'delivery-payment' => [
                'title'       => 'Доставка, оплата',
                'keywords'    => $keywords,
                'description' => $description
            ],
            'checkout' => [
                'title'       => 'Оформление заказа',
                'keywords'    => $keywords,
                'description' => $description
            ],
            'cart' => [
                'title'       => 'Корзина',
                'keywords'    => $keywords,
                'description' => $description
            ],
            'about' => [
                'title'       => 'О нас',
                'keywords'    => $keywords,
                'description' => $description
            ],
            'wishlist' => [
                'title'       => 'Мои закладки',
                'keywords'    => $keywords,
                'description' => $description
            ]
        ];

        return $page ? $page_date[$page] : $page_date;
    }

}
