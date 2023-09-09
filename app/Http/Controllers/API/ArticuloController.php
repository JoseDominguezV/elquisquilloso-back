<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarArticuloRequest;
use App\Http\Requests\GuardarArticuloRequest;
use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Articulo::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuardarArticuloRequest $request)
    {
        Articulo::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Articulo agregado correctamente'
        ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Articulo $articulo)
    {
        return response()->json([
            'res' => true,
            'articulo' => $articulo
        ],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActualizarArticuloRequest $request, Articulo $articulo)
    {
        $articulo -> update($request->all());
        return response()->json([
            'res' => true,
            'mensaje' => 'Articulo Actualizado Correctamente'
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articulo $articulo)
    {
        $articulo->delete();
        return response()->json([
            'res' => true,
            'mensaje' => 'Articulo Borrado Correctamente'
        ],200);
    }
}
