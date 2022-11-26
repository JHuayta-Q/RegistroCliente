<?php

use App\Http\Controllers\PlanController;
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
    return view('index');
});


Route::get('/planes', [PlanController::class, 'index'])->name('plans.index');
Route::get('/planes/create', [PlanController::class, 'create'])->name('plans.create');
Route::post('/planes', [PlanController::class, 'store'])->name('plans.store');
Route::get('/planes/{id}/edit',[PlanController::class, 'edit'])->name('plans.edit');
Route::patch('/planes/{plan}', [PlanController::class, 'update'])->name('plans.update');
