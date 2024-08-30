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

use App\Http\Controllers\Admin\NewsController;
Route::controller(NewsController::class)->prefix('admin')->group(function() {
    Route::get('news/create', 'add');
});

use App\Http\Controllers\Admin\ProfileController;
Route::controller(ProfileController::class)->prefix('admin')->group(function() {
    Route::get('profile/create', 'add');
    Route::get('profile/edit', 'edit');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(NewsController::class)->prefix('admin')->group(function() {
    Route::get('news/create', 'add')->middleware('auth');
});
// ＝＝＝続き＝＝＝
// $ cd ~/environment/mynews
// $ php artisan migrate
// 上記のコマンドで、ControllerやView、Routingの設定まで自動でおこなってくれます。
// の結果↓
// ec2-user:~/environment/mynews (main) $ php artisan migrate

//    Illuminate\Database\QueryException 

//   SQLSTATE[HY000] [1045] Access denied for user 'techboost'@'localhost' (using password: YES) (SQL: select * from information_schema.tables where table_schema = mynews and table_name = migrations and table_type = 'BASE TABLE')

//   at vendor/laravel/framework/src/Illuminate/Database/Connection.php:760
//     756▕         // If an exception occurs when attempting to run a query, we'll format the error
//     757▕         // message to include the bindings with SQL, which will make this exception a
//     758▕         // lot more helpful to the developer instead of just the database's errors.
//     759▕         catch (Exception $e) {
//   ➜ 760▕             throw new QueryException(
//     761▕                 $query, $this->prepareBindings($bindings), $e
//     762▕             );
//     763▕         }
//     764▕     }

//       +36 vendor frames 
//   37  artisan:35
//       Illuminate\Foundation\Console\Kernel::handle(Object(Symfony\Component\Console\Input\ArgvInput), Object(Symfony\Component\Console\Output\ConsoleOutput))