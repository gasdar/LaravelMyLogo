@extends('layouts.master-admin')

@section('title', 'Producto Registro')

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

            <h2 class="solicitud__heading text-center degradado-admin">Crear Producto</h2>

            <form action="{{ url('productos') }}" method="post" class="solicitud__formulario">
                @csrf
                <div class="solicitud__campo">
                    <label for="nombre" class="solicitud__label form-label">Nombre:</label>
                    <input type="text" class="solicitud__input form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
                </div>
                <div class="solicitud__campo">
                    <label for="descripcion" class="solicitud__label form-label">Descripción:</label>
                    <input type="text" class="solicitud__input form-control" id="descripcion" name="descripcion" value="{{ old('descripcion') }}">
                </div>
                <div class="solicitud__campo">
                    <label for="precio" class="solicitud__label form-label">Precio:</label>
                    <input type="number" class="solicitud__input form-control" id="precio" name="precio" value="{{ old('precio') }}">
                </div>
                <div class="solicitud__campo">
                    <label for="estado" class="solicitud__label form-label">Estado:</label>
                    <input type="number" class="solicitud__input form-control" id="estado" name="estado" value="{{ old('estado') }}">
                </div>
                <div class="solicitud__boton">
                    <button type="submit" class="solicitud__btn">Registrar Producto</button>
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