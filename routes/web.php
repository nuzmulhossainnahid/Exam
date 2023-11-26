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

//Route::get('/', function () {
//    return view('index');
//});
Route::get('/', [UserController::class, 'index']);
Route::get('/createCompany', [UserController::class, 'createCompany']);
Route::get('/createEmploy', [UserController::class, 'createEmploy']);
Route::get('/CompanyList', [UserController::class, 'CompanyList']);
Route::get('/EmployList', [UserController::class, 'EmployList']);
Route::post('/createCompanyFrom', [UserController::class, 'createCompanyFrom']);
Route::post('/createEmployFrom', [UserController::class, 'createEmployFrom']);

Route::get('/EditEm/{id}', [UserController::class, 'EditEm']);
Route::get('/EditEmployFrom/{id}', [UserController::class, 'EditEmployFrom']);
Route::post('/EditEmployFrom/{id}', [UserController::class, 'EditEmployFrom']);
Route::get('/DeleteEm/{id}', [UserController::class, 'DeleteEm']);

Route::get('/EditCom/{id}', [UserController::class, 'EditCom']);
Route::get('/EditCompanyFrom/{id}', [UserController::class, 'EditCompanyFrom']);
Route::post('/EditCompanyFrom/{id}', [UserController::class, 'EditCompanyFrom']);
Route::get('/DeleteCom/{id}', [UserController::class, 'DeleteCom']);
Route::get('/Count/{id}', [UserController::class, 'Count']);
