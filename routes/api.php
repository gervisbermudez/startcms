<?php

use App\Http\Controllers\Api\PermissionsApiController;
use App\Http\Controllers\Api\UsersApiController;
use App\Models\Permissions;
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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::prefix('v1')->group(function () {
    Route::get('users', [UsersApiController::class, 'index']);
    Route::get('users/{id}', [UsersApiController::class, 'show']);
    Route::post('users', [UsersApiController::class, 'store']);
    Route::put('users/{id}', [UsersApiController::class, 'update']);
    Route::delete('users/{id}', [UsersApiController::class, 'delete']);

    Route::get('/permissions', [PermissionsApiController::class, 'index']);
});
