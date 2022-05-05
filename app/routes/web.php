<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

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

Route::redirect('/','/user/signup');

Route::group(['controller' => UserController::class, 'name' => 'user', 'prefix' => 'user'], function () {
    Route::get('/signup', 'index')->name('signup');
});
