@extends('layouts.cuerpo')

@section('hijos')

<h5>Codigo de Empleado: {{$empleado}}</h5>
<h5>Codigo de Afiliado: {{$afiliado}}</h5>
<h5>Nombre de Afiliado: {{$nombre}}</h5>

<br>
<form action="/retiro"class= "form-control"method ="POST">
   @csrf

   <div class="mb-3">
 <label for="" class= "form-label">Codigo empleado</label>
 <input type="text" id="codigoEmpleado" value="{{$empleado}}" name="codigoEmpleado" class= "form-control">
 </div>

 <div class="mb-3">
 <label for="" class= "form-label">Codigo afiliado</label>
 <input type="text" id="codigoAfiliado" value="{{$afiliado}}"name="codigoAfiliado" class= "form-control">
 </div>

 <div class="mb-3">
 <label for="" class= "form-label">Nombre afiliado</label>
 <input type="text" id="nombreafi" value="{{$nombre}}" name="nombreafi" class= "form-control" >
 </div>

 <div class="mb-3">
 <label for="" class= "form-label">Fecha</label>
 <input type="text" id="fecha" value="{{fecha}}" name="fecha" class= "form-control" >
 </div>

 <div class="mb-3">
 <label for="" >Cantidad</label>
 <input type="text" id="cantidad" value="cantidad" name="cantidad" class= "form-control" >
 </div>

 <div class="mb-3"> 
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/empleado" class="btn btn-danger">Cancelar</a>

 </div>



</form>