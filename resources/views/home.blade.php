@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Información de Servidores</div>

                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-6">
                        <h1>Servidor Primario</h1>
                        <span>IP: 45.77.193.128:5984</span>
                        <br>
                        @php
                            $respuesta = exec('curl -o /dev/null -s -w "%{http_code}\n" 45.77.193.128:5984');
                            if ($respuesta == 200) {
                                echo "<button class='btn btn-success'>Servidor Activo</button>";
                            }else{
                                echo "<button class='btn btn-danger'>Servidor Caido</button>";
                            }
                        @endphp
                    </div>
                    <div class="col-md-6">
                        <h1>Servidor Secundario</h1>
                        <span>IP: 45.77.72.213:5984</span>
                        <br>
                        @php
                            $respuesta = exec('curl -o /dev/null -s -w "%{http_code}\n" 45.77.72.213:5984');
                            if ($respuesta == 200) {
                                echo "<button class='btn btn-success'>Servidor Activo</button>";
                            }else{
                                echo "<button class='btn btn-danger'>Servidor Caido</button>";
                            }
                        @endphp
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
