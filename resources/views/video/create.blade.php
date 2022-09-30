@extends('adminlte::page')

@section('title', 'Videos')

@section('content_header')
    <h1>Cargar Video</h1>
@stop

@section('content')
<form action="/videos" method="POST">
    @csrf 
    <div class="mb-3">
        <label for="" class="form-label">Dificultad</label>
        <input id="dificultad" name="dificultad" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">URL</label>
        <input id="urlvideo" name="urlvideo" type="text" class="form-control" tabindex="3">
    </div>
 
    <a href="/videos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop