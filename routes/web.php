<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\calculretraite;
use App\Http\Controllers\create;
use App\Http\Controllers\loginController;
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

Route::get('/',[create::class,'create'])->name('create');
Route::post('/store',[create::class,'store'])->name('retraite.store');
Route::get('/premier',[HomeController::class,'home'])->name('home');
Route::get('/calcul',[calculretraite::class,'calcul'])->name('calculer.retraite');
Route::post('/resultat',[HomeController::class,'calculerRetraite'])->name('resultat');




Route::get('/afficher',[loginController::class,'affich'])->name('login.afficher');
Route::post('/login',[loginController::class,'login'])->name('login');


Route::get('/logout',[loginController::class,'logout'])->name('logout');

Route::get('/plus',[calculretraite::class,'plus'])->name('plus.info');
Route::delete('/infos/{info}',[calculretraite::class,'destroy'])->name('infos.destroy');