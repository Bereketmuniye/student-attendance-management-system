<?php

use App\Http\Controllers\AssignController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::POST('/profile', [ProfileController::class, 'logout'])->name('profile.logout');
});

Route::get('/student',[StudentController::class,'index'])->name('student.index');
Route::get('/addstudent',[StudentController::class,'add'])->name('addstudent');
Route::POST('/addstudent',[StudentController::class,'store'])->name('student.store');
Route::POST('/student', [StudentController::class, 'assignSubjects'])->name('student.assigned');

Route::get('/subject',[SubjectController::class,'index'])->name('subject.index');
Route::get('/addsubject',[SubjectController::class,'add'])->name('addsubject');
Route::POST('/addsubject',[SubjectController::class,'store'])->name('subject.store');


Route::get('/attendance',[AttendanceController::class,'index'])->name('attendance.index');
Route::POST('/attendance',[AttendanceController::class,'store'])->name('attendance.store');
Route::get('/takeattendance',[AttendanceController::class,'create'])->name('takeattendance');


require __DIR__.'/auth.php';
