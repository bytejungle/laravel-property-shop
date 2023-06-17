<?php

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

Route::get('agents', function () {
    return new AgentResource(Agent::paginate());
});

Route::get('agents/{id}', function (string $id) {
    return new AgentResource(Agent::findOrFail($id));
});

Route::get('properties', function () {
    return new PropertyResource(Property::paginate());
});

Route::get('properties/{id}', function (string $id) {
    return new PropertyResource(Property::findOrFail($id));
});

Route::get('countries', function () {
    return new CountryResource(Country::paginate());
});

Route::get('countries/{id}', function (string $id) {
    return new CountryResource(Country::findOrFail($id));
});
