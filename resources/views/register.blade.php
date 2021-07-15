@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('registrar') }}">
    {{ csrf_field() }}
    
    <input name="name">
    <button type="submit">Guardar</button>
</form>
@endsection