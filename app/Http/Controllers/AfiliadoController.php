<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Afiliado;

class AfiliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id){
    $datosAfiliado=Afiliado::all();
    $idempleado=$id;
    
    return view('afiliado.index')->with('datosAfiliado', $datosAfiliado)->with('empleado', $idempleado);
       //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $nombre)
    {
        
        return view('afiliado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $afiliado=new Afiliado();
        $afiliado->nombre=$request->get('nombre');
        $afiliado->apellido=$request->get('apellido');
       
       
        $afiliado->save();
       
       return redirect("/empleado");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $afiliado=Afiliado::all();
        return view('afiliado.edit');
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
        $Eliminar=Afiliado::find($id);
        $Eliminar->delete();

        return redirect('empleado.index');
    }
}
