<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OfferController;
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


//update cars
Route::get('/cars/update_cars/{id}', [CarsController::class, 'index_update'])->name('update_cars')->middleware('admin');

Route::post('/cars/update_cars', [CarsController::class, 'update'])->name('updated_cars')->middleware('admin');


//offers
Route::get('/offer', [OfferController::class, 'index'])->name('offer');


//adding cars
Route::get('/car_add', [CarsController::class, 'index_store'])->name('car_add')->middleware('admin');
Route::post('/car_add', [CarsController::class, 'store'])->name('car_add')->middleware('admin');


//delete cares
Route::get('/cars/delete_cars/{id}', [CarsController::class, 'destroy'])->name('delete_cars')->middleware('admin');



//images

Route::get('/image_upload/{id}', [ImageController::class, 'index'])->name('image_index')->middleware('admin');
Route::post('/image_upload', [ImageController::class, 'store'])->name('image_upload')->middleware('admin');

});