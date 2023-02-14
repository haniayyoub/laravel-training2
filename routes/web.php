<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return 'welcome';
    });
    Route::get( 'hello/{name}/{fname?}', function ($x, $y="test"){
        echo "Hello " . $x . " " . $y;
        });
        Route::group(['prefix'=>'user'], function()
        {
        Route::get('/',  [UserController::class,'index'])->name('user');
        Route::get('/account', [UserController::class,'account'])->name('user.account');
        Route::get('/signup',[UserController::class,'create'])->name('user.signup');
        Route::post('/signup',[UserController::class,'store'])->name('user.create');
        });

       

        
