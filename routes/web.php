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

Route::get('/', function () {
    return view('welcome');
});

Route::get('input', function (){
    return view('form');
});

Route::controller(\App\Http\Controllers\CrawlController ::class)->group(function(){
    Route::post('form', 'create')->name('crawl');
    Route::get('index', 'index')->name('index');
});
