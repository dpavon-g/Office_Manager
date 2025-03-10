<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficinas;
use App\Models\Empleados;


class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'primer_apellido' => 'required|string|max:255',
            'segundo_apellido' => 'nullable|string|max:255',
            'rol' => 'nullable|string|max:255',
            'fecha_de_nacimiento' => 'nullable|date',
            'DNI' => [
                'required',
                'string',
                'max:9',
                'unique:empleados,DNI',
                'regex:/^\d{8}[A-Z]$/',
            ],
            'email' => 'required|string|email|max:255|unique:empleados,email',
            'oficina_id' => 'required|integer|exists:oficinas,id'
        ], [
            'DNI.unique' => 'El DNI ya está registrado.',
            'email.unique' => 'El email ya está registrado.',
            'DNI.regex' => 'El DNI debe tener 8 números seguidos de una letra mayúscula.',
        ]);

        Empleados::create($request->all());
        $idOficina = $request->input('oficina_id');
        return redirect()->route('oficinas', ['idOficina' => $idOficina]);
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
    public function show(string $idEmpleado)
    {
        $empleado = Empleados::findOrFail($idEmpleado); 
        return view('empleados.infoEmpleado', compact('empleado'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'primer_apellido' => 'required|string|max:255',
            'segundo_apellido' => 'nullable|string|max:255',
            'rol' => 'nullable|string|max:255',
            'fecha_de_nacimiento' => 'nullable|date',
            'DNI' => 'required|string|size:9|regex:/^[0-9]{8}[A-Z]$/',
            'email' => 'required|string|email|max:255',
            'oficina_id' => 'required|integer|exists:oficinas,id'
        ]);

        $empleado = Empleados::findOrFail($id);
        $empleado->update($request->all());

        $Oficinas = Oficinas::all();
        return redirect()->route('home', compact('Oficinas'));
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
