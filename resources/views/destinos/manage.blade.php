@extends('layouts.layout')

@section('content')

<form method="post" action="/admin/save">
    {{ csrf_field() }}
    <div class="form-row mt-4">
        <input type="hidden" name="option" value="{{ $option }}">
        <input type="hidden" name="id" value="{{ $id }}">

        <div class="form-group col-md-6">
            <label for="inputName"><strong>Nombre</strong></label>
            <input type="text" class="form-control" id="inputName" name="name"
                value="{{ $destino ? $destino->name : '' }}">
            @if ($errors->has('name'))
                <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
            @endif
        </div>
        
        <div class="form-group col-md-3">
            <label for="inputEmail"><strong>Precio</strong></label>
            <input type="text" class="form-control" id="inputPrecio" name="precio"
                value="{{ $destino ? $destino->precio : '' }}">
            @if ($errors->has('precio'))
                <small class="form-text invalid-feedback">{{ $errors->first('precio') }}</small>
            @endif
        </div>

        <div class="form-group col-md-3">
            <label for="inputFoto"><strong>Foto</strong></label>
            <input type="text" class="form-control" id="inputFoto" name="foto"
                value="{{ $destino ? $destino->foto : '' }}">
            @if ($errors->has('foto'))
                <small class="form-text invalid-feedback">{{ $errors->first('foto') }}</small>
            @endif
        </div>

        <div class="form-group col-md-6">
            <label for="inputTitle"><strong>Titulo en home</strong></label>
            <input type="text" class="form-control" id="inputTitle" name="title" 
                value="{{ $destino ? $destino->title : '' }}">
            @if ($errors->has('title'))
                <small class="form-text invalid-feedback">{{ $errors->first('title') }}</small>
            @endif
        </div>

        <div class="form-group col-md-6">
            <label for="inputDescrip"><strong>Descripción en home</strong></label>
            <input type="text" class="form-control" id="inputDescrip" name="descrip"
                value="{{ $destino ? $destino->descrip : '' }}">
            @if ($errors->has('descrip'))
                <small class="form-text invalid-feedback">{{ $errors->first('descrip') }}</small>
            @endif
        </div>

        <div class="form-group col-md-6">
            <label for="inputFullTitle"><strong>Titulo en sección</strong></label>
            <input type="text" class="form-control" id="inputFullTitle" name="full_title"
                value="{{ $destino ? $destino->full_title : '' }}">
            @if ($errors->has('full_title'))
                <small class="form-text invalid-feedback">{{ $errors->first('full_title') }}</small>
            @endif
        </div>

        <div class="form-group col-md-6">
            <label for="inputFullDescrip"><strong>Descripción en sección</strong></label>
            <input type="text" class="form-control" id="inputFullDescrip" name="full_descrip"
                value="{{ $destino ? $destino->full_descrip : '' }}">
            @if ($errors->has('full_descrip'))
                <small class="form-text invalid-feedback">{{ $errors->first('full_descrip') }}</small>
            @endif
        </div>
        
    </div>

    <button type="submit" class="btn btn-primary" style="display: {{ ($option === 'view' ? 'none' : 'block') }}">Guardar</button>

    
</form><!--FORM  -->
@endsection
@section('scripts')
<script src="js/destinos/manage.js"></script>
@endsection