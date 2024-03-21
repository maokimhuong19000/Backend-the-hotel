<?php

use App\Http\Controllers\Backend\RoomController;
use App\Http\Controllers\Frontend\TelegramController;
use App\Http\Controllers\Frontend\MasterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;

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

require __DIR__ . '/auth.php';

Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    Route::get('/groupspage', [RoutingController::class, 'index'])->name('root');
    Route::group(['prefix' => 'groupspage'], function () {
        Route::get('/home', fn() => view('index'))->name('home');
        Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
        Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
        Route::get('{any}', [RoutingController::class, 'root'])->name('any');
    });


    // Routing Process Data
    Route::get('/pages/create', [RoomController::class, 'create'])->name('create');

    Route::post('/store', [RoomController::class, 'store']);

    Route::get('subpage/edit/', [RoomController::class, 'edit'])->name('room.edit'); // Edit Data controller

    Route::post('pages/update', [RoomController::class, 'update'])->name('room.update');

    Route::delete('tables/basic/{id}', [RoomController::class, 'destroy'])->name('tables.basic.delete');
});




