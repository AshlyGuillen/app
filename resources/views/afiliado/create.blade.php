@extends('layouts.cuerpo')

@section('hijos')

<h1>Crear Afiliados</h1>

<form action="/empleado" class="form-control" method="POST">

<div class="row">
<div class="col">

<div class="mb-3">
    <label for="" class= "form-label">Codigo Afiliado</label>
    <input type="text" name="codigo" id="codigo" class= "form-control">
    </div>
    <div class="mb-3">
    <label for="" class= "form-label">Nombre </label>
    <input type="text" name="nombre" id="nombre" class= "form-control">
    </div>
    <div class="mb-3">
    <label for="" class= "form-label">Apellido</label>
    <input type="text" name="apellido" id="apellido" class= "form-control">
    </div>

    <div class="mb-3">
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a href="/empleado" class="btn btn-danger">Cancelar</a>
</div>
    
</form>
</div>
</div>
@endsection