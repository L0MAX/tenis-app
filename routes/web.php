<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FixturesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpponentController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [LoginController::class, 'logout']);

//Opponent
Route::get('/partner', [OpponentController::class, 'index'])->name('choose.opponent');
Route::post('/save', [OpponentController::class, 'store'])->name('store.opponent');

//Opponent
Route::get('/my_team', [FixturesController::class, 'index'])->name('my.fixture');

Route::prefix('admin')->group(function (){
    Route::get('/', [AdminLoginController::class, 'adminLoginForm'])->name('login.admin');
    Route::post('/',[AdminLoginController::class, 'adminLogin'])->name('admin.login');
    Route::get('/home', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AdminLoginController::class, 'adminLogout'])->name('admin.logout');

    Route::get('/teams', [AdminDashboardController::class, 'admin_fixtures'])->name('admin.fixtures');

});
