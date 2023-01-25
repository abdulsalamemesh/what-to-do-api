<?php

use App\Http\Livewire\Tasks\Create;
use App\Http\Livewire\WhatToDo;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('setLocal/{locale}', function ($locale) {

    if (!in_array($locale, ['en', 'de'])) {
        abort(400);
    }

    Session::put('applocale', $locale);

    return redirect()->back();
})->name('setLocal');
Route::get('/', WhatToDo::class)->name('home');
Route::get('/tasks/create', Create::class)->name('tasks.create');
Route::view('/documentation', 'documentation')->name('documentation');
Route::view('/about', 'about')->name('about');
