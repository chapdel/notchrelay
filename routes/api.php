<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ListController;
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

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/contacts', [ContactController::class, 'subscribe']);
    Route::put('/contacts', [ContactController::class, 'subscribeOrUpdate']);
    Route::delete('/contacts', [ContactController::class, 'unsubscribe']);
    Route::get('/lists', [ListController::class, 'all']);
    Route::get('/lists/{uid}', [ContactController::class, 'index']);
});
