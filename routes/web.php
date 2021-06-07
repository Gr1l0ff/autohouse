<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::group(['middleware' => 'prevent-back-history'],function(){
    


Route::get('/', function () {
    return view('home');
})->name('/');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');;
Route::post('/login', [LoginController::class, 'logIn'])->name('login')->middleware('guest');

Route::post('/logout', [LoginController::class, 'logOut'])->name('logout')->middleware( 'auth');

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register')->middleware('guest');


Route::get('/cars', [CarsController::class, 'index'])->name('cars')->middleware('admin');


Route::get('/car_add', [CarsController::class, 'index_store'])->name('car_add')->middleware('admin');


});