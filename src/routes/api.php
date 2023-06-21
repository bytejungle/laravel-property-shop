<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\StatisticsController;
use App\Http\Resources\AgentResource;
use App\Http\Resources\CountryResource;
use App\Http\Resources\PropertyResource;
use App\Models\Agent;
use App\Models\Country;
use App\Models\Property;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// statistic routes
Route::get('/statistics', [StatisticsController::class, 'getStatistics']);

// agent routes
Route::get('agents', [AgentController::class, 'paginateAgents']);
Route::get('agents/top', [AgentController::class, 'getTopAgents']);
Route::get('agents/{id}', [AgentController::class, 'getAgent']);

// property routes
Route::get('properties', [PropertyController::class, 'paginateProperties']);
Route::get('properties/{id}', [PropertyController::class, 'getProperty']);

// country routes
Route::get('countries', [CountryController::class, 'paginateCountries']);
Route::get('countries/{id}', [CountryController::class, 'getCountry']);
