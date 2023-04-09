<?php

use App\Http\Controllers\FormController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('forms',FormController::class);

// Route::get('forms', [FormController::class,'index']);
// Route::post('forms', [FormController::class,'store']);
// Route::get('forms/{form}', [FormController::class,'show']);
// Route::put('forms/{form}', [FormController::class,'update']);
// Route::delete('forms/{form}', [FormController::class,'destroy']);


