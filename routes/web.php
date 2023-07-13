<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\AddMateriController;
use App\Http\Controllers\DetailCourseController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/home',[CourseController::class, 'show']);

Route::resource('/course', CourseController::class)->name('index','course');

Route::get('/coursecreate',[CourseController::class, 'create']);

Route::resource('/detailCourse', DetailCourseController::class)->name('index','detailMateri');
    
Route::resource('/detailMateri', MateriController::class)->name('index','detailMateri');

Route::resource('/addMateri',AddMateriController::class);