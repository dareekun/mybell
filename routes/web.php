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
    return redirect('/home');
});

Auth::routes([
    'register' => false,
    'reset' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/process', [App\Http\Controllers\AdminController::class, 'process'])->name('process');

Route::get('/changep', [App\Http\Controllers\AdminController::class, 'changep']);
Route::get('/changes', [App\Http\Controllers\AdminController::class, 'changes']);
Route::post('/changex', [App\Http\Controllers\AdminController::class, 'exclude_change'])->name('changexclude');
Route::post('/audio-change', [App\Http\Controllers\AdminController::class, 'audio_change'])->name('changesound');
Route::post('/newpassword', [App\Http\Controllers\AdminController::class, 'newpassword'])->name('proccesspassword');
