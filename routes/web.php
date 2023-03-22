<?php

use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoanController;
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

Route::get('/', function () {
    return view('auth.login');
});

//route rooms
Route::get('/room/create', [RoomController::class, 'create'])->name("room-create");
Route::post('/room/store', [RoomController::class, 'store'])->name("room-store");
Route::get('/room/index', [RoomController::class, 'index'])->name("room-index");
Route::delete('/room/delete/{id}',[RoomController::class, 'destroy'])->name("room-delete");
Route::get('/room/edit/{id}', [RoomController::class, 'edit'])->name("room-edit");
Route::put('/room/update/{id}', [RoomController::class, 'update'])->name("room-update");

//route loans
Route::get('/loan/create', [LoanController::class, 'create'])->name('loan-create');
Route::post('loan/store', [LoanController::class, 'store'])->name('loan-store');
Route::get('/loan/index', [LoanController::class, 'index'])->name('loan-index');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes();