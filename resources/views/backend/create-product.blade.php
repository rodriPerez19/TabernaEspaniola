@extends('adminlte::page')


@section('content_header')
<h1 style="text-align: center;">Crear Producto</h1>
<hr>
@stop

@section('content')

@include('layouts.message')
<div class="contenedor">


    <form action="{{ route('product.save') }}" method="post">
        @csrf
        <div class="row-1">
            <label for="codigo">Codigo:</label>
            <label for="title">Nombre del producto:</label>
        </div>

        <div class="row-1">
            <input type="text" name="id" class="form-control" value="{{ (App\Product::latest('id')->first()->id)+1 }}" readonly>
            <input type="text" name="name" class="form-control" placeholder="Titulo" required>
        </div>

        <div class="separador"></div>

        <div class="row-1">
            <label for="description">Descripcion:</label>
        </div>
        <div class="row-1">
            <textarea name="description" id="description"></textarea>
        </div>

        <div class="separador"></div>

        <div class="row-0">
            <label for="categoria">Categoría:</label>
            <label for="precio">Precio:</label>
        </div>

        <div class="row-0">
            <select name="category" id="categoria" class="form-control">
                <option value="1">Entradas</option>
                <option value="2">Ensaladas</option>
                <option value="3">Platos Principales</option>
                <option value="4">Picada de Mariscos</option>
                <option value="5">Pescados</option>
                <option value="6">Pollos / Lomos</option>
                <option value="7">Tortillas</option>
                <option value="8">Postres</option>
                <option value="9">Vinos Tintos</option>
                <option value="10">Vinos Blancos</option>
                <option value="11">Cervezas</option>
                <option value="12">Agua / Gaseosas</option>

            </select>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="number" name="price" class="form-control" >
            </div>
        </div>

        <div class="separador"></div>


        <div class="row-1">
            <label for="">Mostrar en:</label>
        </div>

        <div class="row-0">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="show" value="1" id="web" checked>
                <label class="form-check-label" for="web">
                  Pagina Web
                </label>
            </div>

            <div class="botones">
                <button class="btn btn-outline-success btn-lg btn-block" type="submit">Enviar</button>
            </div>
        </div>





    </form>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
@stop

@section('js')
    <!--<script>
       Swal.fire(
        'Good job!',
        'You clicked the button!',
        'success'
        )
    </script>-->
@stop

