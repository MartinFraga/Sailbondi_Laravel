@extends('layouts.layout2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PASAJES</div>

                <div class="card-body">
                    ID DE PASAJE: {{ $id  }}
                </div>

                <div class="card-body">
                    PASAJE: {{ $pasaje  }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
