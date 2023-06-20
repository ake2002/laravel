<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login2_Controller;
use App\Http\Controllers\Tulip_Controller;
use App\Http\Controllers\BoshuController;

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

Route::get('/op_home','App\Http\Controllers\BoshuController@index')->name('recruit.index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/tulip', function () {
    return view('tulipex');
});
Route::get('/login2', [login2_Controller::class, 'login2']); 

Route::get('/boshu', function () {
    return view('boshu');
});
Route::resource('boshu',BoshuController::class);


