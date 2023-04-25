<?php

use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoanController;
use App\Http\Controllers\LandingPage\LandingPageController;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
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

//route landingpage
Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');

Route::get('/login', function () {
    return view('auth.login');
});

Route::middleware('auth', 'CheckRole:admin')->group(function(){
    Route::get('/room/create', [RoomController::class, 'create'])->name("room-create");
    Route::post('/room/store', [RoomController::class, 'store'])->name("room-store");
    Route::get('/room/index', [RoomController::class, 'index'])->name("room-index");
    Route::delete('/room/delete/{id}',[RoomController::class, 'destroy'])->name("room-delete");
    Route::get('/room/edit/{id}', [RoomController::class, 'edit'])->name("room-edit");
    Route::put('/room/update/{id}', [RoomController::class, 'update'])->name("room-update");

    Route::get('/loan/index', [LoanController::class, 'index'])->name('loan-index');
    Route::delete('/loan/delete/{id}',[LoanController::class, 'destroy'])->name('loan-delete');
    Route::get('/loan/edit/{id}', [LoanController::class, 'edit'])->name('loan-edit');
    Route::put('/loan/update/{id}', [LoanController::class, 'update'])->name('loan-update');
    Route::get('/loan/show/{id}', [LoanController::class, 'show'])->name('loan-show');
    
});

Route::middleware('auth', 'CheckRole:user')->group(function(){
    Route::get('/loan/user/showUser/{id}', [LoanController::class, 'showUser'])->name('show-user');
    Route::get('/loan/user/index', [LoanController::class, 'indexUser'])->name('loan-user-index');
    Route::delete('/loan/user/delete/{id}',[LoanController::class, 'destroyUser'])->name('delete-user');
});

Route::middleware('auth', 'CheckRole:admin,user')->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/landingpage/room', [LandingPageController::class, 'index'])->name('lp-room');
    Route::post('/landingpage/store', [LandingPageController::class, 'store'])->name('lp-store');
});

Auth::routes();