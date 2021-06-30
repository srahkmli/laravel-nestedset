<?php

use App\Http\Controllers\ShopController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('shop', ShopController::class . '@index');

Route::get('factory', ShopController::class . '@createFactory');


Route::get('customer', ShopController::class . '@FactoryCustomer');

Route::get('order', ShopController::class . '@FactoryOrder');
Route::get('address', ShopController::class . '@FactoryAddress');