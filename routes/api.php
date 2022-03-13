<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentCourseController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Add Students
Route::post('student',[StudentController::class,'store']);
// Retrieve Students
Route::get('student',[StudentController::class,'index']);
// Retrieve Specific Student
Route::get('student/{id}',[StudentController::class,'show']);
// Update Specific Student
Route::put('student/{id}',[StudentController::class,'update']);
// Delete Specific Student
Route::delete('student/{id}',[StudentController::class,'destroy']);



// Add Courses
Route::post('course',[CourseController::class,'store']);
// Retrieve Courses
Route::get('course',[CourseController::class,'index']);
// Retrieve Specific Course
Route::get('course/{id}',[CourseController::class,'show']);
// Update Courses
Route::put('course/{id}',[CourseController::class,'update']);
// Delete Courses
Route::delete('course/{id}',[CourseController::class,'destroy']);




// Add Students Course
Route::post('student-course',[StudentCourseController::class,'store']);
// Retrieve Students Course
Route::get('student-course',[StudentCourseController::class,'index']);
// Retrieve Students Course
Route::get('student-course/{id}',[StudentCourseController::class,'show']);
// Update Students Course
Route::put('student-course/{id}',[StudentCourseController::class,'update']);
// Delete Students Course
Route::delete('student-course/{id}',[StudentCourseController::class,'destroy']);


// login
Route::post('login',[UserController::class,'login']);