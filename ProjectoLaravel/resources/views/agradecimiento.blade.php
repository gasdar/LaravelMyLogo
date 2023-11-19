@extends('layouts.master')

@section('tittle', 'Vista de Agradecimiento')

@section('main-vista')
    <div class="main-agradecimiento" >
        <div class="contenido-agradecimiento">
            <h2>¡Gracias {{$nombre}}, por tu respuesta!</h2>
            <p>Con tu apoyo y retroalimentación nos ayudas cada día a mejorar nuestros servicios, te lo agradece todo nuestro equipo. Recuerda estar atento a cada una de nuestras novedades y actualizaciones, si quieres conocer las versiones más actuales dirigete a nuestro apartado de <a href="{{ url('productos')}} ">Productos</a>.</p>
        </div>

        <div class="agradecimiento-img" >
            <img src="{{ asset('assets/img/equipo.jpg') }}" alt="imagen de equipo" />
        </div>
    </div>
@stop