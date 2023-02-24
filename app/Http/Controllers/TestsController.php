<?php

namespace App\Http\Controllers;

use App\Models\Tests;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class TestsController extends ApiController
{

    public function index()
    {
        $test = Tests::all();
        return $this->successResponse([
            "data" => $test,
        ]);
    }

 
    public function store(Request $request)
    {
        $test = new Tests();
        $test->name_test = $request->name_test;
        $test->description_test = $request->description_test;
        $test->date_test = $request->date_test;
        return $this->successResponse([
            "data"=>"Prueba dado de alta con éxito",
            $test->save()
        ]);
        
        
    }

    public function show(Tests $patient, $id)
    {
        $test = Tests::findOrfail($id);
        return $this->showOne($test);
    }

    public function update(Request $request, $id)
    {
        $test = Tests::findOrFail($request->id);
        $test->name_test = $request->name_test;
        $test->description_test = $request->description_test;
        $test->date_test = $request->date_test;
        return $this->successResponse([
            "Mensaje" => "¡Actualizado con éxito!",
            $test->save(), 200
        ]);
    }
    public function destroy(Request $request, $id)
    {
        $test = Tests::destroy($request->id);
        return $this->successResponse([
            "Mensaje" => "¡Eliminado con éxito!",
        ]);
    }
}
