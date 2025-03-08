<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficinas;

class OficinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Oficinas = Oficinas::all();
        return view('index', compact('Oficinas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
        ]);

        Oficinas::create($request->all());

        $Oficinas = Oficinas::all();
        return redirect()->route('home', compact('Oficinas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $idOficina)
    {
        $oficina = Oficinas::with('empleados')->findOrFail($idOficina);
        return view('oficinas.infoOficina', compact('oficina'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
        Oficinas::destroy($id);
        $Oficinas = Oficinas::all();
        return view('index', compact('Oficinas'));
    }
}
