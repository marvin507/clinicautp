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
            <a href="{{ route('patient.index') }}" class="btn btn-primary btn-sm">Regresar</a>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('patient.update', $patient->_id) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <fieldset>
                
                <!-- Form Name -->
                <legend>Editar Paciente</legend>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="name">Nombre</label>  
                  <div class="col-md-5">
                  <input id="name" name="name" type="text" placeholder="nombre" value="{{$patient->name}}" class="form-control input-md" required="">
                    
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="surname">Apellido</label>  
                  <div class="col-md-5">
                  <input id="surname" name="surname" type="text" placeholder="apellido" value="{{$patient->surname}}" class="form-control input-md" required="">
                    
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="ced">Cédula</label>  
                  <div class="col-md-5">
                  <input id="ced" name="ced" type="text" placeholder="cédula" class="form-control input-md" value="{{$patient->ced}}" required="">
                    
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="birthday">Fecha de nacimiento</label>  
                  <div class="col-md-5">
                  <input id="birthday" name="birthday" type="date" placeholder="fecha de nacimiento" value="{{$patient->birthday}}" class="form-control input-md" required="">
                    
                  </div>
                </div>
                
                <!-- Textarea -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="direction">Dirección</label>
                  <div class="col-md-5">                     
                    <textarea class="form-control" id="direction" name="direction">{{$patient->direction}}</textarea>
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="phone">Teléfono</label>  
                  <div class="col-md-5">
                  <input id="phone" name="phone" type="text" placeholder="teléfono" value="{{$patient->phone}}" class="form-control input-md" required="">
                    
                  </div>
                </div>
                
                <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for=""></label>
                  <div class="col-md-4">
                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                  </div>
                </div>
                
                </fieldset>
                </form>
        </div>
      </div>
</div>

@endsection