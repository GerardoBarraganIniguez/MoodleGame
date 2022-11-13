<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AssignmentController;

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

//students
Route::get('/students',[StudentController::class, 'index'])->name('students.index');
Route::get('/students/create',[StudentController::class, 'create'])->name('students.create');
Route::post('/students',[StudentController::class, 'store'])->name('students.store');
Route::get('/students/{student}/edit',[StudentController::class, 'edit'])->name('students.edit');
Route::patch('/students/{student}',[StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{student}',[StudentController::class, 'destroy'])->name('students.destroy');

//assignments
Route::get('/assignments',[AssignmentController::class, 'index'])->name('assignments.index');
Route::get('/assignments/create',[AssignmentController::class, 'create'])->name('assignments.create');
Route::post('/assignments',[AssignmentController::class, 'store'])->name('assignments.store');
Route::get('/assignments/{assignment}/edit',[AssignmentController::class, 'edit'])->name('assignments.edit');
Route::patch('/assignments/{assignment}',[AssignmentController::class, 'update'])->name('assignments.update');
Route::delete('/assignments/{assignment}',[AssignmentController::class, 'destroy'])->name('assignments.destroy');

//teachers
Route::get('/teachers',[TeacherController::class, 'index'])->name('teachers.index');
Route::get('/teachers/create',[TeacherController::class, 'create'])->name('teachers.create');
Route::post('/teachers',[TeacherController::class, 'store'])->name('teachers.store');
Route::get('/teachers/{teacher}/edit',[TeacherController::class, 'edit'])->name('teachers.edit');
Route::patch('/teachers/{teacher}',[TeacherController::class, 'update'])->name('teachers.update');
Route::delete('/teachers/{teacher}',[TeacherController::class, 'destroy'])->name('teachers.destroy');