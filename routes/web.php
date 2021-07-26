<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

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

Route::get('testedit', function () {
    return view('/projects/edit');
});
Route::get('testdetail', function () {
    return view('/projects/detail');
});
Route::get('testprofile', function () {
    return view('/profile/user');
});

Route::get('testlist', function () {
    return view('/projects/list');
});


// MENU MODUL
Route::get('listModul', function () {
    return view('/moduls/index');
});
Route::get('addModul', function () {
    return view('/moduls/create');
});
Route::get('archiveModul', function () {
    return view('/moduls/archive');
});
Route::get('archiveP', function () {
    return view('/projects/archive');
});


// menu function
Route::get('addFunction', function () {
    return view('/functions/create');
});
Route::get('listFunction', function () {
    return view('/functions/index');
});
Route::get('archiveFunction', function () {
    return view('/functions/archive');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    });
    Route::resource('/projects', ProjectsController::class);
    Route::resource('/moduls', ModulsController::class);
    Route::resource('/functions', FunctionsController::class);
});
