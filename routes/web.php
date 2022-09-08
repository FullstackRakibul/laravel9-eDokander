<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Frontend All Routes .........................................

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/aboutus', [\App\Http\Controllers\frontend\AboutController::class,'aboutus'])->name('aboutus');
Route::get('/contactus', [\App\Http\Controllers\frontend\ContactController::class,'contactus'])->name('contact');
Route::get('/shop', [\App\Http\Controllers\frontend\ShopController::class,'shop'])->name('shop');
Route::get('termsandcondition',[\App\Http\Controllers\frontend\TermsAndConditionController::class,'termsAndCondition'])->name('termsandcondition');
Route::get('privacypolicy',[\App\Http\Controllers\frontend\PrivacyPolicyController::class,'privacyPolicy'])->name('privacypolicy');



// Backend All Routes .........................................
