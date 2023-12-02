@extends('layouts.master-admin')

@section('title', 'Eliminar Sucursal')

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

        <div class="solicitud">

            <h2 class="solicitud__heading text-center degradado-admin ">¿Esta seguro que desea eliminar la siguiente sucursal?</h2>

            <form action="{{ url('sucursales/' . $suc->Suc_Id) }}" method="post" class="solicitud__formulario">
                @csrf
                @method('DELETE')
                
                <div class="solicitud__campo">
                    <p><span class="solicitud__span">Nombre:</span> {{$suc->Suc_Region}}</p>
                    <p><span class="solicitud__span">Descripción:</span> {{$suc->Suc_Direccion}}</p>
                </div>

                <div class="solicitud__boton">
                    <button type="submit" class="solicitud__btn solicitud__btn--modificador">Eliminar Sucursal</button>
                    <a type="submit" href="{{ url('sucursales')}}" class="solicitud__btn">Volver</a>
                </div>
            </form>
        </div>

    </main>
@stop