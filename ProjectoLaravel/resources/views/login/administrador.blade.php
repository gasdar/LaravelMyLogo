@extends('layouts.master-admin')

@section('title', 'Vista de Admin')

@section('main-vista')
    <main class="admin">

        <aside class=admin__aside>
            <h3 class="text-center degradado-admin">Elija una Opción</h3>

            <nav class="admin__navegacion">
                <a href="{{ url('sucursales') }}" class="admin__link">Sucursales</a>
                <a href="{{ url('#')}}" class="admin__link">Productos</a>
                <a href="{{ url('categorias') }}" class="admin__link">Categorias</a>
                <a href="{{ url('relaciones/producto/sucursal') }}" class="admin__link">Relaciones</a>
                <a href="{{ url('index') }}" class="admin__link">Cerrar Sesión</a>
            </nav>
        </aside>

        <div class="inicio">

            <h2 class="text-center degradado-admin">Se inicio sesión con el usuario: {{$administrador->Admin_Nombre}}.</h2>

        </div>

    </main>
@stop