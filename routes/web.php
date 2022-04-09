<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Laravel\Jetstream\Rules\Role;

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
Route::post('/logincheck', [HomeController::class, 'loginCheck'])->name('loginCheck');
Route::get('/login', [HomeController::class, 'login'])->name('login');


Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminHome')->middleware('auth');
Route::get('/admin/login', [App\Http\Controllers\Admin\HomeController::class, 'login'])->name('adminLogin');
Route::post('/admin/logincheck', [App\Http\Controllers\Admin\HomeController::class, 'loginCheck'])->name('adminLoginCheck');
Route::get('/admin/logout', [App\Http\Controllers\Admin\HomeController::class, 'logout'])->name('adminLogout');


Route::middleware('auth')->prefix('admin')->group(function (){

    Route::prefix('category')->group(function() {
        Route::get('/', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('adminCategory');
        Route::get('/add', [App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('adminCategoryAdd');
        Route::post('/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('adminCategoryCreate');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('adminCategoryUpdate');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('adminCategoryEdit');
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('adminCategoryDestroy');
        Route::get('/show', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('adminCategoryShow');
    });

    Route::prefix('product')->group(function(){

        Route::get('/',[App\Http\Controllers\Admin\ProductController::class,'index'])->name('adminProduct');
        Route::post('create',[App\Http\Controllers\Admin\ProductController::class,'create'])->name('adminProductCreate');
        Route::get('add',[App\Http\Controllers\Admin\ProductController::class,'add'])->name('adminProductAdd');
        Route::get('edit/{id}',[App\Http\Controllers\Admin\ProductController::class,'edit'])->name('adminProductEdit');
        Route::post('update/{id}',[App\Http\Controllers\Admin\ProductController::class,'update'])->name('adminProductUpdate');
        Route::get('show',[App\Http\Controllers\Admin\ProductController::class,'show'])->name('adminProductShow');
        Route::get('delete/{id}',[App\Http\Controllers\Admin\ProductController::class,'destroy'])->name('adminProductDestroy');
    });

    Route::prefix('image')->group(function(){

        Route::get('/',[App\Http\Controllers\Admin\ImageController::class,'index'])->name('adminImage');
        Route::get('create/{product_id}',[App\Http\Controllers\Admin\ImageController::class,'create'])->name('adminImageCreate');
        Route::post('add/{product_id}',[App\Http\Controllers\Admin\ImageController::class,'add'])->name('adminImageAdd');
        Route::get('show',[App\Http\Controllers\Admin\ImageController::class,'show'])->name('adminImageShow');
        Route::get('delete/{id}/{product_id}',[App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('adminImageDestroy');
    });

    Route::prefix('setting')->group(function(){

        Route::get('/',[App\Http\Controllers\Admin\SettingController::class,'index'])->name('adminSetting');
        Route::post('/update',[App\Http\Controllers\Admin\SettingController::class,'update'])->name('adminSettingUpdate');
    });


});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
