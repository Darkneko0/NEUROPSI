<?php

namespace App\Http\Controllers;

use App\Models\TherapistPatients;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class TherapistPatientsController extends ApiController
{

    public function index()
    {
        $therapistPatients = TherapistPatients::all();
        return $this->successResponse([
            "data" => $therapistPatients,
        ]);
    }

    public function store(Request $request)
    {
        $therapistPatients = new TherapistPatients();
        $therapistPatients->reason_for_consultation = $request->reason_for_consultation;
        $therapistPatients->date_consultation = $request->date_consultation;
        $therapistPatients->patient_id = $request->patient_id;
        $therapistPatients->user_id = $request->user_id;
        return $this->successResponse([
            "data"=>"Terapeuta - Paciente dado de alta con éxito",
            $therapistPatients->save()
        ]);

        
    }

    public function show(TherapistPatients $patient, $id)
    {
        $therapistPatients = TherapistPatients::findOrfail($id);
        return $this->showOne($therapistPatients);
    }

    public function update(Request $request, $id)
    {
        $therapistPatients = TherapistPatients::findOrFail($request->id);
        $therapistPatients->reason_for_consultation = $request->reason_for_consultation;
        $therapistPatients->date_consultation = $request->date_consultation;
        $therapistPatients->patient_id = $request->patient_id;
        $therapistPatients->user_id = $request->user_id;

        return $this->successResponse([
            "Mensaje" => "¡Actualizado con éxito!",
            $therapistPatients->save(), 200
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $therapistPatients = TherapistPatients::destroy($request->id);
        return $this->successResponse([
            "Mensaje" => "¡Eliminado con éxito!",
        ]);
    }
}
