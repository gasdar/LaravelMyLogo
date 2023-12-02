@extends('layouts.master-admin')

@section('title', 'Actualizar Estado Producto')

@section('main-vista')
    <main class="admin">

        <aside class=admin__aside>
            <h3 class="text-center degradado-admin">Elija una Opción</h3>

            <nav class="admin__navegacion">
                <a href="{{ url('productos') }}" class="admin__link">Listados de Productos</a>
                <a href="{{ url('productos/create')}}" class="admin__link">Nuevo Producto</a>
                <a href="{{ url('productos/realizar/busqueda') }}" class="admin__link">Buscar Productos</a>
                <a href="{{ url('productos/actualizar/estado') }}" class="admin__link">Actualizar Estados de Productos por Sucursal</a>
                <a href="{{ url('relaciones/producto/sucursal') }}" class="admin__link">Listado Sucursal & Productos</a>
                <a href="{{ url('relaciones/producto/categoria') }}" class="admin__link">Listado Categorias & Productos</a>
                <a href="{{ url('relaciones/crear/prodSuc') }}" class="admin__link">Crear Relación Sucursales & Productos</a>
                <a href="{{ url('relaciones/crear/prodCat') }}" class="admin__link">Crear Relación Categorias & Productos</a>
                
            </nav>
        </aside>

        <div class="solicitud">

            <h2 class="solicitud__heading text-center degradado-admin">Actualizar Estados de Productos en Sucursal</h2>

            <form action="{{ url('productos/actualizar/verificar') }}" method="post" class="solicitud__formulario">
                @csrf
                <div class="solicitud__campo">
                    <label for="codigoSuc" class="solicitud__label form-label">Código Sucursal:</label>
                    <input type="number" class="solicitud__input form-control" id="codigoSuc" name="codigoSuc" value="{{ old('codigoSuc' )}}">
                </div>
                <div class="solicitud__campo">
                    <label for="codigoEstado" class="solicitud__label form-label">Código Estado a Actualizar:</label>
                    <input type="number" class="solicitud__input form-control" id="codigoEstado" name="codigoEstado" value="{{ old('codigoEstado') }}">
                </div>
                <div class="solicitud__boton">
                    <button type="submit" class="solicitud__btn">Actualizar Producto</button>
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