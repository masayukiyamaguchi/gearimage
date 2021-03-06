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
Route::get('/',"Homepage@index")->name("home");
Route::post('/gear_search/',"GearSearch@index")->name("gear_search");
Route::post('/gear_preview/',"GearPreview@index")->name("gear_preview");