@extends('layouts.app')
@section('content')
    <div class="container">
        @if (session('delete'))
            <div class="alert alert-danger">
                {{ session('delete') }}
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="{{ route('quote.create') }}" class="btn btn-primary btn-sm float-right">Nueva cita</a>
            </div>
            <div class="panel-body">
                <table id="tablas" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Médico</th>
                            <th>Paciente</th>
                            <th>Fecha Programada</th>
                            <th>Status</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($quotes as $item)
                        <tr>
                            <td>{{$item->doctor->name }} {{$item->doctor->surname }}</td>
                            <td>{{$item->patient->name}} {{$item->doctor->surname }}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->status}}</td>
                            <td>
                                <a href="{{ route('quote.show', $item->_id) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('quote.edit', $item->_id) }}"  class="btn btn-warning btn-sm">Editar</a>
                                <form method="post" action="{{ route('quote.destroy', $item->_id) }}" style="display: inline">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
          </div>
    </div>
@endsection