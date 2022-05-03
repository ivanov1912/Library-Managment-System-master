<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use function PHPUnit\Framework\once;

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
    return view('layouts.app');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    require_once __DIR__ . '/admin/admin.php';
});

Route::group(['middleware' => ['auth', 'user']], function () {
    require_once __DIR__ . '/visitor/visitor.php';
});

Route::group(['middleware' => ['auth']], function () {
    require_once __DIR__ . './share/share.php';
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
