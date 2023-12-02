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

            <h2 class="solicitud__heading text-center degradado-admin ">¿Esta seguro que desea eliminar la siguiente relación de producto & categoría?</h2>

            <form action="{{ url('relaciones/destroy/prodCat/' . $prodCat->producto->Prod_Id . '/' . $prodCat->categoria->Cat_Id) }}" method="post" class="solicitud__formulario">
                @csrf
                @method('DELETE')
                
                <div class="solicitud__campo">
                    <p><span class="solicitud__span">Nombre de Producto:</span> {{$prodCat->producto->Prod_Nombre}}</p>
                </div>
                <div class="solicitud__campo">
                    <p><span class="solicitud__span">Nombre de Categoría:</span> {{$prodCat->categoria->Cat_Nombre}}</p>
                </div>

                <div class="solicitud__boton">
                    <button type="submit" class="solicitud__btn solicitud__btn--modificador">Eliminar Relación</button>
                    <a type="submit" href="{{ url('relaciones/producto/categoria')}}" class="solicitud__btn">Volver</a>
                </div>
            </form>
        </div>

    </main>
@stop