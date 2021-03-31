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

// Route::get('/', function () {
//     return view('auth.login');
// });
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::view('/', 'dashboard.index')->middleware('auth')->name('dashboard');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::prefix('songs')->name('songs.')->group(function () {
    Route::get('/', [App\Http\Controllers\SongController::class, 'index']);
    Route::get('/create', [App\Http\Controllers\SongController::class, 'create'])->name('create');
    Route::post('/', [App\Http\Controllers\SongController::class, 'store'])->name('store');
    Route::get('/{song}', [App\Http\Controllers\SongController::class, 'edit'])->name('edit');
    Route::put('/{song}', [App\Http\Controllers\SongController::class, 'update'])->name('update');
    Route::delete('/delete/{song}', [App\Http\Controllers\SongController::class, 'destroy'])->name('destroy');
});
