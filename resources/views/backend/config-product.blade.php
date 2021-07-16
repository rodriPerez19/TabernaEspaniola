@extends('adminlte::page')


@section('content_header')
<h1 style="text-align: center;">Modificar Producto</h1>
<hr>
@stop

@section('content')

@include('layouts.message')

<div class="contenedor">
    <form action="{{ route('product.update') }}" method="post">
        @csrf

        <div class="row-1">
            <label for="codigo">Codigo:</label>
            <label for="title">Nombre del producto:</label>
        </div>

        <div class="row-1">
            <input type="text" name="id" class="form-control" value="{{$product->id}}" readonly>
            <input type="text" name="name"  value= "{{ $product->name }}" class="form-control" required>
        </div>

        <div class="separador"></div>

        <div class="row-1">
            <label for="description">Descripcion:</label>
        </div>
        <div class="row-00">
            <input type="text" name="description" value= "{{ $product->description }}" class="form-control" required>
        </div>

        <div class="separador"></div>

        <div class="row-0">
            <label for="categoria">Categoría:</label>
            <label for="precio">Precio:</label>
        </div>
        <div class="row-0">
            <select name="category" id="categoria" class="form-control">
                <option value="1" {{ ($product->id_category == 1) ? 'selected' : ''}}>Entradas</option>
                <option value="2" {{ ($product->id_category == 2) ? 'selected' : ''}}>Ensaladas</option>
                <option value="3" {{ ($product->id_category == 3) ? 'selected' : ''}}>Platos Principales</option>
                <option value="4" {{ ($product->id_category == 4) ? 'selected' : ''}}>Picada de Mariscos</option>
                <option value="5" {{ ($product->id_category == 5) ? 'selected' : ''}}>Pescados</option>
                <option value="6" {{ ($product->id_category == 6) ? 'selected' : ''}}>Pollos / Lomos</option>
                <option value="7" {{ ($product->id_category == 7) ? 'selected' : ''}}>Tortillas</option>
                <option value="8" {{ ($product->id_category == 8) ? 'selected' : ''}}>Postres</option>
                <option value="9" {{ ($product->id_category == 9) ? 'selected' : ''}}>Vinos Tintos</option>
                <option value="10" {{ ($product->id_category == 10) ? 'selected' : ''}}>Vinos Blancos</option>
                <option value="11" {{ ($product->id_category == 11) ? 'selected' : ''}}>Cervezas</option>
                <option value="12" {{ ($product->id_category == 12) ? 'selected' : ''}}>Agua / Gaseosas</option>


            </select>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="number" name="price" value="{{ $product->price }}" class="form-control" >
            </div>
        </div>

        <div class="separador"></div>


        <div class="row-1">
            <label for="">Mostrar en:</label>
        </div>

        <div class="row-0">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="show" value="1" id="web"
                {{ ($product->show == 1) ? 'checked' : ''}} >

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

