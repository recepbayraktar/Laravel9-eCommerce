<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminHome')->middleware('auth');
Route::get('/admin/login', [App\Http\Controllers\Admin\HomeController::class, 'login'])->name('adminLogin');
Route::post('/admin/logincheck', [App\Http\Controllers\Admin\HomeController::class, 'loginCheck'])->name('adminLoginCheck');
Route::get('/admin/logout', [App\Http\Controllers\Admin\HomeController::class, 'logout'])->name('adminLogout');
Route::post('/logincheck', [HomeController::class, 'loginCheck'])->name('loginCheck');
Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::middleware('auth')->prefix('admin')->group(function (){

    Route::get('/category',[App\Http\Controllers\Admin\CategoryController::class,'index'])->name('adminCategory');
    Route::get('/category/add',[App\Http\Controllers\Admin\CategoryController::class,'add'])->name('adminCategoryAdd');
    Route::post('/category/create',[App\Http\Controllers\Admin\CategoryController::class,'create'])->name('adminCategoryCreate');
    Route::post('/category/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'update'])->name('adminCategoryUpdate');
    Route::get('/category/edit/{id}',[App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('adminCategoryEdit');
    Route::get('/category/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('adminCategoryDestroy');
    Route::get('/category/show',[App\Http\Controllers\Admin\CategoryController::class,'show'])->name('adminCategoryShow');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
