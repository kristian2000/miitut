<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContractController;

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
Route::post('app/users/completeProfile', [UserController::class, 'completeProfile']);
Route::post('app/users/updateAvatar', [UserController::class, 'updateAvatar']);
Route::post('app/users/uploadDNI', [UserController::class, 'uploadDNI']);
Route::get('app/users/getInfoDNI', [UserController::class, 'getInfoDNI']);

// Categories
Route::get('app/categories/getWithSubcategories', [CategoryController::class, 'getCategoriesAndSubcategories']);
Route::get('app/categories/{category}/subcategories', [CategoryController::class, 'getSubcategoryByCategory']);

// CategoriesUser
Route::get('app/categoriesUser', [CategoryUserController::class, 'getCategoriesUser']);
Route::get('app/categoriesUser/pending', [CategoryUserController::class, 'getCategoryPending']);
Route::get('app/categoriesUser/{category}', [CategoryUserController::class, 'showCategoriesUser']);
Route::put('app/categoriesUser/{category}', [CategoryUserController::class, 'updateCategoryUser']);
Route::post('app/categoriesUser/{category}/completeProfileWork', [CategoryUserController::class, 'completeProfileWork']);
Route::post('app/categoriesUser/{category}/changeTimeAvailable', [CategoryUserController::class, 'changeTimeAvailable']);
Route::post('app/categoriesUser/getCategoriesUserWork', [CategoryUserController::class, 'getCategoriesUserWork']);

// Contract
Route::get('app/contracts', [ContractController::class, 'getAll']);
Route::post('app/contracts/create', [ContractController::class, 'store']);

// Route::post('app/categoriesUser', [])

Route::get('/', [AuthController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');
