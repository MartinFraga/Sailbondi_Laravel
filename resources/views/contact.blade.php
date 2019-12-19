@extends('layouts.layout')

@section('content')

<!-- CENTRAL IMAGE -->
<div>
    <img src="/images/sailbondi.png" class="img-fluid max-width: 100% height: auto responsive rounded mx-auto d-block" alt="Logo Sailbondi">
</div><!-- CENTRAL IMAGE -->

<!-- BANNER -->
<div class="bg-info text-center py-2 rounded">
        <p class="lead text-white"><b>Contanos un poco sobre vos para que podamos contactarte</b></p>
    </div><!-- BANNER -->

<!--FORM  -->
@if (Session::has('flash_message'))
    <div class="alert alert-success mt-2"><strong>{{ Session::get('flash_message') }}</strong></div>
@endif
<form method="post" action="{{ route('contact.store') }}">
    {{ csrf_field() }}
    <div class="form-row mt-4">
        <div class="form-group col-md-6">
            <label for="inputName"><strong>Nombre y Apellido</strong></label>
            <input type="text" class="form-control" id="inputName" placeholder="Nombre Completo" name="name"
                value="{{old('name')}}">
            @if ($errors->has('name'))
                <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
            @endif
        </div>
        
        <div class="form-group col-md-6">
            <label for="inputEmail"><strong>Email</strong></label>
            <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email"
                value="{{old('email')}}">
            @if ($errors->has('email'))
                <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
            @endif
        </div>
        
    </div>
    <div class="form-group">
        <label for="inputMessage"><strong>Mensaje</strong></label>
        <textarea type="text" class="form-control" id="inputMessage" placeholder="Dejanos aquí tu mensaje" name="message">{{old('message')}}</textarea>
        @if ($errors->has('message'))
            <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form><!--FORM  -->
@endsection