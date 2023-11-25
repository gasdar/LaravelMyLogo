@extends('layouts.master-admin')

@section('title', 'Categoria Búsqueda')

@section('main-vista')
    <main class="admin">

        <aside class=admin__aside>
            <h3 class="text-center degradado-admin">Elija una Opción</h3>

            <nav class="admin__navegacion">
                <a href="{{ url('categorias') }}" class="admin__link">Listados de Categorías</a>
                <a href="{{ url('categorias/create')}}" class="admin__link">Nueva Categoría</a>
                <a href="{{ url('categorias/realizar/busqueda') }}" class="admin__link">Buscar Categoría</a>
                <a href="{{ url('relaciones/producto/categoria') }}" class="admin__link">Listado Categoría & Productos</a>
                <a href="{{ url('relaciones/crear/prodCat') }}" class="admin__link">Crear Relación con Productos</a>
            </nav>
        </aside>

        <div class="solicitud">

            <h2 class="solicitud__heading text-center degradado-admin">Búsqueda de Categoría</h2>

            <form action="{{ url('categorias/verificar/busqueda') }}" method="post" class="solicitud__formulario">
                @csrf
                <div class="solicitud__campo">
                    <label for="codigo" class="solicitud__label form-label">Código de Categoría:</label>
                    <input type="number" class="solicitud__input form-control" id="codigo" name="codigo" value="{{ old('codigo') }}">
                </div>
                <div class="solicitud__campo">
                    <label for="nombre" class="solicitud__label form-label">Nombre:</label>
                    <input type="text" class="solicitud__input form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
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