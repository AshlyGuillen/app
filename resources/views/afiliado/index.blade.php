@extends('layouts.cuerpo')

@section('hijos')

codigo de empleado {{$empleado}}
<br>
<h1>Lista de afiliados</h1>
<a href="\afiliado\create">Crear</a>
<table class="table table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>
            acciones
        </th>
    </tr>
    </thead>

    <tbody>
        @foreach($datosAfiliado as $afiliado)
        <tr>
            <th>{{$afiliado->id}}</th>
            <th>{{$afiliado->nombre}}</th>
            <th>{{$afiliado->apellido}}</th>
            <th><a href="/deposito/{{$empleado}}/{{$afiliado->id}}/{{$afiliado->nombre}}">Deposito</a></th>
            <th><a href="/retiro/{{$empleado}}/{{$afiliado->id}}/{{$afiliado->nombre}}">Retiro</a></th>
            <th><form action="/afiliado/edit/{{$empleado->id}}" method="POST"> 
            @csrf
            @Method('DELETE')
        <a href="/afiliado/edit/{{$empleado->id}}" class="btn btn-primary">Editar</a>
        
        <button type="submit"class="btn btn-warning">Borrar </button>   
    </form></th>
            
        </tr>

        @endforeach

    </tbody>



</table>