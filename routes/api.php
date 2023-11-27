<?php

use App\Http\Controllers\Api\AuditApiController;
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

Route::post('login', [\App\Http\Controllers\AuthApiController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('get-audit-history', [AuditApiController::class, 'getHistory']);
});
