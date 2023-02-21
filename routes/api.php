<?php

use App\Http\Controllers\PatientsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\TherapistPatientsController;
use App\Http\Controllers\TherapistTestsController;
use App\Http\Controllers\RoleTherapistsController;

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


//* RoleTherapists */

Route::get('/roleTherapists', [RoleTherapistsController::class, 'index']);
Route::post('/roleTherapists_store', [RoleTherapistsController::class, 'store']);
Route::get('/roleTherapists_show/{id}', [RoleTherapistsController::class, 'show']);
Route::put('/roleTherapists_update/{id}', [RoleTherapistsController::class, 'update']);
Route::delete('/roleTherapists_delete/{id}', [RoleTherapistsController::class, 'destroy']);


//* TherapistPatients */

Route::get('/therapistPatiens', [TherapistPatientsController::class, 'index']);
Route::post('/therapistPatiens_store', [TherapistPatientsController::class, 'store']);
Route::get('/therapistPatiens_show/{id}', [TherapistPatientsController::class, 'show']);
Route::put('/therapistPatiens_update/{id}', [TherapistPatientsController::class, 'update']);
Route::delete('/therapistPatiens_delete/{id}', [TherapistPatientsController::class, 'destroy']);

//* Tests */
Route::get('/tests', [TestsController::class, 'index']);
Route::post('/tests_store', [TestsController::class, 'store']);
Route::get('/tests_show/{id}', [TestsController::class, 'show']);
Route::put('/tests_update/{id}', [TestsController::class, 'update']);
Route::delete('/tests_delete/{id}', [TestsController::class, 'destroy']);


//* TherapistTest */
Route::get('/therapistTests', [TherapistTestsController::class, 'index']);
Route::post('/therapistTests_store', [TherapistTestsController::class, 'store']);
Route::get('/therapistTests_show/{id}', [TherapistTestsController::class, 'show']);
Route::put('/therapistTests_update/{id}', [TherapistTestsController::class, 'update']);
Route::delete('/therapistTests_delete/{id}', [TherapistTestsController::class, 'destroy']);

