@extends('layouts.master-admin')

@section('title', 'Eliminar Producto')

@section('main-vista')
    <main class="admin">

        <aside class=admin__aside>
            <h3 class="text-center degradado-admin">Elija una Opción</h3>

            <nav class="admin__navegacion">
                <a href="{{ url('productos') }}" class="admin__link">Listados de Productos</a>
                <a href="{{ url('productos/create')}}" class="admin__link">Nuevo Producto</a>
                <a href="{{ url('productos/realizar/busqueda') }}" class="admin__link">Buscar Productos</a>
                <a href="{{ url('productos/actualizar/estado') }}" class="admin__link">Actualizar Estados de Productos por Sucursal</a>
                <a href="{{ url('relaciones/producto/sucursal') }}" class="admin__link">Listado Sucursal & Productos</a>
                <a href="{{ url('relaciones/producto/categoria') }}" class="admin__link">Listado Categorias & Productos</a>
                <a href="{{ url('relaciones/crear/prodSuc') }}" class="admin__link">Crear Relación Sucursales & Productos</a>
                <a href="{{ url('relaciones/crear/prodCat') }}" class="admin__link">Crear Relación Categorias & Productos</a>
                
            </nav>
        </aside>

        <div class="solicitud">

            <h2 class="solicitud__heading text-center degradado-admin ">¿Esta seguro que desea eliminar el siguiente producto?</h2>

            <form action="{{ url('productos/' . $prod->Prod_Id) }}" method="post" class="solicitud__formulario">
                @csrf
                @method('DELETE')
                
                <div class="solicitud__campo">
                    <p><span class="solicitud__span">Nombre:</span> {{$prod->Prod_Nombre}}</p>
                    <p><span class="solicitud__span">Descripción:</span> {{$prod->Prod_Descripcion}}</p>
                    <p><span class="solicitud__span">Precio:</span> ${{$prod->Prod_Precio}}</p>
                    <p><span class="solicitud__span">Estado:</span> {{$prod->Prod_Estado}}</p>
                </div>

                <div class="solicitud__boton">
                    <button type="submit" class="solicitud__btn solicitud__btn--modificador">Eliminar Producto</button>
                    <a type="submit" href="{{ url('productos')}}" class="solicitud__btn">Volver</a>
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