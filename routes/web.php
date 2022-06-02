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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/auth/google', [App\Http\Controllers\social::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [App\Http\Controllers\social::class, 'handleGoogleCallback']);




Route::prefix('/admins')->middleware(['auth','admin'])->group(function (){


    Route::get('/', function () {
        return view('admin/index');
       
    })->withoutMiddleware(['auth','admin']);


});




Route::prefix('/planner')->middleware(['auth','planner'])->group(function (){


    Route::get('/', function () {
        dd('planner');
    });



    
});




Route::prefix('/user')->middleware(['auth','user'])->group(function (){


    Route::get('/', function () {
        dd('user');
    });




    
});



