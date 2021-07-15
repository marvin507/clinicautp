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
                <a href="{{ route('patient.create') }}" class="btn btn-primary btn-sm float-right">Nuevo Paciente</a>
            </div>
            <div class="panel-body">
                <table id="tablas" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Télefono</th>
                            <th>Dirección</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($patients as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->surname}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->direction}}</td>
                            <td>
                                <a href="{{ route('patient.show', $item->_id) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('patient.edit', $item->_id) }}"  class="btn btn-warning btn-sm">Editar</a>
                                <form method="post" action="{{ route('patient.destroy', $item->_id) }}" style="display: inline">
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