@extends('adminlte::page')

@section('title', 'Editar Articulo')


@section('content')
<h1>Editar Articulo</h1>
<form action="/categorias/{{$categoria->id}}" method="POST" enctype="multipart/form-data">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$categoria->nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$categoria->descripcion}}">
  </div>
  <div class="mb-3">
    <input hidden type="text" id="oldimg" name="oldimg" value="{{$categoria->imagen}}">
    <img src="/images/categoria/{{$categoria->imagen}}" style="max-width: 100px" alt="No Found">
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <input id="imagen" name="imagen" type="file" class="form-control" tabindex="3">
    </div>
  <a href="/categorias" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@stop