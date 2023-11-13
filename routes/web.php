<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HelpController;
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

Route::get('/', function () {
    return view('/index');    
});

Route::post('/dashboard', [AuthController::class, 'login'])->name('dashboard');
Route::post('/', [AuthController::class, 'register'])->name('register');

//Dashborad routes
Route::get('/dashboard', function(){
    return view('/dashboard');
});
Route::get('/request-deal', function(){
    return view('/request-deal');
});
Route::get('/deal-status', function(){
    return view('/deal-status');
});
// Route::get('/help-contact', function(){
//     return view('/help-contact');
// });
Route::get('help-contact', [HelpController::class, 'helpContact']);
Route::post('help-contact', [HelpController::class, 'helpContactStore']);

Route::get('/user-profile', function(){
    return view('/user-profile');
});
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

