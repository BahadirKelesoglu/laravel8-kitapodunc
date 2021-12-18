<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
Route::redirect('/anasayfa', '/');

//tek dosya çağıracaksak
//name icine yazdığımızı view(index.blade.php) den name yazarak çağırabiliriz


//home controller içindeki birden fazla view çağıracaksak
Route::get('/', [HomeController::class, 'index'])->name('HomeController');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/book/{id}/{slug}', [HomeController::class, 'book'])->name('book');
Route::get('/categorybooks/{id}/{slug}', [HomeController::class, 'categorybooks'])->name('categorybooks');
Route::get('/blank', [HomeController::class, 'blank'])->name('blank');
Route::get('/addtocard/{id}', [HomeController::class, 'addtocard'])->name('addtocard');
Route::post('/getbook', [HomeController::class, 'getbook'])->name('getbook');
Route::get('/booklist/{search}', [HomeController::class, 'booklist'])->name('booklist');

Route::middleware(['auth'])->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
    Route::get('/myreviews', [UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}', [UserController::class, 'destroymyreview'])->name('user_review_delete');

});

Route::middleware(['auth'])->prefix('user')->namespace('user')->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('userprofile');
});

//Login
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');

//login check
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');

Route::get('/logout',[HomeController::class, 'logout'])->name('admin_logout');



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

    //Books
    Route::prefix('book')->group(function() {

        Route::get('/', [\App\Http\Controllers\admin\BookController::class, 'index'])->name('admin_books');
        Route::get('create', [\App\Http\Controllers\admin\BookController::class, 'create'])->name('admin_book_add');
        Route::post('store', [\App\Http\Controllers\admin\BookController::class, 'store'])->name('admin_book_store');
        Route::get('edit/{id}', [\App\Http\Controllers\admin\BookController::class, 'edit'])->name('admin_book_edit');
        Route::post('update/{id}', [\App\Http\Controllers\admin\BookController::class, 'update'])->name('admin_book_update');
        Route::get('delete/{id}', [\App\Http\Controllers\admin\BookController::class, 'destroy'])->name('admin_book_delete');
        Route::get('show', [\App\Http\Controllers\admin\BookController::class, 'show'])->name('admin_book_show');

    });

    //Books
    Route::prefix('message')->group(function() {

        Route::get('/', [\App\Http\Controllers\admin\MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}', [\App\Http\Controllers\admin\MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}', [\App\Http\Controllers\admin\MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [\App\Http\Controllers\admin\MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show', [\App\Http\Controllers\admin\MessageController::class, 'show'])->name('admin_message_show');

    });

    //Image
    Route::prefix('image')->group(function() {
        Route::get('create/{book_id}', [\App\Http\Controllers\admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{book_id}', [\App\Http\Controllers\admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{book_id}', [\App\Http\Controllers\admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\admin\ImageController::class, 'show'])->name('admin_image_show');

    });

    Route::prefix('review')->group(function() {
        Route::get('/', [\App\Http\Controllers\admin\ReviewController::class, 'index'])->name('admin_review');
        Route::post('update/{id}', [\App\Http\Controllers\admin\ReviewController::class, 'update'])->name('admin_review_update');
        Route::get('delete/{id}', [\App\Http\Controllers\admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
        Route::get('show/{id}', [\App\Http\Controllers\admin\ReviewController::class, 'show'])->name('admin_review_show');

    });

    #SETTİNG
    Route::get('setting', [\App\Http\Controllers\admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\admin\SettingController::class, 'update'])->name('admin_setting_update');

    #FAQ
    Route::prefix('faq')->group(function() {

        Route::get('/', [\App\Http\Controllers\admin\FaqController::class, 'index'])->name('admin_faq');
        Route::get('create', [\App\Http\Controllers\admin\FaqController::class, 'create'])->name('admin_faq_add');
        Route::post('store', [\App\Http\Controllers\admin\FaqController::class, 'store'])->name('admin_faq_store');
        Route::get('edit/{id}', [\App\Http\Controllers\admin\FaqController::class, 'edit'])->name('admin_faq_edit');
        Route::post('update/{id}', [\App\Http\Controllers\admin\FaqController::class, 'update'])->name('admin_faq_update');
        Route::get('delete/{id}', [\App\Http\Controllers\admin\FaqController::class, 'destroy'])->name('admin_faq_delete');
        Route::get('show', [\App\Http\Controllers\admin\FaqController::class, 'show'])->name('admin_faq_show');

    });

});








Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
