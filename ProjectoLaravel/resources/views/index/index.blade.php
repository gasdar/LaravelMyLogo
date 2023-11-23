@extends('layouts.master')

@section('tittle', 'Vista - Home')

@section('main-vista')
    <h2 class="titulo-cat">Categorías de Productos</h2>

    <div class="categorias">
        <div class="categoria">
            <img src="{{ asset('assets/img/categoria1.jpg') }}" alt="Imagen de categoria 1" width="700px" height="400px"/>
            <a href="{{ url('login/ingreso') }}" class="btn-default" >Hogar</a>
        </div>
        <div class="categoria">
            <img src="{{ asset('assets/img/categoria2.jpg') }}" alt="Imagen de categoria 2" width="700px" height="400px"/>
            <a href="{{ url('login/ingreso') }}" class="btn-default" >Electronica</a>
        </div>
        <div class="categoria">
            <img src="{{ asset('assets/img/categoria3.jpg') }}" alt="Imagen de categoria 3" width="700px" height="400px"/>
            <a href="{{ url('login/ingreso') }}" class="btn-default" >Adornos</a>
        </div>
    </div>
@stop