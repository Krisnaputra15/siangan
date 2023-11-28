<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function() {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::post('/login/process', 'loginProcess')->name('loginProcess');
    Route::post('/register/process', 'registerProcess')->name('registerProcess');
    Route::get('/logout', 'logout')->name('logout');
});

Route::middleware('isLogin')->group(function() {
    Route::controller(HomeController::class)->group(function() {
        Route::get('/home', 'home')->name('home');
    });
});
