<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retiro;

class RetiroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id,string $id2,string $nombre)
    {
        //
        $empleado=$id;
        $afi=$id2;
        $nombre=$nombre;
        $datosRetiro=Retiro::all();
        return view('retiro.index')->with('datosRetiro', $datosRetiro)
        ->with('empleado',$empleado)->with('afi',$afi)->with('nombre',$nombre);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $idem, string $idafi,string $nombre)
    {
        $empleado=$idem;
        $afiliado=$idafi;
        $nombre=$nombre;
           return view('retiro.create')->with('empleado', $empleado)->with('afiliado',$afiliado)->with('nombre',$nombre);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $retiro=new retiro();
        $retiro->codempleado=$request->get('codigoEmpleado');
        $retiro->codafiliado=$request->get('codigoAfiliado');
        $retiro->nombreafiliado=$request->get('nombreafi');
        $retiro->fecha=$request->get('fecha');
        $retiro->cantidad=$request->get('cantidad');

        $retiro->save();

        return redirect('/empleado');
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
    public function edit(string $id,string $id2,string $nombre)
    {
        
        $empleado=$id;
        $afi=$id2;
        $nombre=$nombre;
        $datosRetiro=Retiro::all();
        return view('retiro.index')->with('datosRetiro', $datosRetiro)
        ->with('empleado',$empleado)->with('afiliado',$afi)->with('nombre',$nombre);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $retiro=Retiro::find($id);
        $retiro->codempleado=$request->get('codigoEmpleado');
        $retiro->codafiliado=$request->get('codigoAfiliado');
        $retiro->nombreafiliado=$request->get('nombreafi');
        $retiro->fecha=$request->get('fecha');
        $retiro->cantidad=$request->get('cantidad');

        $retiro->save();

        return redirect('/empleado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Eliminar=Retiro::find($id);
        $Eliminar->delete();

        return redirect('retiro');
    }
}
