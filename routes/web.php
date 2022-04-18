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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index']);
Route::post('/logincheck', [HomeController::class, 'loginCheck'])->name('loginCheck');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/explore', [HomeController::class, 'explore'])->name('explore');
Route::post('/sendmessage', [HomeController::class, 'sendMessage'])->name('sendMessage');
Route::get('/product/{id}/{slug}', [HomeController::class, 'product'])->name('product');
Route::get('/categoryproducts/{id}/{slug}', [HomeController::class, 'categoryproducts'])->name('categoryProducts');

Route::get('/addtocart/{id}', [HomeController::class, 'addToCart'])->name('addToCart');

Route::post('/getproduct', [HomeController::class, 'getProduct'])->name('getProduct');
Route::get('/productlist/{search}', [HomeController::class, 'productList'])->name('productList');




Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminHome')->middleware('auth');
Route::get('/admin/login', [App\Http\Controllers\Admin\HomeController::class, 'login'])->name('adminLogin');
Route::post('/admin/logincheck', [App\Http\Controllers\Admin\HomeController::class, 'loginCheck'])->name('adminLoginCheck');
Route::get('/admin/logout', [App\Http\Controllers\Admin\HomeController::class, 'logout'])->name('adminLogout');


Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){


    Route::get('/profile', [App\Http\Controllers\UserController::class, 'index'])->name('profile.show');

});


Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){


    Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('profile.show');
    Route::get('/myreviews', [App\Http\Controllers\UserController::class, 'myReviews'])->name('myReviews');
    Route::get('/delete', [App\Http\Controllers\UserController::class, 'destroyReview'])->name('destroyReview');

});


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

        Route::get('create/{product_id}',[App\Http\Controllers\Admin\ImageController::class,'create'])->name('adminImageAdd');
        Route::post('store/{product_id}',[App\Http\Controllers\Admin\ImageController::class,'store'])->name('adminImageStore');
        Route::get('show/{product_id}',[App\Http\Controllers\Admin\ImageController::class,'show'])->name('adminImageShow');
        Route::get('delete/{id}/{product_id}',[App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('adminImageDestroy');
    });

    Route::prefix('setting')->group(function(){

        Route::get('/',[App\Http\Controllers\Admin\SettingController::class,'index'])->name('adminSetting');
        Route::post('/update',[App\Http\Controllers\Admin\SettingController::class,'update'])->name('adminSettingUpdate');
    });

    Route::prefix('message')->group(function(){

        Route::get('/',[App\Http\Controllers\Admin\MessageController::class,'index'])->name('adminMessage');
        Route::get('edit/{id}',[App\Http\Controllers\Admin\MessageController::class,'edit'])->name('adminMessageEdit');
        Route::post('update/{id}',[App\Http\Controllers\Admin\MessageController::class,'update'])->name('adminMessageUpdate');
        Route::get('show',[App\Http\Controllers\Admin\MessageController::class,'show'])->name('adminMessageShow');
        Route::get('delete/{id}',[App\Http\Controllers\Admin\MessageController::class,'destroy'])->name('adminMessageDestroy');
    });


    Route::prefix('review')->group(function(){

        Route::get('/',[App\Http\Controllers\Admin\ReviewController::class,'index'])->name('adminReview');
        Route::post('update/{id}',[App\Http\Controllers\Admin\ReviewController::class,'update'])->name('adminReviewUpdate');
        Route::get('edit/{id}',[App\Http\Controllers\Admin\ReviewController::class,'edit'])->name('adminReviewEdit');
        Route::get('delete/{id}',[App\Http\Controllers\Admin\ReviewController::class,'destroy'])->name('adminReviewDestroy');
    });


    Route::prefix('faq')->group(function(){

        Route::get('/',[App\Http\Controllers\Admin\FaqController::class,'index'])->name('adminFaq');
        Route::post('create',[App\Http\Controllers\Admin\FaqController::class,'create'])->name('adminFaqCreate');
        Route::get('add',[App\Http\Controllers\Admin\FaqController::class,'add'])->name('adminFaqAdd');
        Route::get('edit/{id}',[App\Http\Controllers\Admin\FaqController::class,'edit'])->name('adminFaqEdit');
        Route::post('update/{id}',[App\Http\Controllers\Admin\FaqController::class,'update'])->name('adminFaqUpdate');
        Route::get('show',[App\Http\Controllers\Admin\FaqController::class,'show'])->name('adminFaqShow');
        Route::get('delete/{id}',[App\Http\Controllers\Admin\FaqController::class,'destroy'])->name('adminFaqDestroy');
    });




});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
