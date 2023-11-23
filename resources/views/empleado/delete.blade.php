@extends('layouts.cuerpo')

@section('hijos')
<h1>editar Emplados</h1>

<form action="/empleado" class="form-control" method="POST">

@csrf
@Method('DELETE')
<div class="row">
<div class="col">

<div class="mb-3">
    <label for="" class= "form-label">Codigo Empleado</label>
    <input type="text" name="codigo" id="codigo" class= "form-control" value="{{$empleado->id}}">
    </div>
    <div class="mb-3">
    <label for="" class= "form-label">Nombre </label>
    <input type="text" name="nombre" id="nombre" class= "form-control" value="{{$empleado->nombre}}">
    </div>
    <div class="mb-3">
    <label for="" class= "form-label">Apellido</label>
    <input type="text" name="apellido" id="apellido" class= "form-control" value="{{$empleado->apellido}}">
    </div>

    <div class="mb-3">
  <button type="submit" class="btn btn-danger">Eliminar</button>
  <a href="/empleado" class="btn btn-primary">Cancelar</a>
</div>
    
</form>
</div>
</div>
@endsection