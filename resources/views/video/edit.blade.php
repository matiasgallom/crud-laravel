@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Editar registro</h1>
@stop

@section('content')
<form action="/videos/{{$video->id}}" method="POST">
    @csrf 
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Dificultad</label>
        <input id="dificultad" name="dificultad" type="text" class="form-control" value="{{$video->dificultad}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$video->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">URL</label>
        <input id="urlvideo" name="urlvideo" type="text" class="form-control" value="{{$video->urlvideo}}">
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