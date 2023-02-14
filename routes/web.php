<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
        Route::group(['prefix'=>'home'], function()
        {
        Route::get('/',  [HomeController::class,'index'])->name('home');
        Route::get('/account', [HomeController::class,'account'])->name('home.account');
        Route::get('/signup',[HomeController::class,'signup'])->name('home.signup');
        Route::post('/signup',[HomeController::class,'create'])->name('home.create');
        });

       

        
