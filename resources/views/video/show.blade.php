@extends('adminlte::page')

@section('title', 'Wach')

@section('content_header')
    <h1>Wach</h1>
@stop

@section('content')
<div class="mb-3">
        <label for="" class="form-label">Dificultad</label>
        <label id="dificultad" name="dificultad" type="text" class="form-control">{{$video->dificultad}}</label>
</div>
<div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <label id="descripcion" name="descripcion" type="text" class="form-control">{{$video->descripcion}}</label>
</div>
<div class="text-center">
    <div class="ratio ratio-16x9">
        <iframe width="854" height="480" src="{{$video->urlvideo}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop