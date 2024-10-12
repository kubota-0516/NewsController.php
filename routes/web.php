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

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\Admin\ProfileController; //ここで、どこから情報を引っ張ってくるのか指示する
Route::controller(ProfileController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function() {
//                                                            ^^^^^^^^^^^^^^ name('admin.') で name の先頭に admin. をつけて、、、
//                                           ^^^^^^^^^^^^^^^ prefix('admin') で URL の先頭に /admin/ をつけて、、、
    Route::get('profile/create', 'add')->name('profile.add');
//             ^^^^^^^^^^^^^^^^ アクセス URL を指定する
    Route::get('profile/edit', 'edit')->name('profile.edit');
//                                      ^^^^^^^^^^^^^^^^^ admin.news.edit 
//              ^^^^^^^^^^^^ /admin/profile/edit にアクセスしたとき
    Route::post('profile/create', 'create')->name('profile.create');//13の課題で追加
    Route::post('profile/edit', 'update')->name('profile.update');//13の課題で追加
    Route::get('profile', 'index')->name('profile.index');
    Route::get('profile/delete', 'delete')->name('profile.delete');
    // Route::get('profile/index', 'edit')->name('profile.edit');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\Admin\NewsController;
Route::controller(NewsController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('news/create', 'add')->name('news.add');
    Route::post('news/create','create')->name('news.create');
    Route::get('news', 'index')->name('news.index');
    Route::get('news/edit', 'edit')->name('news.edit');
    Route::post('news/edit', 'update')->name('news.update');
    Route::get('news/delete', 'delete')->name('news.delete');
    
});

use App\Http\Controllers\NewsController as PublicNewsController; //上のと似ているけどas～があるので別物
Route::get('/', [PublicNewsController::class, 'index'])->name('news.index');

use App\Http\Controllers\ProfileController as PublicProfileController; //上のと似ているけどas～があるので別物
Route::get('/profile', [PublicProfileController::class, 'index'])->name('profile.index');
