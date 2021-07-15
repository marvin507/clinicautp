@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="{{ route('patient.index') }}" class="btn btn-primary btn-sm">Regresar</a>
            </div>
            <div class="panel-body">
                <h4><strong>Nombre: </strong>{{ $patient->name }}</h4>
                <h4><strong>Apellido: </strong>{{ $patient->surname }}</h4>
                <h4><strong>Cédula: </strong>{{ $patient->ced }}</h4>
                <h4><strong>Dirección: </strong>{{ $patient->direction }}</h4>
                <h4><strong>Teléfono: </strong>{{ $patient->phone }}</h4>
            </div>
        </div>
    </div>
@endsection