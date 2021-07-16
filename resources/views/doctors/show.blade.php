@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="{{ route('doctor.index') }}" class="btn btn-primary btn-sm">Regresar</a>
            </div>
            <div class="panel-body">
                <table class="table">
                    <tbody>
                      <tr>
                        <th>Nombre:</th>
                        <td>{{ $doctor->name }}</td>
                      </tr>

                      <tr>
                        <th>Apellido:</th>
                        <td>{{ $doctor->surname }}</td>
                      </tr>

                      <tr>
                        <th>Cédula:</th>
                        <td>{{ $doctor->ced }}</td>
                      </tr>

                      <tr>
                        <th>Dirección:</th>
                        <td>{{ $doctor->direction }}</td>
                      </tr>

                      <tr>
                        <th>Teléfono:</th>
                        <td>{{ $doctor->phone }}</td>
                      </tr>

                      <tr>
                        <th>Email:</th>
                        <td>{{ $doctor->email }}</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection