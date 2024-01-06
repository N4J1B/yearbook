<?php

<<<<<<< HEAD
use App\Http\Controllers\MuridController;
=======
>>>>>>> bbd35ca4a2bebd9084ef4a35e345c66d6159f7c3
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
<<<<<<< HEAD

Route::apiResource('murid', MuridController::class);
=======
>>>>>>> bbd35ca4a2bebd9084ef4a35e345c66d6159f7c3
