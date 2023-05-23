<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});


Route::get('excel', function(){
    return view('excel');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/export-user', 'exportUser')->name('export-user');
    Route::post('/import-user', 'importUser')->name('import-user');
});