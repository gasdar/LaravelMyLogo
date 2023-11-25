@extends('layouts.master-admin')

@section('title', 'Sucursal Resultado')

@section('main-vista')
    <main class="admin">

        <aside class=admin__aside>
            <h3 class="text-center degradado-admin">Elija una Opción</h3>

            <nav class="admin__navegacion">
                <a href="{{ url('sucursales') }}" class="admin__link">Listados de Sucursales</a>
                <a href="{{ url('sucursales/create')}}" class="admin__link">Nueva Sucursal</a>
                <a href="{{ url('sucursales/realizar/busqueda') }}" class="admin__link">Buscar Sucursal</a>
                <a href="{{ url('relaciones/producto/sucursal') }}" class="admin__link">Listado Sucursal & Productos</a>
                <a href="{{ url('relaciones/crear/prodSuc') }}" class="admin__link">Crear Relación con Productos</a>
            </nav>
        </aside>

        <div class="listado">

            <div class="listado__heading">
                <h2 class="listado__header text-center">Búsqueda Resultado</h2>
            </div>

            <div class="listado__contenido">
                <table class="listado__tabla table table-bordered table-dark">
                    <thead>
                        <tr class="text-center">
                            <th>Código</th>
                            <th>Región</th>
                            <th>Dirección</th>
                            <th>Ajustes<i class="listado__wrench fa fa-wrench"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sucursales as $sucursal)
                        <tr>
                            <td>{{ $sucursal->Suc_Id }}</td>
                            <td>{{ $sucursal->Suc_Region }}</td>
                            <td>{{ $sucursal->Suc_Direccion }}</td>
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