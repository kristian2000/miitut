<?php

use App\Events\ContractEvent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MailController;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\ContractNotification;
use App\Models\Contract;
use Illuminate\Support\Facades\Broadcast;
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
Route::post('/app/login', [AuthController::class, 'login']);
Route::get('/app/logout', [AuthController::class, 'logout']);
Route::post('/app/register', [AuthController::class, 'register']);
Route::post('/app/verifyUserEmail', [AuthController::class, 'verifyUserEmail']);
Route::get('/app/authorize/{driver}/redirect', [AuthController::class, 'redirectToProvider']);
Route::get('/authorize/{driver}/callback', [AuthController::class, 'handleProviderCallback']);
Route::post('/app/auth/sendResetPassword', [AuthController::class, 'sendResetPassword']);
Route::post('/app/auth/resetPassword', [AuthController::class, 'resetPassword']);

// Users
Route::post('/app/users/updateProfile', [UserController::class, 'updateProfile']);
Route::post('/app/users/completeProfile', [UserController::class, 'completeProfile']);
Route::post('/app/users/updateAvatar', [UserController::class, 'updateAvatar']);
Route::post('/app/users/uploadDNI', [UserController::class, 'uploadDNI']);
Route::get('/app/users/getInfoDNI', [UserController::class, 'getInfoDNI']);
Route::post('/app/users/reportUser', [UserController::class, 'reportUser']);
Route::post('/app/users/supportMessage', [UserController::class, 'supportMessage']);

Route::get('/app/users/notifications', [UserController::class, 'listNotifications']);
Route::get('/app/users/notifications/markAsReads', [UserController::class, 'notificationsMarkAsReads']);
// Route::delete('/app/users/notifications/{notification}', [UserController::class, 'destroyNotification']);
Route::get('/app/users/paymentMethods', [UserController::class, 'getPaymentMethods']);
Route::post('/app/users/paymentMethods', [UserController::class, 'createPaymentMethod']);
Route::delete('/app/users/paymentMethods', [UserController::class, 'removePaymentMethod']);

Route::post('/app/users/accountRetirement', [UserController::class, 'accountRetirement']);
Route::put('/app/users/accountRetirement', [UserController::class, 'updateAccountRetirement']);
Route::get('/app/users/accountRetirement', [UserController::class, 'showAccountRetirement']);

// Categories
Route::get('/app/categories/getWithSubcategories', [CategoryController::class, 'getCategoriesAndSubcategories']);
Route::get('/app/categories/{category}/subcategories', [CategoryController::class, 'getSubcategoryByCategory']);

// CategoriesUser
Route::get('/app/categoriesUser', [CategoryUserController::class, 'getCategoriesUser']);
Route::get('/app/categoriesUser/pending', [CategoryUserController::class, 'getCategoryPending']);
Route::get('/app/categoriesUser/{category}', [CategoryUserController::class, 'showCategoriesUser']);

Route::put('/app/categoriesUser/{category}', [CategoryUserController::class, 'updateCategoryUser']);
Route::post('/app/categoriesUser', [CategoryUserController::class, 'createCategoryUser']);

Route::post('/app/categoriesUser/{category}/completeProfileWork', [CategoryUserController::class, 'completeProfileWork']);
Route::post('/app/categoriesUser/getCategoriesUserWork', [CategoryUserController::class, 'getCategoriesUserWork']);
Route::get('/app/categoriesUser/qualifications/{categoryUser}', [CategoryUserController::class, 'getCategoryUserQualifications']);

// Contract
Route::get('/app/contracts', [ContractController::class, 'getAll']);
Route::post('/app/contracts/create', [ContractController::class, 'store']);
Route::get('/app/contracts/rejectContract/{contract}', [ContractController::class, 'rejectContract']);
Route::get('/app/contracts/acceptContract/{contract}', [ContractController::class, 'acceptContract']);
Route::post('/app/contracts/cancelContract/{contract}', [ContractController::class, 'cancelContract']);
Route::post('/app/contracts/finalize/{contract}', [ContractController::class, 'finalizeContract']);
Route::post('/app/contracts/meditation/{contract}', [ContractController::class, 'meditationContract']);
Route::post('/app/contracts/qualify/{contract}', [ContractController::class, 'qualifyContract']);
Route::delete('/app/contracts/{contract}', [ContractController::class, 'destroyContract']);

//Ads | Offer
Route::get('/app/contracts/ads', [ContractController::class, 'getCreateAd']);
Route::post('/app/contracts/ads', [ContractController::class, 'createAd']);
Route::get('/app/contracts/offers', [ContractController::class, 'getOffers']);
Route::post('/app/contracts/{contract}/requestOffer', [ContractController::class, 'requestOffer']);
Route::get('/app/contracts/{contract}/requestSendOffer', [ContractController::class, 'getRequestSendOffer']);
Route::post('/app/contracts/{contract}/acceptRequest/{requestContract}', [ContractController::class, 'acceptRequestContract']);

// Membresia
Route::get('/app/memberships', [MembershipController::class, 'index']);
Route::get('/app/plans', [MembershipController::class, 'retrievePlans']);
Route::post('/app/memberships/subscription', [MembershipController::class, 'processSubscription']);
Route::get('/app/memberships/subscription', [MembershipController::class, 'showSubscription']);

Route::post('/app/chats/sendMessage', [ChatController::class, 'sendMessage']);
Route::get('/app/chats/getConversations', [ChatController::class, 'getConversations']);
Route::get('/app/chats/messagesConversation/{conversation}', [ChatController::class, 'messagesConversation']);

Route::post('/app/payment/contract/occasional', [PaymentController::class, 'payContractOccasional']);
Route::post('/app/payment/contract/habitual', [PaymentController::class, 'payContractHabitual']);
Route::get('/app/payment/contract/commission', [PaymentController::class, 'commission']);
Route::get('/app/payments', [PaymentController::class, 'getAll']);
Route::post('/app/payment/calculate', [PaymentController::class, 'calculate']);

// Blog
Route::get('/app/blogs/posts', [BlogController::class, 'index']);
Route::get('/app/blogs/lastestPosts', [BlogController::class, 'lastThree']);
Route::post('/app/blogs/posts', [BlogController::class, 'create']);
Route::post('/app/blogs/posts/{blog}', [BlogController::class, 'update']);
Route::delete('/app/blogs/posts/{blog}', [BlogController::class, 'destroy']);

// Admin
Route::get('/app/admin/users', [AdminController::class, 'getUsers']);
Route::put('/app/admin/users', [AdminController::class, 'updateUser']);
Route::get('/app/admin/docs', [AdminController::class, 'getDocs']);
Route::post('/app/admin/docs/{doc}/reject', [AdminController::class, 'rejectDoc']);
Route::post('/app/admin/docs/{doc}/accept', [AdminController::class, 'acceptDoc']);
Route::get('/app/admin/reports', [AdminController::class, 'getReports']);
Route::get('/app/admin/contracts/terminated', [AdminController::class, 'getContractsTerminated']);
Route::get('/app/admin/paymentsContract', [AdminController::class, 'getPaymentsContract']);
Route::get('/app/admin/paymentsContractFinalize/{payment}', [AdminController::class, 'paymentsContractFinalize']);
Route::get('/app/admin/paymentsStripe', [AdminController::class, 'getPaymentsStripe']);

Route::get('/mail/test', [MailController::class, 'testEmail']);

// Admin-blog


Route::get('/app/fired', function(){
    event(new ContractEvent);
    return 'fired';
});

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');
