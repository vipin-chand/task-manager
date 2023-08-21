<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class, 'login']);

Route::get('login', static function (){
    return response()->json(['message' => 'Please login']);
})->name('login');

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('me', [AuthController::class, 'me']);

//    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('/projects', [ProjectController::class, 'createProject']);
    Route::get('/projects', [ProjectController::class, 'index']);
});

