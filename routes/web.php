<?php

use App\Models\City;
use App\Models\Neighborhoods;
use App\Models\Post;
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
Route::resource('as-admin', 'App\Http\Controllers\Admin\AdminController');
Route::resource('reports', 'App\Http\Controllers\ReportController');



Route::get('/', function () {
    $city = City::all();
    $neighborhoods = Neighborhoods::all();
    $data= [$city , $neighborhoods];
    return view('welcome' ,compact('data'));
});

Auth::routes();

Route::get('/location/create', [App\Http\Controllers\LocationController::class, 'create']);
Route::get('/location/get', [App\Http\Controllers\LocationController::class, 'fetch']);
Route::post('/update-profile/{id}', [App\Http\Controllers\ProfileController::class, 'update']);
Route::post('/location/create', [App\Http\Controllers\LocationController::class, 'store']);

Route::resource('category', 'App\Http\Controllers\CategoryController');
Route::resource('crafts', 'App\Http\Controllers\CraftController');
Route::resource('profile', 'App\Http\Controllers\ProfileController');
Route::resource('rate', 'App\Http\Controllers\RateController');

Route::get('/location/{user}', 'App\Http\Controllers\LocationController@create');
Route::get('/dashlogin', 'App\Http\Controllers\DashController@chooselogin')->name('dash.login');
Route::get('/dashreg', 'App\Http\Controllers\DashController@chooseregister')->name('dash.register');
Route::post('/location/{user}', 'App\Http\Controllers\LocationController@store');

Route::get('/userLocation', 'App\Http\Controllers\LocationController@loc');
Route::get('/current-locations/{user}', 'App\Http\Controllers\LocationController@currentLocation');
Route::delete('/location/{location}/delete', 'App\Http\Controllers\LocationController@destroy')->name('location.destroy');
Route::get('craftsman/{craftsman}/edit', 'App\Http\Controllers\CraftsmanController@edit')->name('craftsman.eded')->middleware('auth:craftsman');
Route::patch('craftsman/{craftsman}/update',  ['as' => 'craftsman.update', 'uses' => 'App\Http\Controllers\CraftsmanController@update'])->middleware('auth:craftsman');
Route::get('craftsman/{craftsman}/show',  'App\Http\Controllers\CraftsmanController@show');

Route::get('profile/edit', 'App\Http\Controllers\ProfileController@edit')->name('profile.ed')->middleware('auth:admin');
Route::get('/craftsmen', 'App\Http\Controllers\CraftsmanController@all');
Route::post('search', 'App\Http\Controllers\CraftsmanController@search')->name('search');
Route::get('/rates', 'App\Http\Controllers\RateController@make')->name('rating');
Route::delete('craft/{craft}/delete','App\Http\Controllers\CraftController@destroy');
Route::delete('craftsman/{craftsman}/delete','App\Http\Controllers\CraftsmanController@destroy')->name('craftsman.delete');
Route::get('/show-rates', 'App\Http\Controllers\Admin\AdminController@rate');
Route::get('/show-reports', 'App\Http\Controllers\Admin\AdminController@show_reports');
Route::resource('posts', 'App\Http\Controllers\PostController');
Route::get('craftsman_posts', 'App\Http\Controllers\PostController@craftsman_posts');

Route::get('/my_rate/{user}', 'App\Http\Controllers\RateController@myRate');

Route::resource('message', 'App\Http\Controllers\MessageController');
Route::post('createMessage','App\Http\Controllers\MessageController@createMessage')->name('createMessage');
Route::get('inbox','App\Http\Controllers\MessageController@inbox')->name('inbox');

Route::get('/current-crafts/{user}', 'App\Http\Controllers\RelatedCraftsController@currentcrafts');
Route::get('/add-new-craft/{user}', 'App\Http\Controllers\RelatedCraftsController@create');
Route::delete('crafts/{user}/delete/', 'App\Http\Controllers\RelatedCraftsController@destroy');
Route::post('/related-crafts/{user}', 'App\Http\Controllers\RelatedCraftsController@store');