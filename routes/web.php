<?php

use App\Http\Controllers\AdminPanel\AboutController;
use App\Http\Controllers\AdminPanel\AuthController;
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

// Route::get('/{pathMatch}', function(){
//     return view('welcome');
// })->where('all', '^(?!api).*$')->where('pathMatch', '.*');





Route::namespace('AdminPanel')->name('admin-panel.')->prefix('admin-panel')->group(function () {
    Route::get('/', [AuthController::class, 'loginForm'])->name('loginForm');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware(['auth'])->group(function () {
        Route::prefix('about')->name('about.')->group(function () {
            Route::get('/index', [AboutController::class, 'index'])->name('index');
            Route::get('/create', [AboutController::class, 'create'])->name('create');
        });
    });
});

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');
