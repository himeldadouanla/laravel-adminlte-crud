<?php

use App\Http\Controllers\EtudiantsController;
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
Route::resource('etudiants',EtudiantsController::class);
Route::resource('niveaux',\App\Http\Controllers\NiveauxController::class);
Route::resource('enseignants',\App\Http\Controllers\EnseignantsController::class);
Route::resource('suivre',\App\Http\Controllers\SuivresController::class);
Route::resource('evaluations',\App\Http\Controllers\EvaluationsController::class);
Route::resource('UEs',\App\Http\Controllers\UEsController::class);
Route::get('/', function () {
    return view('welcome');
});
Route::get('templatelogin', function () {
    return view('layout.templatelogin');
});
