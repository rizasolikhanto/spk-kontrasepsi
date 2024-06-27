<?php

use App\Http\Controllers\Admin\ContraceptivesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RulesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\ConsultationsController;
use App\Http\Controllers\User\DashboardUserController;
use App\Http\Controllers\WelcomeController;
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

// AUTHENTICATION
Route::get('/',[WelcomeController::class,'index']);
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/registerProcess',[AuthController::class,'registerProcess'])->name('registerProcess');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'processlogin']);
Route::get('/logout',[AuthController::class,'logout']);

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth:admin']
], function () {
    Route::get('dashboard',[DashboardController::class,'index'])->name('index');
    Route::resource('contraceptives', ContraceptivesController::class);
    Route::resource('rules', RulesController::class);
});

Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'middleware' => ['auth:web']
], function () {
    Route::get('dashboard',[DashboardUserController::class,'index'])->name('index');
    Route::get('consultations',[ConsultationsController::class,'index'])->name('index');
    Route::post('consultations',[ConsultationsController::class,'process'])->name('process');
    Route::get('consultations/result',[ConsultationsController::class,'result'])->name('result');
    Route::get('consultations/history',[ConsultationsController::class,'history'])->name('history');
});