@extends('adminlte::page')

@section('title', 'Editar Articulo')


@section('content')
<h1>Editar Articulo</h1>
<form action="/articulos/{{$articulo->id}}" method="POST" enctype="multipart/form-data">
    @csrf    
    @method('PUT')
   <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$articulo->nombre}}" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" value="{{$articulo->precio}}" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="cantidad" name="cantidad" type="number" step="any" class="form-control" value="{{$articulo->cantidad}}" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Categoria</label>

    <select id="categoria_id" name="categoria_id" class="form-control" tabindex="5">
    <option hidden selected value="{{$articulo->categoria_id}}">{{$articulo->name}}</option>
    @foreach ($categorias as $categoria)
    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
    @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tamaño</label>
    <input id="talla" name="talla" type="text" class="form-control" value="{{$articulo->talla}}" tabindex="7">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Color</label>
    <input id="color" name="color" type="text" class="form-control"  value="{{$articulo->color}}" tabindex="8">
  </div>
  <div class="mb-3">
    <input hidden type="text" id="oldimg" name="oldimg" value="{{$articulo->imagen}}">
    <img src="/images/articulo/{{$articulo->imagen}}" style="max-width: 100px" alt="No Found">
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Imagen</label>
    <input id="imagen" name="imagen" type="file" class="form-control" tabindex="3">
    </div>
  <a href="/articulos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@stop