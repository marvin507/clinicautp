@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="{{ route('patient.index') }}" class="btn btn-primary btn-sm">Regresar</a>
            </div>
            <div class="panel-body">
                <table class="table">
                    <tbody>
                      <tr>
                        <th>Nombre:</th>
                        <td>{{ $patient->name }}</td>
                      </tr>

                      <tr>
                        <th>Apellido:</th>
                        <td>{{ $patient->surname }}</td>
                      </tr>

                      <tr>
                        <th>Cédula:</th>
                        <td>{{ $patient->ced }}</td>
                      </tr>

                      <tr>
                        <th>Dirección:</th>
                        <td>{{ $patient->direction }}</td>
                      </tr>

                      <tr>
                        <th>Teléfono:</th>
                        <td>{{ $patient->phone }}</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection