<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\FunctionsController;
use App\Http\Controllers\ModulesController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DashboardController;

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
    return view('auth/login');
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

Route::get('listproject', function () {
    return view('/projects/index');
});
Route::get('archiveP', function () {
    return view('/projects/archive');
});


// MENU MODUL
Route::get('listModul', function () {
    return view('/modules/index');
});
Route::get('addModul', function () {
    return view('/modules/create');
});
Route::get('archiveModul', function () {
    return view('/modules/archive');
});
Route::get('detailModul', function () {
    return view('/modules/detail');
});
Route::get('editModul', function () {
    return view('/modules/edit');
});

// menu function
Route::get('addFunction', function () {
    return view('/functions/create1');
});
Route::get('listFunction', function () {
    return view('/functions/index');
});
Route::get('archiveFunction', function () {
    return view('/functions/archive');
});
Route::get('archiveFunction', function () {
    return view('/functions/edit');
});
Route::get('archiveFunction', function () {
    return view('/functions/detail');
});

// TAGS
Route::get('archiveTags', function () {
    return view('/tags/archive');
});
Route::get('listTags', function () {
    return view('/tags/index11');
});
Route::get('detailTags', function () {
    return view('/tags/detail');
});

//Category
Route::get('addCateg', function () {
    return view('/categories/create');
});
Route::get('listCateg', function () {
    return view('/categories/index');
});
Route::get('detailCateg', function () {
    return view('/categories/detail');
});

// vIEW ADMIN
Route::get('users', function () {
    return view('/users/index');
});
Route::get('addusers', function () {
    return view('/users/create');
});
Route::get('detailusers', function () {
    return view('/users/detail');
});
Route::get('editusers', function () {
    return view('/users/edit');
});

Route::group(['middleware' => ['auth', 'userlevel:admin']], function () {
    Route::resource('/users', UsersController::class);
});


Route::group(['middleware' => ['auth', 'userlevel:admin,creator']], function () {

    // Controller Dashboard Routes
    Route::resource('/dashboard', DashboardController::class);

    // Controller Projects Routes
    Route::get('/projects/archive', [ProjectsController::class, 'archive']);
    Route::delete('/projects/kill/{id}', [ProjectsController::class, 'kill']);
    Route::get('/projects/restore/{id}', [ProjectsController::class, 'restore']);
    Route::resource('/projects', ProjectsController::class);

    // Controller Modules Routes
    Route::get('/modules/archive', [ModulesController::class, 'archive']);
    Route::delete('/modules/kill/{id}', [ModulesController::class, 'kill']);
    Route::get('/modules/restore/{id}', [ModulesController::class, 'restore']);
    Route::resource('/modules', ModulesController::class);

    // Controller Functions Routes
    Route::get('/functions/archive', [FunctionsController::class, 'archive']);
    Route::delete('/functions/kill/{id}', [FunctionsController::class, 'kill']);
    Route::get('/functions/restore/{id}', [FunctionsController::class, 'restore']);
    Route::resource('/functions', FunctionsController::class);

    // Controller Tags Routes
    Route::get('/tags/archive', [TagsController::class, 'archive']);
    Route::delete('/tags/kill/{id}', [TagsController::class, 'kill']);
    Route::get('/tags/restore/{id}', [TagsController::class, 'restore']);
    Route::resource('/tags', TagsController::class);

    // Controller Categories Routes
    Route::get('/categories/archive', [CategoriesController::class, 'archive']);
    Route::delete('/categories/kill/{id}', [CategoriesController::class, 'kill']);
    Route::get('/categories/restore/{id}', [CategoriesController::class, 'restore']);
    Route::resource('/categories', CategoriesController::class);
});
