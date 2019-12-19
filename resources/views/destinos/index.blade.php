@extends('layouts.layout')

@section('content')
<div class="container my-5">
    @if (Session::has('flash_message'))
        <div class="alert alert-success mt-2"><strong>{{ Session::get('flash_message') }}</strong></div>
    @endif
    <div class="card">
        <div class="card-header text-center">
            Destinos
            <button class="btn btn-success btn-sm float-right" onclick="window.location.href = '/admin/manage/add'">Agregar</button>
        </div>
        <ul class="list-group list-group-flush">
            @foreach($destinos as $destino)
            <li class="list-group-item">{{ $destino->name }}
                <button class="btn btn-danger btn-sm float-right"onclick="eliminar({{$destino->id}})">Eliminar</button>
                <button class="btn btn-primary btn-sm float-right mr-2" onclick="window.location.href = '/admin/manage/edit/{{$destino->id}}'">Editar</button>
                <button class="btn btn-warning btn-sm float-right mr-2" onclick="window.location.href = '/admin/manage/view/{{$destino->id}}'">Ver</button>
            </li>

            @endforeach
        </ul>
    </div>

</div>
@endsection
@section('scripts')
<script src="js/destinos/index.js"></script>
@endsection