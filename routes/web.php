<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', function () {
    return view('index');
});


Route::group(['prefix' => 'bumps','middleware' => 'shopify.verify'], function(){
    Route::get('/', function(){return view('bumps.overview');});
    Route::get('/content', function(){return view('bumps.content');});
    Route::get('/installation', function(){return view('bumps.installation');});
    Route::get('/placements', function(){return view('bumps.placements');});
    Route::get('/product-feeds', function(){return view('bumps.product-feeds');});
    Route::get('/segments', function(){return view('bumps.segments');});
    Route::get('/widgets', function(){return view('bumps.widgets');});
    Route::get('/settings', function(){return view('bumps.settings');});
});