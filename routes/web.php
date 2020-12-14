<?php

// Route::view('/', 'landing-page');
//Route::view('/shop', 'ShopCon');

//Route::view('/cart', 'cart');

use Gloudemans\Shoppingcart\Facades\Cart;

Route::view('/checkout', 'checkout');

Route::get('/', 'LandingPageController@index')->name('landing-page.index');
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');

Route::get('/empty', function (){
  Cart::instance('saveForLater')->destroy();
});
