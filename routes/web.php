<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\ClassroomStudentController;

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

//subjects
Route::get('/subjects',[SubjectController::class, 'index'])->name('subjects.index');
Route::get('/subjects/create',[SubjectController::class, 'create'])->name('subjects.create');
Route::post('/subjects',[SubjectController::class, 'store'])->name('subjects.store');
Route::get('/subjects/{subject}/edit',[SubjectController::class, 'edit'])->name('subjects.edit');
Route::patch('/subjects/{subject}',[SubjectController::class, 'update'])->name('subjects.update');
Route::delete('/subjects/{subject}',[SubjectController::class, 'destroy'])->name('subjects.destroy');

//teachers
Route::get('/teachers',[TeacherController::class, 'index'])->name('teachers.index');
Route::get('/teachers/create',[TeacherController::class, 'create'])->name('teachers.create');
Route::post('/teachers',[TeacherController::class, 'store'])->name('teachers.store');
Route::get('/teachers/{teacher}/edit',[TeacherController::class, 'edit'])->name('teachers.edit');
Route::patch('/teachers/{teacher}',[TeacherController::class, 'update'])->name('teachers.update');
Route::delete('/teachers/{teacher}',[TeacherController::class, 'destroy'])->name('teachers.destroy');

//sections
Route::get('/sections',[SectionController::class, 'index'])->name('sections.index');
Route::get('/sections/create',[SectionController::class, 'create'])->name('sections.create');
Route::post('/sections',[SectionController::class, 'store'])->name('sections.store');
Route::get('/sections/{section}/edit',[SectionController::class, 'edit'])->name('sections.edit');
Route::patch('/sections/{section}',[SectionController::class, 'update'])->name('sections.update');
Route::delete('/sections/{section}',[SectionController::class, 'destroy'])->name('sections.destroy');

//classrooms
Route::get('/classrooms',[ClassroomController::class, 'index'])->name('classrooms.index');
Route::get('/classrooms/create',[ClassroomController::class, 'create'])->name('classrooms.create');
Route::post('/classrooms',[ClassroomController::class, 'store'])->name('classrooms.store');
Route::get('/classrooms/{classroom}/edit',[ClassroomController::class, 'edit'])->name('classrooms.edit');
Route::patch('/classrooms/{classroom}',[ClassroomController::class, 'update'])->name('classrooms.update');
Route::delete('/classrooms/{classroom}',[ClassroomController::class, 'destroy'])->name('classrooms.destroy');

//assignments
Route::get('/assignments',[AssignmentController::class, 'index'])->name('assignments.index');
Route::get('/assignments/{classroom}/create',[AssignmentController::class, 'create'])->name('assignments.create');
Route::post('/assignments/{classroom}',[AssignmentController::class, 'store'])->name('assignments.store');
Route::get('/assignments/{assignment}/edit',[AssignmentController::class, 'edit'])->name('assignments.edit');
Route::patch('/assignments/{assignment}',[AssignmentController::class, 'update'])->name('assignments.update');
Route::delete('/assignments/{assignment}',[AssignmentController::class, 'destroy'])->name('assignments.destroy');

//exams
Route::get('/exams',[ExamController::class, 'index'])->name('exams.index');
Route::get('/exams/{classroom}/create',[ExamController::class, 'create'])->name('exams.create');
Route::post('/exams/{classroom}',[ExamController::class, 'store'])->name('exams.store');
Route::get('/exams/{exam}/edit',[ExamController::class, 'edit'])->name('exams.edit');
Route::patch('/exams/{exam}',[ExamController::class, 'update'])->name('exams.update');
Route::delete('/exams/{exam}',[ExamController::class, 'destroy'])->name('exams.destroy');

//Student-Classroom
Route::get('/classrooms-students',[ClassroomStudentController::class, 'index'])->name('classrooms_students.index');
Route::get('/classrooms-students/{student}/create',[ClassroomStudentController::class, 'create'])->name('classrooms_students.create');
Route::post('/classrooms-students/{student}',[ClassroomStudentController::class, 'store'])->name('classrooms_students.store');
