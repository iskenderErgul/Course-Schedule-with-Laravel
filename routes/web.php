<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;



Route::get('course',[CourseController::class, 'index'])->name('courseGet');
Route::get('courseInsert', [CourseController::class ,'courseInsert'] )->name('courseInsert');
Route::post('courseInsertPost', [CourseController::class ,'courseInsertPost'] )->name('courseInsertPost');

Route::get('courseUpdate/{id}', [CourseController::class ,'courseUpdate'] )->name('courseUpdate');
Route::post('courseUpdatePost/{id}', [CourseController::class ,'courseUpdatePost'] )->name('courseUpdatePost');

Route::get('courseDelete/{id}', [CourseController::class ,'courseDelete'] )->name('courseDelete');
