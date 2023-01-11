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

// Example Routes
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/enseignant/list', [App\Http\Controllers\EnseignatsController::class, 'index'])->name('enseignantlist');
Route::get('/enseignant/add', [App\Http\Controllers\EnseignatsController::class, 'create'])->name('enseignantadd');
Route::post('/enseignant/addfun', [App\Http\Controllers\EnseignatsController::class, 'store'])->name('enseignantstore');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('userprofile');
Route::post('/profile/edit', [App\Http\Controllers\ProfileController::class, 'update'])->name('profileedit');
