<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\GitlabAuthController;
use App\Http\Controllers\GitLabController;

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

Route::get('/',[GitLabController::class,'GitLabPage'])->middleware('guest')->name('main');
Route::get('/gitlabprofile',[GitLabController::class,'GitLabProfile'])->middleware('auth')->name('profile');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::group(['controller' => GitLabAuthController::class, 'middleware' => 'guest'], function() {
	Route::get('/gitlab', 'redirectToGitLab')->name('gitlab');
	Route::get('/gitlab/callback', 'handleGitLabCallback');
});

require __DIR__.'/auth.php';
