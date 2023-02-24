<?php

namespace App\Http\Controllers;

use App\Models\RoleTherapists;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateRoleTherapistsRequest;
use App\Http\Controllers\ApiController;

class RoleTherapistsController extends ApiController
{

    public function index()
    {
        $roleTherapists = RoleTherapists::all();
        return $this->successResponse([
            "data" => $roleTherapists,
        ]);
    }


    public function store(Request $request)
    {
        $roleTherapists = new RoleTherapists();
        $roleTherapists->role_id = $request->role_id;
        $roleTherapists->user_id = $request->user_id;
        return $this->successResponse([
            "data"=>"Rol Terapeuta dado de alta con éxito",
            $roleTherapists->save()
        ]);
        
    }


    public function show(RoleTherapists $patient, $id)
    {
        $roleTherapists = RoleTherapists::findOrfail($id);
        return $this->showOne($roleTherapists);
    }

    public function update(Request $request, $id)
    {
        $roleTherapists = RoleTherapists::findOrFail($request->id);
        $roleTherapists->role_id = $request->role_id;
        $roleTherapists->user_id = $request->user_id;

        return $this->successResponse([
            "Mensaje" => "¡Actualizado con éxito!",
            $roleTherapists->save(), 200
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $roleTherapists = RoleTherapists::destroy($request->id);
        return $this->successResponse([
            "Mensaje" => "¡Eliminado con éxito!",
        ]);
    }
}
