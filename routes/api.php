<?php

use App\Http\Controllers\Auth\{
    LoginController,
    LogoutController,
    MeController
};
use App\Http\Controllers\{
    CommodityController,
    CustomerController,
    TransactionController,
    UserController,
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
    
    Route::prefix('/transactions')->group(function() {
        Route::get('/opname-data', [TransactionController::class, 'opname_temp']);
        Route::post('/record-sales', [TransactionController::class, 'checkout']);
        Route::post('/report', [TransactionController::class, 'sales_report']);
        Route::post('/opname', [TransactionController::class, 'stock_opname']);
        Route::post('/opname-confirmation', [TransactionController::class, 'opname_save']);
        Route::patch('/restock/{id}', [TransactionController::class, 'item_restock']);
    });

    Route::prefix('/table')->group(function() {
        Route::post('/commodities', [CommodityController::class, 'datatable']);
        Route::post('/users', [UserController::class, 'datatable']);
        Route::post('/customers', [CustomerController::class, 'datatable']);
        Route::post('/last-trans', [TransactionController::class, 'datatable']);
    });

    Route::prefix('/dashboard')->group(function() {
        Route::get('/customer', [CustomerController::class, 'total_data']);
        Route::get('/sale', [TransactionController::class, 'sale_count']);
        Route::get('/item-sold', [TransactionController::class, 'item_sold']);
        Route::get('/best-seller', [TransactionController::class, 'best_seller']);
        Route::get('/graph', [TransactionController::class, 'graph']);
    });

    Route::prefix('/dropdown')->group(function() {
        Route::get('/commodity-units', [CommodityController::class, 'unit']);
        Route::get('/commodity-types', [CommodityController::class, 'type']);
        Route::get('/customers', [CustomerController::class, 'customer_dropdown']);
        Route::get('/roles', [UserController::class, 'show_all_role']);
    });
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
