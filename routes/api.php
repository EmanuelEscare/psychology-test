<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


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

Route::post('/getCount', [TestController::class, 'getCount']);
Route::post('/getAll', [TestController::class, 'getAll']);
Route::post('/getFiltered', [TestController::class, 'getFiltered']);
Route::post('/newResult', [TestController::class, 'newResult']);

Route::get('/getbytes/{number}', function ($number) {
    return round($number/1000);
})->name('getbytes');

