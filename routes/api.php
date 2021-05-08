<?php

use App\Http\Controllers\Auth\{
    LoginController,
    LogoutController,
    MeController
};
use App\Http\Controllers\{
    CommodityController,
    CustomerController,
    SupplierController,
    UserController,
    WarehouseController
};
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

Route::post('login', LoginController::class);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', LogoutController::class);
    Route::get('me', MeController::class);

    Route::apiResource('commodities', CommodityController::class);
    Route::apiResource('users', UserController::class);
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('suppliers', SupplierController::class);
    Route::apiResource('warehouse', WarehouseController::class);
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
