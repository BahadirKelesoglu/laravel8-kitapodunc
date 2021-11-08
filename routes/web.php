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
//test objesini çağırdık id ve name parametresini adres satırına yazicaz ../test/5/ali gibi
//en sağda hangi parametre string hangisi int türünde onu yazdık
//Homecontroller classındaki test routerını tanımladık

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
