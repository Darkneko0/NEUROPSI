<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use App\Models\Roles;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Auth;


class UserController extends ApiController
{

    //Function to create a new User into the database

    public function register(Request $request)
    {
        $request->validate([
            'name_therapist' => 'required|string',
            'app_therapist' => 'required|string',
            'apm_therapist' => 'required|string',
            'specialty' =>  'required|string',
            'user_name' => 'required|string|unique:users',
            'phone' =>  'required',
            'password' => 'required|between:8,15',
            'professional_license' => 'required',

        ]);

        $user = new User();
        $user->name_therapist = $request->name_therapist;
        $user->app_therapist = $request->app_therapist;
        $user->apm_therapist = $request->apm_therapist;
        $user->specialty = $request->specialty;
        $user->user_name = $request->user_name;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->professional_license = $request->professional_license;
        $user->save();
        $token = $user->createToken("auth_token")->plainTextToken;

        return $this->successResponse([
            "data" => $user,
            "access_token" => $token,
            // "rol" => $user = Roles::find($user->rol_id),
            "message" => "Alta de usuario con éxito"
        ]);
    }


    //Function to login to the system

    public function login(Request $request)
    {
        $request->validate([
            "user_name" => 'required',
            "password" => 'required'
        ]);

        $user = User::where("user_name", "=", $request->user_name)->first();
        if (isset($user->id)) {
            if (Hash::check($request->password, $user->password)) {
                //We're gonna create a token and the answer

                $token = $user->createToken("auth_token")->plainTextToken;
                //If all the parametres are correct we're gonna return an answer OK!

                return $this->successResponse([
                    "data" => $user,
                    "access_token" => $token,
                    "Mensaje" => "¡Usuario logeado exitosamente. Bienvenido!",
                    // "rol" => $user = Roles::find($user->rol_id),
                ]);
            } else {

                //If the email and the password are incorrect we can't create the token

                return $this->errorResponse([
                    "Mensaje" => "¡Hubo un error. Favor de verificar los parámetros!",
                ]);
            }
        } else {
            return $this->errorResponse([
                "mensaje" => "¡El usuario ingresado no ha sido registrado!",
            ]);
        }
    }


    //Function to get the user Profile

    public function userProfile()
    {
        return $this->showMessage([
            "Mensaje" => "Acerca del perfil del usuario",
            "data" => auth()->user(),
        ]);
    }


    //Function to destroy the token

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return $this->showMessage([
            "Mensaje" => "¡Sesión cerrada con éxito!",
        ]);
    }



    //Function to get all the users
    public function index()
    {
        $users = User::all();

        return $this->successResponse([
            "data" => $users,
            "Mensaje" => "Usuario Admin",
        ]);
    }


    //Function to get an specific user
    public function show($id)
    {
        $users = User::findOrfail($id);
        return $this->showOne($users);
    }


    public function update(Request $request, $id)
    {

        $user = User::findOrFail($request->id);
        $user->name_therapist = $request->name_therapist;
        $user->app_therapist = $request->app_therapist;
        $user->apm_therapist = $request->apm_therapist;
        $user->specialty = $request->specialty;
        $user->user_name = $request->user_name;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->professional_license = $request->professional_license;
        return $this->successResponse([
            "Mensaje" => "¡Usuario actualizado con éxito!",
            $user->save()
        ]);
    }


    public function destroy(Request $request, $id)
    {
        $users = User::destroy($request->id);
        return $this->successResponse([
            "Mensaje" => "¡Usuario eliminado con éxito!",
            "Usuario eliminado:" => $users,
        ]);
    }
}
