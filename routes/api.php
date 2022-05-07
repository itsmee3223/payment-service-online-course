<?php

use App\Http\Controllers\orderController;
use App\Http\Controllers\webhookController;
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

Route::get('orders', [orderController::class, 'index']);
Route::post('orders', [orderController::class, 'create']);

Route::post('webhook', [webhookController::class, 'midtransHandler']);
