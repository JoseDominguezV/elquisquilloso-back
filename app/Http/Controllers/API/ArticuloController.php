<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
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
            'msg' => 'Paciente Guardado Correctamente'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
