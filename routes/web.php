<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\Backend\RoomController;
use App\Http\Controllers\Frontend\TelegramController;
use App\Http\Controllers\Frontend\MasterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;

 
// One Page Shoudl has on Controller 
require __DIR__ . '/auth.php';

Route::group(['middleware' => 'auth_custome'], function () {
    Route::get('/admin', [RoutingController::class, 'index'])->name('root');
    Route::group(['prefix' => 'admins'], function () {
        Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
        Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
        Route::get('{any}', [RoutingController::class, 'root'])->name('any');
    });



    Route::post('/signup', [RegisteredUserController::class, 'signup'])->name('signup');
    // Routing Process Data
    Route::get('/pages/create', [RoomController::class, 'create'])->name('create'); //Create Data

    Route::post('/store', [RoomController::class, 'store']);//Store Data

    Route::get('subpage/view', [RoomController::class, 'view'])->name('room.view'); // View Data 

    Route::get('pages/edit/', [RoomController::class, 'edit'])->name('room.edit'); // Edit Data 

    Route::post('pages/update', [RoomController::class, 'update'])->name('room.update'); //Update Data

    Route::delete('tables/basic/{id}', [RoomController::class, 'destroy'])->name('tables.basic.delete'); //Delete Data
}); 


// Authentication For your application here
    Route::get('',function(){
        return view('auth.login'); });
    Route::post('/login',[Authentication::class,'doLogin'])->name('login');    

// Admin 

Route::group(['prefix' => 'admin','middleware' => 'auth_custome'], function () {
    Route::get('home', [AdminController::class, 'index']);    
   
});


// Route Frontend 
    Route::controller(MasterController::class)->group(function(){
        Route::get('/master','master');
        Route::get('/roomlist1','roomlist1');
        Route::get('/roomlist2','roomlist2');
        Route::get('/roomlist3','roomlist3');
        Route::get('/roomdetailsbooking','roomdetailsbooking');
        Route::get('/spa','spa');
        Route::get('/roomdetails','roomdetails');
        Route::get('/restaurant','restaurant');
        Route::get('/package','package');
        Route::get('/blog','blog');
        Route::get('/video','video');
        Route::get('/gallery','gallery');
        Route::get('/contacts','contacts');
        Route::get('/about','about');     
    });
    Route::controller(TelegramController::class)->group(function(){
        Route::get('/sendTelegramMessage','sendTelegramMessage');   
        Route::post('/sendinfo','sendinfo')->name('sendinfo');
    });