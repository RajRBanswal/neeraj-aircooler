<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
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
//     return view('home');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::POST('/store_logo', [SettingController::class, 'store_logo'])->name('store_logo');
Route::get('/taxes',[SettingController::class, 'Taxes']);
Route::post('/store_taxes',[SettingController::class, 'Store_Taxes']);
Route::get('editData/{id}',[SettingController::class, 'editData']);
Route::get('/all-supplier',[SettingController::class, 'all_Supplier']);

