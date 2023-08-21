<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\GuardarUsuarioRequest;
use App\Http\Requests\ActualizarUsuarioRequest;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'data' => Usuario::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuardarUsuarioRequest $request)
    {
        $newUser = $request->all();
        $newUser['password'] = Hash::make($newUser['password']);
        Usuario::create($newUser);
        return response()->json([
            'status' => 'success',
            'msg' => 'Usuario creado correctamente',
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Usuario::find($id);
        if (!empty($user)) {
            return response()-> json([
                'status' => 'success',
                'data' => $user
            ]);
        } else {
            return response()-> json([
                'status' => 'failed',
                'msg' => "No existe el usuario con id: $id"
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActualizarUsuarioRequest $request, string $id)
    {
        $userToUpdate = Usuario::find($id);
        if(!$userToUpdate) {
            return response()->json([
                'status' => 'failed',
                'msg' => "No existe el usuario con id: $id."
            ], 404);
        }

        $dataToUpdate = $request->except('correo_electronico');
        $userToUpdate->update($dataToUpdate);
        return response()->json([
            'status' => 'success',
            'msg' => 'Usuario actualizado correctamente.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Usuario::find($id);
        if(!$user) {
            return response()->json([
                'status' => 'failed',
                'msg' => 'No se puede eliminar un usuario inexistente'
            ], 404);
        }

        $user->delete();
        return response()->json([
            'status' => 'success',
            'msg' => 'Se ha eliminado el usuario correctamente'
        ]);

    }
}
