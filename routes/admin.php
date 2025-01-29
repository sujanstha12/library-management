<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BookCategoryController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\BookIssueController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\StudentUserCcontroller;

Route::get('dashboard',[DashboardController::class,'index'])->name('index');
Route::get('login',[AuthController::class,'loginpage'])->name('loginpage');
Route::post('login',[AuthController::class,'login'])->name('login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::resource('book-categories', BookCategoryController::class);
Route::resource('books', BookController::class);
Route::resource('book-issues', BookIssueController::class);
Route::resource('student-register',StudentUserCcontroller::class);
