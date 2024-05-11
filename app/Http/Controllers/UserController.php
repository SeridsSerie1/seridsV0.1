<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    

    public function register(Request $request)
    {
        //Validate input data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        //If validation fails, return an error
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Error en la validación de datos',
                'errors' => $validator->errors(),
            ], 422);
        }

        //Create the new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), //Ensure that the password is encrypted
        ]);

        //Return a Successful Response
        return response()->json([
            'status' => 'success',
            'message' => 'Usuario creado correctamente',
            'user' => $user,
        ], 201);
    }
}