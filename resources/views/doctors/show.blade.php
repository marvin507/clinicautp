@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="{{ route('doctor.index') }}" class="btn btn-primary btn-sm">Regresar</a>
            </div>
            <div class="panel-body">
                <h4><strong>Nombre: </strong>{{ $doctor->name }}</h4>
                <h4><strong>Apellido: </strong>{{ $doctor->surname }}</h4>
                <h4><strong>Cédula: </strong>{{ $doctor->ced }}</h4>
                <h4><strong>Dirección: </strong>{{ $doctor->direction }}</h4>
                <h4><strong>Teléfono: </strong>{{ $doctor->phone }}</h4>
            </div>
        </div>
    </div>
@endsection