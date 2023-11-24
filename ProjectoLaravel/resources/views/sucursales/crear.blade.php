@extends('layouts.master-admin')

@section('title', 'Sucursal Registro')

@section('main-vista')
    <main class="admin">

        <aside class=admin__aside>
            <h3 class="text-center degradado-admin">Elija una Opción</h3>

            <nav class="admin__navegacion">
                <a href="{{ url('sucursales') }}" class="admin__link">Listados de Sucursales</a>
                <a href="{{ url('sucursales/create')}}" class="admin__link">Nueva Sucursal</a>
                <a href="{{ url('sucursales/realizar/busqueda') }}" class="admin__link">Buscar Sucursal</a>
                <a href="#" class="admin__link">Crear Relación</a>
            </nav>
        </aside>

        <div class="solicitud">

            <h2 class="solicitud__heading text-center degradado-admin">Crear Sucursal</h2>

            <form action="{{ url('sucursales') }}" method="post" class="solicitud__formulario">
                @csrf
                <div class="solicitud__campo">
                    <label for="region" class="solicitud__label form-label">Región:</label>
                    <input type="text" class="solicitud__input form-control" id="region" name="region" value="{{ old('region') }}">
                </div>
                <div class="solicitud__campo">
                    <label for="direccion" class="solicitud__label form-label">Dirección:</label>
                    <input type="text" class="solicitud__input form-control" id="direccion" name="direccion" value="{{ old('direccion') }}">
                </div>
                <div class="solicitud__boton">
                    <button type="submit" class="solicitud__btn">Registrar Sucursal</button>
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