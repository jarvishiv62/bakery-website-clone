<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Products Page
Route::get('/products', function () {
    return view('products');
})->name('products');

// Route::get('/product/{slug}', function ($slug) { 
//     return view('product', compact('slug')); 
// })->name('product.show');

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');  

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');  

//catering page
Route::get('/catering', function () {
    return view('catering');
})->name('catering');  

// Cart Page
Route::get('/cart', function () {
    return view('cart');
})->name('cart');  

// Account Page
Route::get('/account', function () {
    return view('account');
})->name('account'); 

// Checkout Page (commented out)
// Route::get('/checkout', function () { 
//     return view('checkout'); 
// })->name('checkout');

