@extends('layouts.master')

@section('title', 'Vista - Productos')

@section('main-vista')

    <section class="nuestros-productos">
        <div>
            <h2>Nuestros Productos</h2>
            <p>En nuestra página podrás encontrar distintos productos que, abarcan categorías tales como: adornos, electronica y hogar. A continuación podrás ver la descripción de estos, en la siguiente sección y también podrás realizar un breve formulario para contarnos sobre tu experiencia a primera vista de los productos y servicios que ofrecemos, con tu ayuda podremos mejorar continuamente nuestra entrega de valor.</p>
        </div>

        <div class="imagen-flex">
            <img src="{{ asset('assets/img/nuestros-productos.jpg') }}" alt="imagen de nuestros productos" width="700px" height="500px">
        </div>
    </section>

    <section class="section-productos">

        <h2>Tienda Productos</h2>

        <div class="productos" >
            {{-- Producto 1 --}}
            <div class="producto">
                <img src="{{ asset('assets/img/producto1.jpg') }}" alt="producto de venta">
                <h3>Sofá de Cuero</h3>
                <p>Categoría: Hogar</p>
                <p class="precio">$100.000</p>
                <a href="#" class="btn-default" >Agregar al carrito</a>
            </div>
            {{-- Producto 2 --}}
            <div class="producto">
                <img src="{{ asset('assets/img/producto2.jpg') }}" alt="producto de venta">
                <h3>Smart TV 55''</h3>
                <p>Categoría: Electronico</p>
                <p class="precio">$100.000</p>
                <a href="#" class="btn-default" >Agregar al carrito</a>
            </div>
            {{-- Producto 3 --}}
            <div class="producto">
                <img src="{{ asset('assets/img/producto3.jpg') }}" alt="producto de venta">
                <h3>Reloj de Pared</h3>
                <p>Categoría: Adorno</p>
                <p class="precio">$100.000</p>
                <a href="#" class="btn-default" >Agregar al carrito</a>
            </div>
            {{-- Producto 4 --}}
            <div class="producto">
                <img src="{{ asset('assets/img/producto4.jpg') }}" alt="producto de venta">
                <h3>Lampara de Mesa</h3>
                <p>Categoría: Hogar</p>
                <p class="precio">$100.000</p>
                <a href="#" class="btn-default" >Agregar al carrito</a>
            </div>
            {{-- Producto 5 --}}
            <div class="producto">
                <img src="{{ asset('assets/img/producto5.jpg') }}" alt="producto de venta">
                <h3>Cafetera Electrica</h3>
                <p>Categoría: Electronico</p>
                <p class="precio">$100.000</p>
                <a href="#" class="btn-default" >Agregar al carrito</a>
            </div>
            {{-- Producto 6 --}}
            <div class="producto">
                <img src="{{ asset('assets/img/producto6.jpg') }}" alt="producto de venta">
                <h3>Audifonos Samsung</h3>
                <p>Categoría: Electronico</p>
                <p class="precio">$100.000</p>
                <a href="#" class="btn-default" >Agregar al carrito</a>
            </div>
        </div>

    </section>

    <section class="section-formulario">

        <h2>Cuentanos tu Experiencia</h2>

        <form class="form-usuario" method="post" action="{{ url('index/agradecimiento') }}">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" value="{{ old('edad') }}">
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <input type="text" class="form-control" id="mensaje" name="mensaje" value="{{ old('mensaje') }}">
            </div>
            <div >
                <label for="elegir-categoria" class="form-label">Elija su Categoría Preferida</label>
                <select class="form-select select-categoria" id="elegir-categoria" name="categoria">
                    <option value="" selected disabled >-- Seleccione Una Opción --</option>
                    <option value="hogar">Hogar</option>
                    <option value="electronica">Electronica</option>
                    <option value="adorno">Adorno</option>
                </select>
            </div>
            <div class="button-usuario">
                <button type="submit" class="btn-default-2">Submit</button>
            </div>
        
            @if($errors->any())

                <div class="alert alert-danger error-form-user">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>

            @endif

        </form>



    </section>
@stop
