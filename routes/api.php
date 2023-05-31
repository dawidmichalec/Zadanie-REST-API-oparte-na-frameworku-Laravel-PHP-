<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\People;


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


Route::prefix('/michalec/53054')->group(function () {
    Route::get('people', [People::class, 'index']);
    Route::get('people/{id}', [People::class, 'show']);
    Route::put('people/{id}', [People::class, 'update']);
    Route::delete('people/{id}', [People::class, 'remove']);
    Route::post('people', [People::class, 'create']);
});
