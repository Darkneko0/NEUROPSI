<?php

namespace App\Http\Controllers;

use App\Models\TherapistTests;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class TherapistTestsController extends ApiController
{

    public function index()
    {
        $therapistTests = TherapistTests::all();
        return $this->successResponse([
            "data" => $therapistTests,
        ]);
    }

    public function store(Request $request)
    {
        $therapistTests = new TherapistTests();
        $therapistTests->therapist_id = $request->therapist_id;
        $therapistTests->test_id = $request->test_id;
        $therapistTests->save();
    }

    public function show(TherapistTests $patient, $id)
    {
        $therapistTests = TherapistTests::findOrfail($id);
        return $this->showOne($therapistTests);
    }


    public function update(Request $request, $id)
    {
        $therapistTests = TherapistTests::findOrFail($request->id);
        $therapistTests->therapist_id = $request->therapist_id;
        $therapistTests->test_id = $request->test_id;

        return $this->successResponse([
            "Mensaje" => "¡Actualizado con éxito!",
            $therapistTests->save(), 200
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $therapistTests = TherapistTests::destroy($request->id);
        return $this->successResponse([
            "Mensaje" => "¡Eliminado con éxito!",
        ]);
    }
}
