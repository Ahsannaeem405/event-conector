<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;

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
    return view('/index');
});
 
 Route::get('/cls', function() {
        $run = Artisan::call('config:clear');
        $run = Artisan::call('cache:clear');
        $run = Artisan::call('config:cache');
        $run = Artisan::call('view:clear');
        Session::flush();
        return 'FINISHED';
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/auth/google', [App\Http\Controllers\social::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [App\Http\Controllers\social::class, 'handleGoogleCallback']);

Route::get('auth/facebook', [App\Http\Controllers\social::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [App\Http\Controllers\social::class, 'handleFacebookCallback']);

Route::post('/addplanner', [App\Http\Controllers\EventController::class, 'addplanner']);


Route::prefix('/admins')->middleware(['auth','admin'])->group(function (){

    
    Route::get('/', [AdminController::class, 'index'])->withoutMiddleware(['auth','admin']);

    Route::get('/users', [AdminController::class, 'users']);
    Route::get('/planners', [AdminController::class, 'planners']);
    Route::post('/edituser/{id}', [AdminController::class, 'edituser']);
    Route::post('/editcatg/{id}', [AdminController::class, 'editcatg']);
    Route::post('/dltuser/{id}', [AdminController::class, 'dltuser']);
    Route::post('/dltcatg/{id}', [AdminController::class, 'dltcatg']);
    Route::get('/categories', [AdminController::class, 'categories']);
    Route::post('/addcategory', [AdminController::class, 'addcategory']);


    
    
});




Route::prefix('/planner')->middleware(['auth','planner'])->group(function (){

    Route::get('/', [EventController::class, 'restaurant']);
    Route::post('/addrest', [EventController::class, 'addrest']);
    
});




Route::prefix('/user')->middleware(['auth','user'])->group(function (){


    Route::get('/', function () {
        return view('/index');
    })->withoutMiddleware(['auth','user']);

    Route::get('/featured_rest', function () {
        return view('/featured_rest');
    })->withoutMiddleware(['auth','user']);

    Route::get('/restaurant', function () {
        return view('/restaurant');
    })->withoutMiddleware(['auth','user']);

    Route::get('/chatBoard', function () {
        return view('/chatBoard');
    })->withoutMiddleware(['auth','user']);

    // Route::get('/event', function () {
    //     return view('/event');
    // })->withoutMiddleware(['auth','user']);
    

    Route::get('/event', [EventController::class, 'event'])->withoutMiddleware(['auth','user']);

    Route::get('/favourites', function () {
        return view('/favourites');
    })->withoutMiddleware(['auth','user']);

    


    
});



