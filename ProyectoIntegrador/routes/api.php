<?php

use App\Http\Controllers\PracticanteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/practicantes',[PracticanteController::class,'index']);
Route::post('/practicantes',[PracticanteController::class,'store']);
Route::put('/practicantes/{practicante}',[PracticanteController::class,'update']);
Route::delete('/practicantes/{practicante}',[PracticanteController::class,'destroy']);
Route::get('/practicantes/{practicante}',[PracticanteController::class,'show']);
