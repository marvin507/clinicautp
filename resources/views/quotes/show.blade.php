@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="{{ route('quote.index') }}" class="btn btn-primary btn-sm">Regresar</a>
            </div>
            <div class="panel-body">
                <h2>Informacion del Paciente</h2>
                <table class="table">
                    <tbody>
                      <tr>
                        <th>Nombre:</th>
                        <td>{{ $quote->patient->name }}</td>
                      </tr>

                      <tr>
                        <th>Apellido:</th>
                        <td>{{ $quote->patient->surname }}</td>
                      </tr>

                      <tr>
                        <th>Cédula:</th>
                        <td>{{ $quote->patient->ced }}</td>
                      </tr>

                      <tr>
                        <th>Dirección:</th>
                        <td>{{ $quote->patient->direction }}</td>
                      </tr>

                      <tr>
                        <th>Teléfono:</th>
                        <td>{{ $quote->patient->phone }}</td>
                      </tr>
                    </tbody>
                  </table>
                  <h2>Datos de la cita</h2>
                <table class="table">
                    <tbody>
                      <tr>
                        <th>Doctor encargado:</th>
                        <td>{{ $quote->doctor->name }} {{ $quote->patient->surname }}</td>
                      </tr>

                      <tr>
                        <th>Fecha programada:</th>
                        <td>{{ $quote->date }}</td>
                      </tr>

                      <tr>
                        <th>Estado:</th>
                        <td>{{ $quote->status}}</td>
                      </tr>

                      <tr>
                        <th>Observaciones:</th>
                        <td>{{ $quote->observations }}</td>
                      </tr>

                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection