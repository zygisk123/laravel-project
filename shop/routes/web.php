<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ORMController;
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
//     return view('welcome');
// });

Route::view('/','home');
Route::get('/add',[BrandController::class, 'getAllBrands']);
Route::post('add', [ShoeController::class, 'addShoe']);
Route::get('/all',[ShoeController::class, 'showAll']);
Route::get('/show/{id}',[ShoeController::class, 'showShoe']);
Route::get('/delete', [ShoeController::class, 'deleteShoe']);
Route::get('/edit/{id}', [ShoeController::class, 'showShoe']);
Route::get('/orm', [ORMController::class, 'ormRel']);
Route::post('/edited/{id}', [ShoeController::class, 'updateShoe']);
