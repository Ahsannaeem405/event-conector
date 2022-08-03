<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\userController;
use App\Http\Controllers\PackageController;


use App\Http\Controllers\SearchController;



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

Route::get('/',[userController::class, 'index']);

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

Route::any('search',[\App\Http\Controllers\SearchController::class,'search']);

Route::prefix('/admins')->middleware(['auth','admin'])->group(function (){


    Route::get('/', [AdminController::class, 'index']);

//    users
    Route::get('/users', [AdminController::class, 'users']);
    Route::get('/planners', [AdminController::class, 'planners']);
    Route::post('/edituser/{id}', [AdminController::class, 'edituser']);
    Route::post('/dltuser/{id}', [AdminController::class, 'dltuser']);

//    category
    Route::get('/categories', [AdminController::class, 'categories']);
    Route::post('/editcatg/{id}', [AdminController::class, 'editcatg']);
    Route::post('/dltcatg/{id}', [AdminController::class, 'dltcatg']);
    Route::post('/addcategory', [AdminController::class, 'addcategory']);
    Route::get('/category_edit', [AdminController::class, 'category_edit']);

//restaurant

    Route::get('restaurants',[\App\Http\Controllers\ResturentController::class,'index']);
    Route::post('delete/restaurant/{id}',[\App\Http\Controllers\ResturentController::class,'delete']);


});



Route::prefix('/user')->middleware(['auth','user'])->group(function (){

    Route::get('/', [userController::class, 'index'])->withoutMiddleware(['auth','user']);
    Route::get('/featured_rest', [SearchController::class, 'search'])->withoutMiddleware(['auth','user']);
    Route::get('/chatBoard', [userController::class, 'chatBoard'])->withoutMiddleware(['user']);
    Route::get('/favourites', [EventController::class, 'favourites'])->withoutMiddleware(['user']);


    Route::get('/event', [EventController::class, 'event'])->withoutMiddleware(['auth','user']);
    Route::get('/login/event', [EventController::class, 'login_event']);

    Route::get('/planner', [EventController::class, 'restaurant'])->withoutMiddleware(['user'])->middleware(['planner']);

    //resturents
    Route::get('/restaurant', [EventController::class, 'restaurant'])->withoutMiddleware(['user'])->middleware(['planner']);
    Route::post('/addrest', [EventController::class, 'addrest'])->withoutMiddleware(['user'])->middleware(['planner']);
    Route::get('/editrest', [EventController::class, 'editrest'])->withoutMiddleware(['user'])->middleware(['planner']);
    Route::post('/update_restaurant/{id}', [EventController::class, 'update_restaurant'])->withoutMiddleware(['user'])->middleware(['planner']);
    Route::get('/resturent/delete/{id}', [EventController::class, 'delete_resturent'])->withoutMiddleware(['user'])->middleware(['planner']);


    Route::get('/add_favorite', [EventController::class, 'add_favorite'])->withoutMiddleware(['user']);


    //packages
    Route::post('/add_package', [PackageController::class, 'add_package'])->withoutMiddleware(['user'])->middleware(['planner']);
    Route::get('/edit_package', [PackageController::class, 'edit_package'])->withoutMiddleware(['user'])->middleware(['planner']);
    Route::post('/update_package/{id}', [PackageController::class, 'update_package'])->withoutMiddleware(['user'])->middleware(['planner']);
    Route::get('/package/delete/{id}', [PackageController::class, 'delete_package'])->withoutMiddleware(['user'])->middleware(['planner']);



    Route::post('/hostevent', [EventController::class, 'hostevent']);
    Route::get('package/detail/{id}', [EventController::class, 'details'])->withoutMiddleware(['user']);

    //booking
    Route::post('check/avibility', [EventController::class, 'avibility'])->withoutMiddleware(['user']);
    Route::post('book/package', [\App\Http\Controllers\BookingController::class, 'book'])->withoutMiddleware(['user'])->name('user.book.package');
    Route::get('booking', [\App\Http\Controllers\BookingController::class, 'mybook'])->withoutMiddleware(['user']);
    Route::get('booking/detail/{id}', [\App\Http\Controllers\BookingController::class, 'bookingDetail'])->withoutMiddleware(['user']);
    Route::post('booking/status/{id}', [\App\Http\Controllers\BookingController::class, 'bookingStaus'])->withoutMiddleware(['user'])->name('booking.status');
    Route::post('note/store', [\App\Http\Controllers\NoteController::class, 'store'])->withoutMiddleware(['user'])->name('note.store');
    Route::get('note/delete/{id}', [\App\Http\Controllers\NoteController::class, 'delete'])->withoutMiddleware(['user'])->name('note.delete');
    Route::post('sendMSG', [\App\Http\Controllers\MessageController::class, 'send'])->withoutMiddleware(['user'])->name('note.delete');





});



