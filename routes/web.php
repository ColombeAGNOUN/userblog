<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
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

Route::get('/', [UserController::class,'firstpage']);
Route::get('/reagir', [ArticleController::class,'reagir']);
Route::get('/register', [UserController::class,'register']);
Route::post('/register', [UserController::class,'registerPost']);
Route::get('/login', [UserController::class,'login']);
Route::post('/login', [UserController::class,'loginPost']);
Route::get('/content', [UserController::class,'content']);
Route::post('/ajout', [ArticleController::class,'ajout']);
Route::get('/profil', [UserController::class,'profil']);
Route::get('/publications', [UserController::class,'publications']);
Route::get('/users{id}', [UserController::class,'users']);
Route::post('/logout', [UserController::class,'logout']);









