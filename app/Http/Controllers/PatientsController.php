<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class PatientsController extends ApiController
{

    public function index()
    {
        $addresses = Patients::all();

        return $this->successResponse([
            "data" => $addresses,
        ]);
    }


    public function store(Request $request)
    {
        $patient = new Patients();
        $patient->name_patient = $request->name_patient;
        $patient->app_patient = $request->app_patient;
        $patient->apm_patient = $request->apm_patient;
        $patient->birth = $request->birth;
        $patient->gender = $request->gender;
        $patient->email = $request->email;
        $patient->phone = $request->phone;
        $patient->save();
    }

    public function show(Patients $patient, $id)
    {
     
        $patient = Patients::findOrfail($id);
        return $this->showOne($patient);
    }


    public function update(Request $request, $id)
    {

        $patient = Patients::findOrFail($request->id);
        $patient->name_patient = $request->name_patient;
        $patient->app_patient = $request->app_patient;
        $patient->apm_patient = $request->apm_patient;
        $patient->birth = $request->birth;
        $patient->gender = $request->gender;
        $patient->email = $request->email;
        $patient->phone = $request->phone;
        return $this->successResponse([
            "Mensaje" => "¡Actualizado con éxito!",
            $patient->save(), 200
        ]);
    }


    public function destroy(Request $request, $id)
    {
        $patient = Patients::destroy($request->id);
        return $this->successResponse([
            "Mensaje" => "¡Eliminado con éxito!",
        ]);
    }
}
