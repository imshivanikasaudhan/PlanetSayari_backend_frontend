<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\RequestDealController;
use App\Http\Controllers\DashboardController;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('/index');    
// });

Route::group(['Middleware'=>'guest'], function(){
    Route::post('/dashboard', [AuthController::class, 'loginStore'])->name('dashboard');
    Route::post('/', [AuthController::class, 'registerStore'])->name('register');
});

Route::group(['Middleware'=>'auth'], function(){
    Route::get('/', [AuthController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);    
    Route::delete('/', [AuthController::class, 'logout'])->name('logout');
});


//Dashborad routes

// Route::get('/dashboard', function(){
//     return view('/dashboard');
// });
// Route::get('/request-deal', function(){
//     return view('/request-deal');
// });

Route::get('/request-deal', [DashboardController::class, 'requestDeal']);
Route::post('/request-deal', [DashboardController::class, 'requestDealStore']);

Route::get('/deal-status', function(){
    return view('/deal-status');
});
// Route::get('/help-contact', function(){
//     return view('/help-contact');
// });
Route::get('help-contact', [DashboardController::class, 'helpContact']);
Route::post('help-contact', [DashboardController::class, 'helpContactStore']);

Route::get('/user-profile', [DashboardController::class, 'userprofile'])->name('user-profile');

// Route::get('/user-profile', function(){
//     return view('/user-profile');
// });
// Dashboard Route End

Route::get('/contact', function () {
    return view('/contact');
    
});
Route::get('/programs', function () {
    return view('/programs');
   
});
Route::get('/projects', function () {
    return view('/projects');
    
});
Route::get('/strategy', function () {
    return view('/strategy');
   
});
Route::get('/letter-of-credit', function () {
    return view('/letter-of-credit');
   
});
Route::get('/funds-assets', function () {
    return view('/funds-assets');
   
});
Route::get('/sayari-app', function () {
    return view('/sayari-app');
    
});
Route::get('/our-journey', function () {
    return view('/our-journey');  
});

Route::get('/sayari-app', function () {
    return view('/sayari-app');
    
});
Route::get('/mission', function(){
    return view('/mission');

});
Route::get('/our-Program', function(){
    return view('/programs');
});
Route::get('/project', function(){
    return view('/projects');
});
Route::get('/instrument', function(){
    return view('/instrument');
});
Route::get('/letter-of-credit', function(){
    return view('/letter-of-credit');
});

