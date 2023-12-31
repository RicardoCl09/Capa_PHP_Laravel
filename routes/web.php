<?php

use Illuminate\Support\Facades\Route;
// Agregamos los controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LectorBlogController;

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
    return view('auth/login');
});

Auth::routes();

Route::get('Admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('Adminhome');
// Route::get('/LectorBlogs', [App\Http\Controllers\LectorBlogController::class, 'index'])->name('LectorBlogs');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('/roles', RolController::class);
    Route::resource('/usuarios', UsuarioController::class);
    Route::resource('/blogs', BlogController::class);
    Route::resource('/LectorBlogs', LectorBlogController::class);
});