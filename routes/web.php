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

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::resource('', 'App\Http\Controllers\CursoController')
    ->names('curso')
    ->parameter('','id');

Route::resource('contacto','App\Http\Controllers\ContactoController')
    ->names('contacto')
    ->parameter('contacto','');

