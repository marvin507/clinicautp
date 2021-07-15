@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="{{ route('quote.index') }}" class="btn btn-primary btn-sm">Regresar</a>
            </div>
            <div class="panel-body">
                <h4><strong>Nombre: </strong>{{ $quote->name }}</h4>
                <h4><strong>Apellido: </strong>{{ $quote->surname }}</h4>
                <h4><strong>Cédula: </strong>{{ $quote->ced }}</h4>
                <h4><strong>Dirección: </strong>{{ $quote->direction }}</h4>
                <h4><strong>Teléfono: </strong>{{ $quote->phone }}</h4>
            </div>
        </div>
    </div>
@endsection