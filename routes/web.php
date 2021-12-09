<?php

use App\Http\Controllers\HomeController;
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
    return view('welcome');
});
//adres cubuguna /anasayfa yazarsa home a yönlendir
Route::redirect('/anasayfa', '/home');

//tek dosya çağıracaksak
//name icine yazdığımızı view(index.blade.php) den name yazarak çağırabiliriz
Route::get('/', function () {
    return view('home.index', ['name' => 'BAHADIR KELEŞOĞLU']);
});

//home controller içindeki birden fazla view çağıracaksak
Route::get('/home', [HomeController::class, 'index'])->name('HomeController');
Route::get('/about', [HomeController::class, 'about'])->name('about');

//Login
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');

//login check
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');

Route::get('/admin/logout',[HomeController::class, 'logout'])->name('admin_logout');

//Admin


//test objesini çağırdık id ve name parametresini adres satırına yazicaz ../test/5/ali gibi
//en sağda hangi parametre string hangisi int türünde onu yazdık
//Homecontroller classındaki test routerını tanımladık


//login halledince // ları kaldır ve uri: içindeki admin / ları sil yapamazsan 10.video

Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/', [\App\Http\Controllers\admin\HomeController::class, 'index'])->name('admin_home');
    //Category
    Route::get('category', [\App\Http\Controllers\admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\admin\CategoryController::class, 'show'])->name('admin_category_show');

    //Product
    Route::prefix('product')->group(function() {

        Route::get('/', [\App\Http\Controllers\admin\ProductController::class, 'index'])->name('admin_products');
        Route::get('create', [\App\Http\Controllers\admin\ProductController::class, 'create'])->name('admin_product_add');
        Route::post('store', [\App\Http\Controllers\admin\ProductController::class, 'store'])->name('admin_product_store');
        Route::get('edit/{id}', [\App\Http\Controllers\admin\ProductController::class, 'edit'])->name('admin_product_edit');
        Route::post('update/{id}', [\App\Http\Controllers\admin\ProductController::class, 'update'])->name('admin_product_update');
        Route::get('delete/{id}', [\App\Http\Controllers\admin\ProductController::class, 'destroy'])->name('admin_product_delete');
        Route::get('show', [\App\Http\Controllers\admin\ProductController::class, 'show'])->name('admin_product_show');

    });

    //Image
    Route::prefix('image')->group(function() {
        Route::get('create/{product_id}', [\App\Http\Controllers\admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{product_id}', [\App\Http\Controllers\admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{product_id}', [\App\Http\Controllers\admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\admin\ImageController::class, 'show'])->name('admin_image_show');

    });



});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
