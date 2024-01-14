<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableVehicleRecord;

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



Route::get('/', function () {
    return view('pages.dashboard');
});




Route::group(['prefix' => 'vehicle-record'], function () {
    Route::get('/table', [TableVehicleRecord::class, 'index'])->name('table.vehicle-record');
    Route::post('/upload-image', [TableVehicleRecord::class, 'store'])->name('table.upload-image');
});




Route::get('/biling', function () {
    return view('pages.biling');
});

Route::get('/blacklisted', function () {
    return view('pages.blacklisted');
});

Route::get('/record', function () {
    return view('pages.storage');
});


Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/signin', function () {
    return view('pages.signin');
});

Route::get('/signup', function () {
    return view('pages.signup');
});



//Route for Pass
Route::get('/vip', function () {
    return view('pages.vip');
});

Route::get('/staff', function () {
    return view('pages.staff');
});

Route::get('/student', function () {
    return view('pages.student');
});

Route::get('/visitor', function () {
    return view('pages.visitor');
});
