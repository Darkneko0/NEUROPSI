<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class RolesController extends ApiController
{

    public function index()
    {
        $roles = Roles::all();
        return $this->successResponse([
            "data" => $roles,
        ]);
    }



    public function store(Request $request)
    {
        $role = new Roles();
        $role->role_name = $request->role_name;
        $role->description = $request->description;
        return $this->successResponse([
            "data"=>"Rol dado de alta con éxito",
            $role->save()
        ]);
       
        
    }

    public function show(Roles $patient, $id)
    {
        $role = Roles::findOrfail($id);
        return $this->showOne($role);
    }




    public function update(Request $request, $id)
    {
        $role = Roles::findOrFail($request->id);
        $role->role_name = $request->role_name;
        $role->description = $request->description;

        return $this->successResponse([
            "Mensaje" => "¡Actualizado con éxito!",
            $role->save(), 200
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $role = Roles::destroy($request->id);
        return $this->successResponse([
            "Mensaje" => "¡Eliminado con éxito!",
        ]);
    }
}
