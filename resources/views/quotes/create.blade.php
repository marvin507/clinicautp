@extends('layouts.app')

@section('content')

<div class="container">
    @if (session('save'))
        <div class="alert alert-success">
            {{ session('save') }}
        </div>
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{ route('quote.index') }}" class="btn btn-primary btn-sm">Regresar</a>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('quote.store') }}">
                {{ csrf_field() }}
                <fieldset>
                
                <!-- Form Name -->
                <legend>Formulario Registro Citas</legend>
                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Doctor</label>
                  <div class="col-md-5">
                    <select id="selectbasic" name="doctor_id" class="form-control">
                      <option value="" disabled selected>Seleccione el doctor</option>
                      @foreach ($doctors as $item)
                        <option value="{{$item->_id}}">{{ $item->name }} {{ $item->surname }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Doctor</label>
                  <div class="col-md-5">
                    <select id="selectbasic" name="patient_id" class="form-control">
                      <option value="" disabled selected>Seleccione el paciente</option>
                      @foreach ($patients as $item)
                        <option value="{{$item->_id}}">{{ $item->name }} {{ $item->surname }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="date">Fecha Cita</label>  
                  <div class="col-md-5">
                  <input id="date" name="date" type="date" placeholder="fecha de nacimiento" class="form-control input-md" required="">
                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Estado</label>
                  <div class="col-md-5">
                    <select id="selectbasic" name="status" class="form-control">
                      <option value="" disabled selected>Seleccione un estado</option>
                      <option value="Pendiente">Pendiente</option>
                      <option value="Realizado">Realizado</option>
                    </select>
                  </div>
                </div>
                
                <!-- Textarea -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="direction">Observaciones</label>
                  <div class="col-md-5">                     
                    <textarea class="form-control" id="direction" name="observations"></textarea>
                  </div>
                </div>
                
                
               
                <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for=""></label>
                  <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </div>
                
                </fieldset>
                </form>
        </div>
      </div>
</div>

@endsection