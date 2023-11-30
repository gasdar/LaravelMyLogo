@extends('layouts.master-admin')

@section('title', 'Crear Sucursal & Producto')

@section('main-vista')
    <main class="admin">

        <aside class=admin__aside>
            <h3 class="text-center degradado-admin">Elija una Opción</h3>

            <nav class="admin__navegacion">
                <a href="{{ url('relaciones/producto/sucursal')}}" class="admin__link">Listado Producto & Sucursal</a>
                <a href="{{ url('relaciones/producto/categoria') }}" class="admin__link">Listado Producto & Categoria</a>
                <a href="{{ url('relaciones/crear/prodSuc') }}" class="admin__link">Crear Relación Producto & Sucursal</a>
                <a href="{{ url('relaciones/crear/prodCat') }}" class="admin__link">Crear Relación Producto & Categoria</a>
            </nav>
        </aside>

        <div class="solicitud">

            <h2 class="solicitud__heading text-center degradado-admin">Crear Registro Producto & Sucursal</h2>

            <form action="{{ url('relaciones/verificar/prodSuc') }}" method="post" class="solicitud__formulario">
                @csrf
                <div class="solicitud__campo">
                    <label for="codigoSuc" class="solicitud__label form-label">Código de Sucursal:</label>
                    <input type="number" class="solicitud__input form-control" id="codigoSuc" name="codigoSuc" value="{{ old('codigoSuc') }}">
                </div>
                <div class="solicitud__campo">
                    <label for="codigoProd" class="solicitud__label form-label">Código de Producto:</label>
                    <input type="number" class="solicitud__input form-control" id="codigoProd" name="codigoProd" value="{{ old('codigoProd') }}">
                </div>
                <div class="solicitud__campo">
                    <label for="codigoEstado" class="solicitud__label form-label">Código de Estado:</label>
                    <input type="number" class="solicitud__input form-control" id="codigoEstado" name="codigoEstado" value="{{ old('codigoEstado') }}">
                </div>
                <div class="solicitud__campo">
                    <label for="stock" class="solicitud__label form-label">Stock:</label>
                    <input type="number" class="solicitud__input form-control" id="stock" name="stock" value="{{ old('stock') }}">
                </div>
                <div class="solicitud__boton">
                    <button type="submit" class="solicitud__btn">Crear Relación</button>
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