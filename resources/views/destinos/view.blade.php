@extends('layouts.layout2')

@section('content')
<div class="jumbotron">
  <div class="row">
    <div class="col-md-4">
      <img src="{{ $destino->foto }}" alt="Imagen Producto1" class="img-fluid rounded">
    </div>
    <div class="col-md-8">
      <h1 class="display-4">{{ $destino->full_title  }}</h1>
      <p class="lead">{{ $destino->full_descrip  }}</p>

      <h5>Precio: {{ $destino->precio  }} $</h5>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 text-center">
      <hr class="mt-5">
      <p class="lead"><b>Hace click y comenzá a viajar.</b></p>
      <form action="{{ route('agregarACarrito') }}" method="POST">
        {{ csrf_field() }}
        <select name="cantid" id="">
          @for($i=1; $i<=4; $i++)
          <option value="{{$i}}">{{$i}}</option>
          @endfor

        </select>
      
        <input type="hidden" name="id_producto" value="{{ $destino->id }}">

        <button type="submit" class="btn btn-primary btn-lg">Agregar al carrito</button>

      </form>
      
    </div>
  </div>
</div>
@endsection