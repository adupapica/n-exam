<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function(){
    return redirect('account/home');
});
Route::get('account/login', [UserController::class, 'loginpage']);
Route::post('account/login', [UserController::class, 'login']);

Route::group(['prefix' => 'account','middleware'=>'user'], function(){
Route::get('/home', [UserController::class, 'territories']);
Route::get('/logout',  [UserController::class, 'logout']);

});


