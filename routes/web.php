<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\FunctionsController;
use App\Http\Controllers\ModulesController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;

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

Route::group(['middleware' => ['auth', 'userlevel:admin']], function () {
    Route::resource('/users', UsersController::class);
});


Route::group(['middleware' => ['auth', 'userlevel:admin,creator']], function () {

    // Controller Dashboard Routes
    Route::resource('/dashboard', DashboardController::class);

    // Controller Profile User
    Route::resource('/profile', ProfileController::class);

    // Controler pdf
    Route::get('testpdf', 'TestPdfController@dogenerate');

    // Controller Projects Routes
    Route::get('/projects/archive', [ProjectsController::class, 'archive']);
    Route::delete('/projects/kill/{id}', [ProjectsController::class, 'kill']);
    Route::get('/projects/restore/{id}', [ProjectsController::class, 'restore']);
    Route::get('/projects/exportIndexExcel', [ProjectsController::class, 'exportIndexExcel']);
    Route::resource('/projects', ProjectsController::class);

    // Controller Modules Routes
    Route::get('/modules/archive', [ModulesController::class, 'archive']);
    Route::delete('/modules/kill/{id}', [ModulesController::class, 'kill']);
    Route::get('/modules/restore/{id}', [ModulesController::class, 'restore']);
    Route::get('/modules/exportIndexExcel', [ModulesController::class, 'exportIndexExcel']);
    Route::resource('/modules', ModulesController::class);

    // Controller Functions Routes
    Route::get('/functions/archive', [FunctionsController::class, 'archive']);
    Route::delete('/functions/kill/{id}', [FunctionsController::class, 'kill']);
    Route::get('/functions/restore/{id}', [FunctionsController::class, 'restore']);
    Route::get('/functions/exportIndexPdf', [FunctionsController::class, 'exportIndexPdf']);
    Route::get('/functions/exportDetailPdf/{id}', [FunctionsController::class, 'exportDetailPdf']);
    Route::get('/functions/exportIndexExcel', [FunctionsController::class, 'exportIndexExcel']);
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
