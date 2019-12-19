@extends('layouts.layout')

@section('content')
<div class="mt-3">
<div class="jumbotron">
  <div class="row">
    <div class="col-md-4">
      <img src="{{ $destino->foto }}" alt="Imagen Producto1" class="img-fluid rounded">
    </div>
    <div class="col-md-8">
      <h1 class="display-4">{{ $destino->full_title  }}</h1>
      <p class="lead">{{ $destino->full_descrip  }}</p>

      <h5><mark>Precio: {{ $destino->precio  }} $</mark></h5>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 text-center">
      <hr class="mt-5">
      <p class="lead"><b>Selecciona la cantidad de pasajeros:</b></p>
      <form action="{{ route('carrito.add') }}" method="POST">
        {{ csrf_field() }}
        <select name="cantid" id="" class="mr-2">
          @for($i=1; $i<=5; $i++)
          <option value="{{$i}}">{{$i}}</option>
          @endfor

        </select>
      
        <input type="hidden" name="id_producto" value="{{ $destino->id }}">

        <button type="submit" class="btn btn-primary btn-lg">Agregar al carrito</button>
              
      </form>
     
      <p class="mt-5"><kbd>Para más de 5 pasajeros, contactános a nuestro call center al 0810-123-0787</kbd></p>
    
    </div>

  </div>
</div>
</div>
@endsection