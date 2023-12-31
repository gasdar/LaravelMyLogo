@extends('layouts.master-admin')

@section('title', 'Categorías Listado')

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

        <div class="listado">

            <div class="listado__heading">
                <h2 class="listado__header text-center">Registros de Categorías</h2>
            </div>

            <div class="listado__contenido">
                <table class="listado__tabla table table-bordered table-dark">
                    <thead>
                        <tr class="text-center">
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Ajustes<i class="listado__wrench fa fa-wrench"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->Cat_Id }}</td>
                            <td>{{ $categoria->Cat_Nombre }}</td>
                            <td>
                                <div class="listado__iconos">
                                    <a href="{{ url('categorias/' . $categoria->Cat_Id . '/edit') }}" class="listado__enlace"><i class="listado__edicion fa fa-pencil-alt"></i></a>
                                    <a href="{{ url('categorias/' . $categoria->Cat_Id . '/eliminar') }}" class="listado__enlace listado__enlace--modificador"><i class="listado__edicion fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </main>
@stop