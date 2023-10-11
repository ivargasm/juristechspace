<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\QuestionController;

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

Route::get('/degrees', [DegreeController::class, 'index'])->name('degrees');
Route::get('/topics/{degree_id}', [TopicController::class, 'index'])->name('topics');
Route::get('/users/{degree_id}/{topic_id}', [PartnerController::class, 'index'])->name('partners');
Route::get('/questions/{degree}/{topic}/{partner}/{partial?}', [QuestionController::class, 'index'])->name('questions');