<?php

use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\App;
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
Route::get('/', HomeController::class)->name('home');
Route::resource('/tasks', TaskController::class)->only('create');
Route::get('/documentation', DocumentationController::class)->name('documentation');

