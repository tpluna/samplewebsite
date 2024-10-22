<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/store', function () {
    return view('store', [
        'products' => [
            [
                'product_id' => '1',
                'product_name' => 'monitors'
            ],
            [
                'product_id' => '2',
                'product_name' => 'keyboard'
            ],
            [
                'product_id' => '3',
                'product_name' => 'Processors'
            ],
            [
                'product_id' => '4',
                'product_name' => 'Motherboards'
            ]
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
