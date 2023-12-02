@extends('layouts.master-admin')

@section('title', 'Actualizar Relación Sucursal & Producto')

@section('main-vista')
    <main class="admin">

        <aside class=admin__aside>
            <h3 class="text-center degradado-admin">Elija una Opción</h3>

            <nav class="admin__navegacion">
                <a href="{{ url('categorias') }}" class="admin__link">Listados de Categorías</a>
                <a href="{{ url('categorias/create') }}" class="admin__link">Nueva Categoría</a>
                <a href="{{ url('categorias/realizar/busqueda') }}" class="admin__link">Buscar Categoría</a>
                <a href="{{ url('relaciones/producto/categoria') }}" class="admin__link">Listado Categoría & Productos</a>
                <a href="{{ url('relaciones/crear/prodCat') }}" class="admin__link">Crear Relación con Productos</a>
            </nav>
        </aside>

        <div class="solicitud">

            <h2 class="solicitud__heading text-center degradado-admin">Actualizar Relación Producto & Sucursal</h2>

            <form action="{{ url('relaciones/update/prodSuc/' . $prodSuc->producto->Prod_Id . '/' . $prodSuc->sucursal->Suc_Id) }}" method="post" class="solicitud__formulario">
                @method('PUT')
                @csrf
                <div class="solicitud__campo">
                    <p><span class="solicitud__span">Nombre de Sucursal:</span> {{$prodSuc->sucursal->Suc_Region . ', ' . $prodSuc->sucursal->Suc_Direccion}}</p>
                </div>
                <div class="solicitud__campo">
                    <p><span class="solicitud__span">Nombre de Producto:</span> {{$prodSuc->producto->Prod_Nombre}}</p>
                </div>
                <div class="solicitud__campo">
                    <label for="estado" class="solicitud__label form-label">Codigo Estado:</label>
                    <input type="number" class="solicitud__input form-control" id="estado" name="estado" value="{{$prodSuc->EstadoId }}">
                </div>
                <div class="solicitud__campo">
                    <label for="stock" class="solicitud__label form-label">Stock:</label>
                    <input type="number" class="solicitud__input form-control" id="stock" name="stock" value="{{$prodSuc->Stock }}">
                </div>
                <div class="solicitud__boton">
                    <button type="submit" class="solicitud__btn">Actualizar</button>
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