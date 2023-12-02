@extends('layouts.master-admin')

@section('title', 'Eliminar Relación')

@section('main-vista')
    <main class="admin">

        <aside class=admin__aside>
            <h3 class="text-center degradado-admin">Elija una Opción</h3>

            <nav class="admin__navegacion">
                <a href="{{ url('relaciones/producto/sucursal') }}" class="admin__link">Listado Producto & Sucursal</a>
                <a href="{{ url('relaciones/producto/categoria') }}" class="admin__link">Listado Producto & Categoria</a>
                <a href="{{ url('relaciones/crear/prodSuc') }}" class="admin__link">Crear Relación Producto & Sucursal</a>
                <a href="{{ url('relaciones/crear/prodCat') }}" class="admin__link">Crear Relación Producto & Categoria</a>
            </nav>
        </aside>

        <div class="solicitud">

            <h2 class="solicitud__heading text-center degradado-admin ">¿Esta seguro que desea eliminar la siguiente relación de producto & sucursal?</h2>

            <form action="{{ url('relaciones/destroy/prodSuc/' . $prodSuc->producto->Prod_Id . '/' . $prodSuc->sucursal->Suc_Id) }}" method="post" class="solicitud__formulario">
                @csrf
                @method('DELETE')
                
                <div class="solicitud__campo">
                    <p><span class="solicitud__span">Nombre de Sucursal:</span> {{$prodSuc->sucursal->Suc_Region . ', ' . $prodSuc->sucursal->Suc_Direccion}}</p>
                </div>
                <div class="solicitud__campo">
                    <p><span class="solicitud__span">Nombre de Producto:</span> {{$prodSuc->producto->Prod_Nombre}}</p>
                </div>
                <div class="solicitud__campo">
                    <p><span class="solicitud__span">Nombre de Estado:</span> {{$prodSuc->estado->Estado_Nombre}}</p>
                </div>
                <div class="solicitud__campo">
                    <p><span class="solicitud__span">Stock:</span> {{$prodSuc->Stock}}</p>
                </div>

                <div class="solicitud__boton">
                    <button type="submit" class="solicitud__btn solicitud__btn--modificador">Eliminar Relación</button>
                    <a type="submit" href="{{ url('relaciones/producto/sucursal')}}" class="solicitud__btn">Volver</a>
                </div>
            </form>
        </div>

    </main>
@stop