@extends('layouts.master-admin')

@section('tittle', 'Vista de Admin')

@section('main-vista')
    <h1>{{ $user }}</h1>
    <div class="cerrar-admin">
        <a href="{{ url('inicio') }}" class="btn-default-3" >Cerrar Sesion</a>
    </div>
    
@stop