<?php

use App\Http\Controllers\GroupAssigningController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\SearchGroupController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SchoolYearController;
use App\Http\Controllers\SubjectController;
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

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
//middleware('auth')->
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'showDashboard'])->name('admin.dashboard');
    Route::prefix('groups')->group(function () {
        Route::get('/', [GroupController::class, 'index'])->name('group.index');
        Route::get('/create', [GroupController::class, 'create'])->name('group.create');
        Route::post('/create', [GroupController::class, 'store'])->name('group.store');
        Route::get('/{id}/edit', [GroupController::class, 'edit'])->name('group.edit');
        Route::post('/{id}/edit', [GroupController::class, 'update'])->name('group.update');
        Route::get('/{id}/destroy', [GroupController::class, 'destroy'])->name('group.destroy');
    });
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/create', [UserController::class, 'store'])->name('user.store');
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/{id}/edit', [UserController::class, 'update'])->name('user.update');
        Route::post('/{id}/change-status', [UserController::class, 'changeStatus'])->name('user.changeStatus');
        Route::get('/{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy');
    });
    Route::prefix('grade')->group(function () {
        Route::get('/', [GradeController::class, 'index'])->name('grade.index');
        Route::get('/create', [GradeController::class, 'create'])->name('grade.create');
        Route::post('/create', [GradeController::class, 'store'])->name('grade.store');
        Route::get('/{id}/edit', [GradeController::class, 'edit'])->name('grade.edit');
        Route::post('/{id}/edit', [GradeController::class, 'update'])->name('grade.update');
        Route::get('/{id}/destroy', [GradeController::class, 'destroy'])->name('grade.destroy');
    });
    Route::prefix('school-year')->group(function () {
        Route::get('/', [SchoolYearController::class, 'index'])->name('year.index');
        Route::post('/create', [SchoolYearController::class, 'store'])->name('year.store');
        Route::get('/{id}/edit', [SchoolYearController::class, 'edit'])->name('year.edit');
        Route::post('/{id}/edit', [SchoolYearController::class, 'update'])->name('year.update');
        Route::get('/{id}/destroy', [SchoolYearController::class, 'destroy'])->name('year.destroy');
    });
    Route::prefix('students')->group(function () {
        Route::get('/', [StudentController::class, 'index'])->name('students.index');
        Route::get('/{id}/profile', [StudentController::class, 'show'])->name('students.profile');
        Route::get('/create', [StudentController::class, 'create'])->name('students.create');
        Route::post('/create', [StudentController::class, 'store'])->name('students.store');
        Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
        Route::post('/{id}/edit', [StudentController::class, 'update'])->name('students.update');
        Route::get('/{id}/destroy', [StudentController::class, 'destroy'])->name('students.destroy');
    });
    Route::prefix('teachers')->group(function () {
        Route::get('/', [TeacherController::class, 'index'])->name('teachers.index');
        Route::get('/create', [TeacherController::class, 'create'])->name('teachers.create');
        Route::post('/create', [TeacherController::class, 'store'])->name('teachers.store');
        Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('teachers.edit');
        Route::post('/{id}/edit', [TeacherController::class, 'update'])->name('teachers.update');
        Route::get('/{id}/destroy', [TeacherController::class, 'destroy'])->name('teachers.destroy');
    });
    Route::prefix('classificationTeacherGroup')->group(function () {
        Route::get('/', [GroupAssigningController::class, 'index'])->name('classificationTeacherGroup.index');
    });

    Route::prefix('profile')->group(function () {
        Route::get('/', [StudentController::class, 'indexProfile'])->name('profile.index');
        Route::get('/{id}/profile', [StudentController::class, 'show'])->name('profile.profile');
    });

    Route::prefix('student-profile')->group(function () {
        Route::get('/', [UserController::class, 'indexProfile'])->name('student-profile.index');
        Route::get('/{id}/profile', [UserController::class, 'show'])->name('student-profile.profile');
    });
    Route::prefix('user-profile')->group(function () {
        Route::get('/', [UserController::class, 'indexUserProfile'])->name('user-profile.index');
        Route::get('/{id}/userProfile', [UserController::class, 'showUser'])->name('user-profile.profile');
    });
    Route::prefix('subject')->group(function () {
        Route::get('/', [SubjectController::class, 'index'])->name('subject.index');
        Route::get('/{id}/profile', [SubjectController::class, 'show'])->name('subject.profile');
        Route::get('/create', [SubjectController::class, 'create'])->name('subject.create');
        Route::post('/create', [SubjectController::class, 'store'])->name('subject.store');
        Route::get('/{id}/edit', [SubjectController::class, 'edit'])->name('subject.edit');
        Route::post('/{id}/edit', [SubjectController::class, 'update'])->name('subject.update');
        Route::get('/{id}/destroy', [SubjectController::class, 'destroy'])->name('subject.destroy');
    });

    Route::get('export', [MyController::class, 'export'])->name('export');
    Route::get('download', [MyController::class, 'download'])->name('download');
    Route::post('import', [MyController::class, 'import'])->name('import');
});
