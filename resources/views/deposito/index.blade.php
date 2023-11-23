@extends('layouts.cuerpo')

@section('hijos')

<h1>Deposito</h1>
<h5>Codigo de Empleado: {{$empleado}}</h5>
<h5>Codigo de Afiliado: {{$afi}}</h5>
<h5>Nombre de Afiliado: {{$nombre}}</h5>

<br><a href="/deposito/create/{{$empleado}}/{{$afi}}/{{$nombre}}" class="btn btn-primary">Crear Desposito</a>
<table class="table table-hover">
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
        @foreach($datosDeposito as $deposito)
        <tr>
        <th>{{$deposito->id}}</th>
        <th>{{$deposito->codempleado}}</th>
        <th>{{$deposito->codafiliado}}</th>
        <th>{{$deposito->nombreafiliado}}</th>
        <th>{{$deposito->fecha}}</th>
        <th>{{$deposito->cantidad}}</th>
        <th><form action="/deposito/edit/{{$deposito->id}}" method="POST"> 
            @csrf
            @Method('DELETE')
        <a href="/deposito/edit/{{$deposito->id}}" class="btn btn-primary">Editar</a>
        
        <button type="submit"class="btn btn-warning">Borrar </button>
        </form>
        </th>
        </tr>

        @endforeach

    </tbody>

</table>