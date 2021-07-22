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

Route::get('testmoduls', function () {
    return view('/moduls/index');
});

Route::get('addmoduls', function () {
    return view('/moduls/create');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    });
    Route::resource('/projects', ProjectsController::class);
});
