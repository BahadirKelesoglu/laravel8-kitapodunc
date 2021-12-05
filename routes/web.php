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
    Route::get('category', [\App\Http\Controllers\admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::post('category/update', [\App\Http\Controllers\admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\admin\CategoryController::class, 'show'])->name('admin_category_show');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
