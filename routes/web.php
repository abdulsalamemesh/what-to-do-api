<?php

use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
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


Route::get('/', HomeController::class)->name('home');
Route::resource('/tasks', TaskController::class);
Route::get('/documentation', DocumentationController::class)->name('documentation');

Route::get('test', function () {
//    $translator = new \DeepL\Translator(env('DEEPL_API_KEY'));
//    foreach (\App\Models\Task::all() as $task) {
//        $task->task['es'] = $translator->translateText($task->task['en-US'], 'en', 'es', ['formality' => 'less'])->text;
//        $task->task['fr'] = $translator->translateText($task->task['en-US'], 'en', 'fr', ['formality' => 'less'])->text;
//        $task->task['it'] = $translator->translateText($task->task['en-US'], 'en', 'it', ['formality' => 'less'])->text;
//        $task->task['tr'] = $translator->translateText($task->task['en-US'], 'en', 'tr')->text;
//        $task->task['uk'] = $translator->translateText($task->task['en-US'], 'en', 'uk')->text;
//        $task->save();
//    }

   dd( \App\Models\Task::all(['task','category','person','cost','links'])->toJson());
});
