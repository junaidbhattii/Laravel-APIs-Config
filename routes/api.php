<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\apcontroller;
use App\Http\Controllers\apiController;

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

// Route::get("list/{id?}",[apcontroller::class,'showData']);

// Route::get("listt/{id?}",[apcontroller::class,'getData']);


//GET DATA

Route::get("getlist/{id?}",[apiController::class,'getData']);

// POST DATA (ADD)

Route::post("addlist",[apiController::class,'addData']);

// PUT DATA (UPDATE)

Route::put("updatelist/{id}",[apiController::class,'updateData']);

// PUT DATA (UPDATE)

Route::put("deletelist/{id}",[apiController::class,'deleteData']);

// SEARCH DATA (SEARCH)

Route::get("searchlist/{name}",[apiController::class,'searchData']);

// VALIDATE DATA (VALIDATE)

Route::get("validate",[apiController::class,'validateData']);
