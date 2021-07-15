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
            <a href="{{ route('doctor.index') }}" class="btn btn-primary btn-sm">Regresar</a>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('doctor.update', $doctor->_id) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <fieldset>
                
                <!-- Form Name -->
                <legend>Editar Doctor</legend>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="name">Nombre</label>  
                  <div class="col-md-5">
                  <input id="name" name="name" type="text" placeholder="nombre" value="{{$doctor->name}}" class="form-control input-md" required="">
                    
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="surname">Apellido</label>  
                  <div class="col-md-5">
                  <input id="surname" name="surname" type="text" placeholder="apellido" value="{{$doctor->surname}}" class="form-control input-md" required="">
                    
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="ced">Cédula</label>  
                  <div class="col-md-5">
                  <input id="ced" name="ced" type="text" placeholder="cédula" class="form-control input-md" value="{{$doctor->ced}}" required="">
                    
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="birthday">Fecha de nacimiento</label>  
                  <div class="col-md-5">
                  <input id="birthday" name="birthday" type="date" placeholder="fecha de nacimiento" value="{{$doctor->birthday}}" class="form-control input-md" required="">
                    
                  </div>
                </div>
                
                <!-- Textarea -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="direction">Dirección</label>
                  <div class="col-md-5">                     
                    <textarea class="form-control" id="direction" name="direction">{{$doctor->direction}}</textarea>
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="phone">Teléfono</label>  
                  <div class="col-md-5">
                  <input id="phone" name="phone" type="text" placeholder="teléfono" value="{{$doctor->phone}}" class="form-control input-md" required="">
                    
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="email">Email</label>  
                  <div class="col-md-5">
                  <input id="email" name="email" type="text" placeholder="email" value="{{$doctor->email}}" class="form-control input-md">
                    
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