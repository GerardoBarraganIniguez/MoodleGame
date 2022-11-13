<?php

use App\Http\Controllers\DegreeController;
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
    return view('main');
});

//degrees
Route::get('/degrees',[DegreeController::class, 'index'])->name('degrees.index');
Route::get('/degrees/create',[DegreeController::class, 'create'])->name('degrees.create');
Route::post('/degrees',[DegreeController::class, 'store'])->name('degrees.store');
Route::get('/degrees/{degree}/edit',[DegreeController::class, 'edit'])->name('degrees.edit');
Route::patch('/degrees/{degree}',[DegreeController::class, 'update'])->name('degrees.update');
Route::delete('/degrees/{degree}',[DegreeController::class, 'destroy'])->name('degrees.destroy');