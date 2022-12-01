<?php
use App\Http\Controllers\TiketController;
use App\Http\Controllers\BayaranController;
use App\Http\Controllers\AuthController;
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

//public route
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/tikets', [TiketController::class, 'index']);
Route::get('/tikets/{id}', [TiketController::class, 'show']);
Route::post('/tikets', [TiketController::class, 'store']);
Route::put('/tikets/{id}', [TiketController::class, 'update']);
Route::delete('/tikets/{id}', [TiketController::class, 'destroy']);

Route::get('/bayarans', [BayaranController::class, 'index']);
Route::get('/bayarans/{id}', [BayaranController::class, 'show']);
Route::post('/bayarans', [BayaranController::class, 'store']);
Route::put('/bayarans/{id}', [BayaranController::class, 'update']);
Route::delete('/bayarans/{id}', [BayaranController::class, 'destroy']);

//protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::resource('tikets', TiketController::class)->except('create', 'edit', 'show', 'index');
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::resource('bayarans', BayaranController::class)->except('create', 'edit', 'show', 'index');
});