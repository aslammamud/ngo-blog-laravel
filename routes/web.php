<?php

use App\Http\Controllers\Admin\UserCrudController;
use App\Models\Article;
use Illuminate\Http\Request;
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


Route::post('/admin/unapproved/{id}/approved', function (Request $request) {
    // dd($request);

    Article::where('id', '=', $request->id)->update(array('approved' => true));
    
    return response()->json(true);
});

// Route::post('admin/register', [UserCrudController::class, 'registerNewUser'])->name('admin.register');


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