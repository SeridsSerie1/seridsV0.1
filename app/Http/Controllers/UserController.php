<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // Validación de datos de entrada
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Si la validación falla, devolver un error
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Error en la validación de datos',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Crear el nuevo usuario y generar un token
        $token = Str::random(60);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Asegurarse de que la contraseña esté encriptada
            'remember_token' => $token, // Guardar el token
        ]);

        // Devolver una respuesta exitosa con el token
        return response()->json([
            'status' => 'success',
            'message' => 'Usuario creado correctamente',
            'user' => $user,
            'token' => $token,
        ], 201);
    }

    public function login(Request $request)
    {
        // Validar las credenciales
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Error en la validación de datos',
                'errors' => $validator->errors(),
            ], 422);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Credenciales inválidas',
            ], 401);
        }

        // Generar un nuevo token
        $token = Str::random(60);
        $user->remember_token = $token;
        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Usuario autenticado correctamente',
            'user' => $user,
            'token' => $token,
        ], 200);
    }

    public function logout(Request $request)
    {
        // Obtener el usuario autenticado
        $user = User::where('remember_token', $request->bearerToken())->first();

        if ($user) {
            // Invalidar el token
            $user->remember_token = null;
            $user->save();
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Sesión cerrada correctamente',
        ], 200);
    }
}
