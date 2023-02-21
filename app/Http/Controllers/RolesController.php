<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Http\Requests\StoreRolesRequest;
use App\Http\Requests\UpdateRolesRequest;
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
        $role->save();
    }

    public function show(Roles $patient, $id)
    {
        $role = Roles::findOrfail($id);
        return $this->showOne($role);
    }




    public function update(UpdateRolesRequest $request, Roles $roles)
    {
        //
    }

    public function destroy(Roles $roles)
    {
        //
    }
}
