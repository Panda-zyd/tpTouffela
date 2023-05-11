<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

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

Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiants.index');
//Route::get('/etudiants/{id}', [EtudiantController::class, 'show'])->name('etudiants.show');
Route::get('/etudiants/edit/{id}', [EtudiantController::class, 'edit'])->name('etudiants.edit');
Route::put('/etudiants/update/{id}', [EtudiantController::class, 'update'])->name('etudiants.update');
Route::get('/etudiants/create', [EtudiantController::class, 'create'])->name('etudiants.create');
Route::post('/etudiants/store', [EtudiantController::class, 'store'])->name('etudiants.store');
Route::delete('/etudiants/destroy/{id}', [EtudiantController::class, 'destroy'])->name('etudiants.destroy');
Route::get('/etudiants/search', [EtudiantController::class, 'search'])->name('etudiants.search');
//Route::get('/etudiants/{id}', 'EtudiantController@show');
//Route::put('/etudiants/{id}', 'EtudiantController@update');
//Route::get('/etudiants/{id}/classe-pleine', 'EtudiantController@checkClassePleine');
//Route::get('/formation/{id}/informations', 'FormationController@informations')->name('formation.informations');
