<?php

use App\Http\Controllers\CreateResidenceController;
use App\Http\Controllers\StepThreeController;
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
    return view('start');
});

//register
Route::get('/account', function () {
    return view('createAccount');
});
Route::get('/done', function () {
    return view('accountDone');
});

//start
Route::get('/start', function () {
    return view('start');
});

//Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::post('/createResidence', CreateResidenceController::class);
//Route::post('/stepThree', StepThreeController::class);
