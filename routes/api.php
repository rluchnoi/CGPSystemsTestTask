<?php

use App\Http\Controllers\ApiController;
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

Route::group(['middleware' => 'auth:sanctum'], function () {
    // to use the pagination specify 'page' parameter in yout request
    Route::get('/clients/{companyId}', [ApiController::class, 'getClients']);

    Route::get('/companies', [ApiController::class, 'getCompanies']);

    Route::get('clientCompany/{clientId}', [ApiController::class, 'getClientCompany']);
});
