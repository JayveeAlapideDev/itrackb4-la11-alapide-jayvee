<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/whoami', function (){
    return 'Jayvee Alapide | 2023-71200 | Block 4C | ITRACKB4 Laravel 12';
});


Route::get('/products/filter/{Brand?}', [ProductController::class, 'filter'])
->name('products.filter');

Route::resource('products', ProductController::class);
