<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccesoRequest;
use App\Http\Requests\GuardarUsuarioRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AutenticarController extends Controller
{
    public function registro(GuardarUsuarioRequest $request) {
        $newUser = $request->all();
        $newUser['password'] = Hash::make($newUser['password']);
        Usuario::create($newUser);
        return response()->json([
            'status' => 'success',
            'msg' => 'Usuario registrado correctamente',
        ], 200);
    }

    public function accederCuenta(AccesoRequest $request) {
        $usuario = Usuario::where('correo_electronico', $request->input('correo_electronico'))->first();

        if(!$usuario || !Hash::check($request->password, $usuario->password)) {
            $response = [
                'status' => 'failed',
                'error' => 'Las credenciales son incorrectas.'
            ];
            return response()->json($response);
        }

        $token = $usuario->createToken($request->input('correo_electronico'))->plainTextToken;

        return response()->json([
            'status' => 'success',
            'id' => $usuario->id,
            'token' => $token,
        ]); 
    }

    public function cerrarSesion(Request $request) {
        $request->usuario()->currentAccesToken()->delete();
        return response()->json([
            'status' => 'success',
            'msg' => 'Se cerró sesión correctamente.',
        ]); 
    }
}
