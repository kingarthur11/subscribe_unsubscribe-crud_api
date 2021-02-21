<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [NewsletterController::class,'index']);
Route::get('/user/{id}', [NewsletterController::class,'show']);
Route::post('/subscribe', [NewsletterController::class,'store']);
Route::put('/edit/{id}', [NewsletterController::class,'update']);
Route::delete('/unsubscribe/{id}', [NewsletterController::class,'destroy']);