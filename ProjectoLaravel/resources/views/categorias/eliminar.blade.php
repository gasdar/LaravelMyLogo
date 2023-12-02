@extends('layouts.master-admin')

@section('title', 'Eliminar Categoria')

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

            <h2 class="solicitud__heading text-center degradado-admin ">¿Esta seguro que desea eliminar la siguiente categoría?</h2>

            <form action="{{ url('categorias/' . $categoria->Cat_Id) }}" method="post" class="solicitud__formulario">
                @csrf
                @method('DELETE')
                
                <div class="solicitud__campo">
                    <p><span class="solicitud__span">Nombre:</span> {{$categoria->Cat_Nombre}}</p>
                </div>

                <div class="solicitud__boton">
                    <button type="submit" class="solicitud__btn solicitud__btn--modificador">Eliminar Categoría</button>
                    <a type="submit" href="{{ url('categorias')}}" class="solicitud__btn">Volver</a>
                </div>
            </form>
        </div>

    </main>
@stop