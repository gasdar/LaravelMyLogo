@extends('layouts.master-admin')

@section('title', 'Sucursal & Productos')

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

        <div class="listado">

            <div class="listado__heading">
                <h2 class="listado__header text-center">Listado Sucursal & Productos</h2>
            </div>

            <div class="listado__contenido">
                <table class="listado__tabla table table-bordered table-dark">
                    <thead>
                        <tr class="text-center">
                            <th>Sucursal</th>
                            <th>Producto</th>
                            <th>Stock</th>
                            <th>Ajustes<i class="listado__wrench fa fa-wrench"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($prodSuc as $relacion)
                        <tr>
                            <td>{{ $relacion->sucursal->Suc_Region }}, {{$relacion->sucursal->Suc_Direccion}}</td>
                            <td>{{ $relacion->producto->Prod_Nombre }}, ({{$relacion->producto->Prod_Precio}})</td>
                            <td>{{ $relacion->Stock }}</td>
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