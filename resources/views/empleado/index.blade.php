@extends('layouts.cuerpo')

@section('hijos')
<h1>Lista de empleados</h1>
<a href="\empleado\create">Crear</a>
<table class="table table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Accion</th>
    </tr>
    </thead>

    <tbody>
        @foreach($datosEmpleado as $empleado)
        <tr>
            <th>{{$empleado->id}}</th>
            <th>{{$empleado->nombre}}</th>
            <th>{{$empleado->apellido}}</th>

            <th><a href="/afiliado/{{$empleado->id}}">Afiliados</a></th>
            <th><form action="/afiliado/edit/{{$empleado->id}}" method="POST"> 
            @csrf
            @Method('DELETE')
        <a href="/afiliado/edit/{{$empleado->id}}" class="btn btn-primary">Editar</a>
        
        <button type="submit"class="btn btn-warning">Borrar </button></form></th>

        </tr>

        @endforeach

    </tbody>

</table>
@endsection