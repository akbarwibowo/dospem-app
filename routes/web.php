<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\TwitterController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SubjectController;
use App\Models\Subject;

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
    return view('welcome');
});

Route::get('/newquestion', function () {
    return view('newquestion');
});

Route::get('/question', function () {
    return view('question');
});

Route::get('/userlist', function () {
    return view('user_list');
});

// Route::get('/form', function () {
//     return view('form');
// });

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::controller(ResultController::class)->group(function() {
    Route::post('/result/{id}', 'result')->name('result');
});

Route::controller(QuestionController::class)->group(function() {
    Route::get('/new', 'newQuestion')->name('newQuestion');
    Route::post('/add', 'add')->name('add');
    Route::get('/form','getQuestions')->name('form');
});

Route::controller(SubjectController::class)->group(function() {
    Route::get('/subjects', 'subjects')->name('subjects');
});

Route::controller(LoginController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate','authenticate')->name('authenticate');
    Route::get('/home', 'home')->name('home');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(VerificationController::class)->group(function() {
    Route::get('/email/verify', 'notice')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', 'verify')->name('verification.verify');
    Route::post('/email/resend', 'resend')->name('verification.resend');
});

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);

Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('auth/twitter', [TwitterController::class, 'redirectToTwitter']);

Route::get('auth/twitter/callback', [TwitterController::class, 'handleTwitterCallback']);

Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook']);

Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);
