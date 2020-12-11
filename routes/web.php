<?php

// Route::view('/', 'landing-page');
//Route::view('/shop', 'ShopCon');

Route::view('/cart', 'cart');
Route::view('/checkout', 'checkout');

Route::get('/', 'LandingPageController@index')->name('landing-page.index');
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
