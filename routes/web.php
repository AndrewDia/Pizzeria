<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/menu', 'PagesController@menu')->name('menu');
Route::get('/promotions', 'PagesController@promotions')->name('promotions');
Route::get('/create', 'PagesController@create')->name('create');
Route::get('/basket', 'PagesController@basket')->name('basket');
Route::post('/add/{amount}', [PagesController::class, 'add'])->name('add');
Route::post('/ordered', [PagesController::class, 'order'])->name('order');
