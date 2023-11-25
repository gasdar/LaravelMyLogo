@extends('layouts.master-admin')

@section('title', 'Sucursal Búsqueda')

@section('main-vista')
    <main class="admin">

        <aside class=admin__aside>
            <h3 class="text-center degradado-admin">Elija una Opción</h3>

            <nav class="admin__navegacion">
                <a href="{{ url('sucursales') }}" class="admin__link">Listados de Sucursales</a>
                <a href="{{ url('sucursales/create')}}" class="admin__link">Nueva Sucursal</a>
                <a href="{{ url('sucursales/realizar/busqueda') }}" class="admin__link">Buscar Sucursal</a>
                <a href="{{ url('relaciones/producto/sucursal') }}" class="admin__link">Listado Sucursal & Productos</a>
                <a href="{{ url('relaciones/crear/prodSuc') }}" class="admin__link">Crear Relación con Productos</a>
            </nav>
        </aside>

        <div class="solicitud">

            <h2 class="solicitud__heading text-center degradado-admin">Búsqueda de Sucursal</h2>

            <form action="{{ url('sucursales/verificar/busqueda') }}" method="post" class="solicitud__formulario">
                @csrf
                <div class="solicitud__campo">
                    <label for="codigo" class="solicitud__label form-label">Código de Sucursal:</label>
                    <input type="number" class="solicitud__input form-control" id="codigo" name="codigo" value="{{ old('codigo') }}">
                </div>
                <div class="solicitud__campo">
                    <label for="region" class="solicitud__label form-label">Región:</label>
                    <input type="text" class="solicitud__input form-control" id="region" name="region" value="{{ old('region') }}">
                </div>
                <div class="solicitud__boton">
                    <button type="submit" class="solicitud__btn">Buscar</button>
                </div>

                @if($errors->any())
                    <div class="solicitud__error alert alert-danger">
                        <ul class="solicitud__lista">
                            @foreach($errors->all() as $error)
                                <li class="solicitud__listas">{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </form>
        </div>

    </main>
@stop