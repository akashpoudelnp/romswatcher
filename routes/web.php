<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPagesController;
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

Route::get('/', [MainPagesController::class, 'index']);
Route::get('/devices', [MainPagesController::class, 'devices']);
Auth::routes(['register' => false]);
Route::resource('phones','PhonesController');
Route::resource('roms','RomsController');
Route::resource('kernels','KernelsController');

Route::get('/admin', 'HomeController@index');
Route::get('/admin/addphone', 'HomeController@addphone');
Route::get('/admin/addrom', 'HomeController@addrom');
Route::get('/admin/addkernel', 'HomeController@addkernel');
Route::get('/admin/viewphone', 'HomeController@viewphone');
Route::get('/admin/viewrom', 'HomeController@viewrom');
Route::get('/admin/viewkernel', 'HomeController@viewkernel');

Route::get('/admin/editphone/{id}', 'HomeController@editphone');
Route::get('/admin/editrom/{id}', 'HomeController@editrom');

Route::get('autocomplete', 'MainPagesController@autocomplete')->name('autocomplete');
Route::get('autocompletek', 'MainPagesController@autocompletek')->name('autocompletek');

