<?php

use App\Http\Controllers\PatientsController;
use App\Http\Controllers\RolesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});





//* Patients */

Route::get('/patients', [PatientsController::class, 'index']);
Route::post('/patients_store', [PatientsController::class, 'store']);
Route::get('/patients_show/{id}', [PatientsController::class, 'show']);
Route::put('/patients_update/{id}', [PatientsController::class, 'update']);
Route::delete('/patients_delete/{id}', [PatientsController::class, 'destroy']);


//** Roles */
Route::get('/roles', [RolesController::class, 'index']);
Route::post('/roles_store', [RolesController::class, 'store']);
Route::get('/roles_show/{id}', [RolesController::class, 'show']);
Route::put('/roles_update/{id}', [RolesController::class, 'update']);
Route::delete('/roles_delete/{id}', [RolesController::class, 'destroy']);