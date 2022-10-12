@extends('adminlte::page')

@section('title', 'Videos')

@section('content_header')

    <div class="container">
        <div class="row">
            <div class="col">
                <img src="vendor/adminlte/dist/img/Logo_gym.png" alt="logo" class="img-fluid" width="200">
            </div>
            <div class="col">
                <div class="text-right"><a href="videos/create" class="btn btn-secondary btn-sm">Crear video</a></div>
            </div>
        </div>
    </div>

@stop

@section('content')


<table id="videos" class="table table-striped shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Dificultad</th>
            <th scope="col">Descripcion</th>
            <th scope="col">URL</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($videos as $video)
        <tr>
            <td>{{ $video->id}}</td>
            <td>{{ $video->dificultad}}</td>
            <td>{{ $video->descripcion}}</td>
            <td>
                <div class="ratio ratio-16x9">
                    <iframe width="426" height="240" src="{{$video->urlvideo}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </td>
            <td>
                <form action="{{route('videos.destroy', $video->id)}}" method="POST">
                <a href="/videos/{{$video->id}}/edit" class="btn btn-success">Reproducir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
    $(document).ready(function () {
        $('#videos').DataTable();
    });
    </script>
@stop