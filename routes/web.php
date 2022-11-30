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

//Route::get('/', function () {
//
//    $translator = new \DeepL\Translator(env('DEEPL_API_KEY'));
//
//    dd($translator->translateText('Learn how to play a new sport','en','de',['formality' => 'less'])->text);
//    return view('welcome');
//});

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');
