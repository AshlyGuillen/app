<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposito;

class DepositoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id,string $id2,string $nomb)
    {
        //
        $empleado=$id;
        $afi=$id2;
        $nombre=$nomb;
       
        $datosDeposito=Deposito::all();
        return view('deposito.index')->with('datosDeposito', $datosDeposito)
        ->with('empleado',$empleado)->with('afi',$afi)
        ->with('nombre',$nombre);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $idem, string $idafi, string $nombre)
    {
        $empleado=$idem;
        $afiliado=$idafi;
        $nombre=$nombre;
           return view('deposito.create')->with('empleado', $empleado)->with('afiliado',$afiliado)->with('nombre',$nombre);
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $deposito=new Deposito();
        $deposito->codempleado=$request->get('codigoEmpleado');
        $deposito->codafiliado=$request->get('codigoAfiliado');
        $deposito->nombreafiliado=$request->get('nombreafi');
        $deposito->fecha=$request->get('fecha');
        $deposito->cantidad=$request->get('cantidad');

        $deposito->save();

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
        $datosdeposito=Deposito::all();
        return view('retiro.index')->with('datosdeposito', $datosdeposito)
        ->with('empleado',$empleado)->with('afiliado',$afi)->with('nombre',$nombre);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $deposito=Deposito::find($id);
        $deposito->codempleado=$request->get('codigoEmpleado');
        $deposito->codafiliado=$request->get('codigoAfiliado');
        $deposito->nombreafiliado=$request->get('nombreafi');
        $deposito->fecha=$request->get('fecha');
        $deposito->cantidad=$request->get('cantidad');

        $deposito->save();

        return redirect('/empleado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Eliminar=Deposito::find($id);
        $Eliminar->delete();

        return redirect('deposito');
    }
}
