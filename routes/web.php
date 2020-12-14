<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

//Routes APP

// Autentication
Route::post('app/login', [AuthController::class, 'login']);
Route::get('app/logout', [AuthController::class, 'logout']);
Route::post('app/register', [AuthController::class, 'register']);
Route::post('app/verifyUserEmail', [AuthController::class, 'verifyUserEmail']);
Route::get('app/authorize/{driver}/redirect', [AuthController::class, 'redirectToProvider']);
Route::post('app/authorize/{driver}/callback', [AuthController::class, 'handleProviderCallback']);

// Users
Route::post('app/users/updateProfile', [UserController::class, 'updateProfile']);
Route::post('app/users/updateAvatar', [UserController::class, 'updateAvatar']);

Route::get('/', [AuthController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');
