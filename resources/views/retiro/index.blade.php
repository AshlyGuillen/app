@extends('layouts.cuerpo')

@section('hijos')

<h1>Retiro</h1>
<h5>Codigo de Empleado: {{$empleado}}</h5>
<h5>Codigo de Afiliado: {{$afi}}</h5>
<h5>Nombre de Afiliado: {{$nombre}}</h5>
<a href="/retiro/create/{{$empleado}}/{{$afi}}/{{$nombre}} "class="btn btn-primary">Crear retiro</a>
<table class= "table table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Idempleado</th>
        <th>IdAfiliado</th>
        <th>NombreAfiliado</th>
        <th>Fecha</th>
        <th>Cantidad</th>

    </tr>
    </thead>

    <tbody>
        @foreach($datosRetiro as $retiro)
        <tr>
        <th>{{$retiro->id}}</th>
        <th>{{$retiro->codempleado}}</th>
        <th>{{$retiro->codafiliado}}</th>
        <th>{{$retiro->nombreafiliado}}</th>
        <th>{{$retiro->fecha}}</th>
        <th>{{$retiro->cantidad}}</th>

        <th><form action="/retiro/edit/{{$retiro->id}}" method="POST"> 
            @csrf
            @Method('DELETE')
        <a href="/retiro/edit/{{$retiro->id}}" class="btn btn-primary">Editar</a>
        
        <button type="submit"class="btn btn-warning">Borrar </button>
        </form>
        </th>
        </tr>

        @endforeach
        

    </tbody>

</table>