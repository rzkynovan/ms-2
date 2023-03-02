<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TeachersController as AdminTeacher;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/teacher', [AdminTeacher::class, 'index'])->name('student');
Route::post('/teacher-store', [AdminTeacher::class, 'store'])->name('student.store');
Route::put('/teacher/{id}', [AdminTeacher::class, 'update'])->name('student.update');