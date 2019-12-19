@extends('layouts.layout')

@section('content')

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <table border="0" width="100%">
                <td width="50%">
                    Producto
                </td>
                <td width="20%" style="text-align:left;">
                    Cantidad
                </td>
                <td width="20%" style="text-align:left;">
                    Precio
                </td>
                <td style="text-align:right;">
                    Acciones
                </td>
            </table>
        </div>
        <ul class="list-group list-group-flush">
            @foreach($carrito as $item)
            <li class="list-group-item">
                <table border="0" width="100%">
                    <td width="50%">
                        {{ $item->destino->title }}
                    </td>
                    <td width="20%" style="text-align:left;">
                        {{ $item->quantity }}
                    </td>
                    <td  width="20%" style="text-align:left;">
                        {{ $item->destino->precio }}
                    </td>
                    <td>
                        <button class="btn btn-danger btn-sm float-right" onclick="eliminar({{ $item->id }})">Eliminar</button>
                    </td>
                </table>
            </li>
            @endforeach
        </ul>
        <div class="card-footer">
            <table border="0" width="100%">
                <td width="50%">
                    <b>Total</b>
                </td>
                <td width="20%">
                    @php
                        $total = 0;
                        foreach($carrito as $item){
                            $total += $item->quantity;
                        }
                        echo $total;                        
                    @endphp
                </td>
                <td width="20%" style="text-align:left;">
                    @php
                        $total = 0;
                        foreach($carrito as $item){
                            $total += $item->destino->precio;
                        }
                        echo $total;                        
                    @endphp
                </td>
                <td>
                    <button class="btn btn-success btn-sm float-right" onclick="guardar()">COMPRAR</button>
                </td>
            </table>
        </div>
    </div>
</div>
<!--FORM  -->
@if (Session::has('flash_message'))
<div class="alert alert-success mt-2"><strong>{{ Session::get('flash_message') }}</strong></div>
@endif

@endsection
@section('scripts')
    <script src="/js/carrito/show.js"></script>
@endsection