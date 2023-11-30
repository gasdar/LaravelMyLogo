@extends('layouts.master-admin')

@section('title', 'Productos Listado')

@section('main-vista')
    <main class="admin">

        <aside class=admin__aside>
            <h3 class="text-center degradado-admin">Elija una Opción</h3>

            <nav class="admin__navegacion">
                <a href="{{ url('productos') }}" class="admin__link">Listados de Productos</a>
                <a href="{{ url('productos/create')}}" class="admin__link">Nuevo Producto</a>
                <a href="{{ url('productos/realizar/busqueda') }}" class="admin__link">Buscar Productos</a>
                <a href="{{ url('relaciones/producto/sucursal') }}" class="admin__link">Listado Sucursal & Productos</a>
                <a href="{{ url('relaciones/producto/categoria') }}" class="admin__link">Listado Categorias & Productos</a>
                <a href="{{ url('relaciones/crear/prodSuc') }}" class="admin__link">Crear Relación Sucursales & Productos</a>
                <a href="{{ url('relaciones/crear/prodCat') }}" class="admin__link">Crear Relación Categorias & Productos</a>
                
            </nav>
        </aside>

        <div class="listado">

            <div class="listado__heading">
                <h2 class="listado__header text-center">Registros de Productos</h2>
            </div>

            <div class="listado__contenido">
                <table class="listado__tabla table table-bordered table-dark">
                    <thead>
                        <tr class="text-center">
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Estado</th>
                            <th>Ajustes<i class="listado__wrench fa fa-wrench"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                        <tr>
                            <td>{{ $producto->Prod_Id }}</td>
                            <td>{{ $producto->Prod_Nombre }}</td>
                            <td>{{ $producto->Prod_Descripcion }}</td>
                            <td>{{ $producto->Prod_Precio }}</td>
                            <td>{{ $producto->Prod_Estado }}</td>
                            <td>
                                <div class="listado__iconos">
                                    <a href="#" class="listado__enlace"><i class="listado__edicion fa fa-pencil-alt"></i></a>
                                    <a href="#" class="listado__enlace listado__enlace--modificador"><i class="listado__edicion fa fa-trash"></i></a>
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