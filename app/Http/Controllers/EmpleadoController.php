<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datosEmpleado=Empleado::all();
        return view('empleado.index')->with('datosEmpleado', $datosEmpleado);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empleado=new Empleado();
        $empleado->nombre=$request->get('nombre');
        $empleado->apellido=$request->get('apellido');
       
       
        $empleado->save();
       
        return redirect('/empleado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $empleado=Empleado::find($id);
        return view('empleado.delete');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $empleado=Empleado::all();
        return view('empleado.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $empleado=Cliente::find($id);
        $empleado->nombre=$request->get('nombre');
        $empleado->apellido=$request->get('apellido');
       
       
        $empleado->save();
       
        return redirect('/empleado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Eliminar=Empleado::find($id);
        $Eliminar->delete();

        return redirect('empleado.index');
    }
}
