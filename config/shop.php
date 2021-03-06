<?php
    return [
        'attributes_path_file' => 'uploads/attributes/',
        'products_path_file' => 'uploads/products/',
        'carriers_path_file' => 'uploads/carriers/',
        'payments_path_file' => 'uploads/payments/',
        'categories_path_file' => 'uploads/categories/',
        'sliders_path_file' => 'uploads/sliders/',
        'news_path_file' => 'uploads/news/',

        'social_network' => [
            'instagram'       => 'https://www.instagram.com/ecokidskaz',
            'instagram_token' => '4272330333.1677ed0.fab43606c8994e73817ebb22029734de'
        ],
        'number_phones' => [
            [
                'format' => '+7 (747) 223-31-91',
                'number' => '+77472233191',
                'contactType' => 'Менеджер'
            ]
        ],
        'address' => [
            [
                "streetAddress" => "",
                "addressLocality" => "г. Алматы",
                "postalCode" => "050004",
                "addressCountry" => "Казахстан",
                "working_hours" => "c 10:00 до 19:00 Без выходных!",
                "geo" => [
                    "latitude" => "43.261664",
                    "longitude" => "76.935906"
                ]
            ]
        ],
        'site_email' => 'info@ecokids.kz',
        'logo' => env('APP_URL')    . '/site/images/logo.png',
        'favicon' => env('APP_URL') . '/favicon.ico'
    ];
