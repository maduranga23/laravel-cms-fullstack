<?php

use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\PostController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::view('contact', 'website.contact')->name('contact');
Route::controller(websiteController::class)->group(function(){
    Route::get('/', 'home')->name('home');

Route::get('/post/{post}', 'show')->name('website.posts.show');

});


Auth::routes();

Route::prefix('auth')->middleware(['auth'])->group(function(){
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('auth.dashboard');

    Route::resource('posts', PostController::class);
});

