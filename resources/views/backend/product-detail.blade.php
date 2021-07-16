@extends('adminlte::page')


@section('content_header')
<h1 style="text-align: center;">Detalles del Producto</h1>
<hr>
@stop

@section('content')

@include('layouts.message')

<div class="contenedor">

        <div class="row-1">
            <label for="codigo">Codigo:</label>
            <label for="title">Nombre del producto:</label>
        </div>

        <div class="row-1">
            <input type="text" name="id" class="form-control" value="{{$product->id}}" readonly>
            <input type="text" name="name"  value= "{{ $product->name }}" class="form-control" readonly>
        </div>

        <div class="separador"></div>

        <div class="row-1">
            <label for="description">Descripcion:</label>
        </div>
        <div class="row-00">
            <input type="text" name="description" value= "{{ $product->description }}" class="form-control" readonly>
        </div>

        <div class="separador"></div>

        <div class="row-0">
            <label for="categoria">Categoría:</label>
            <label for="precio">Precio:</label>
        </div>
        <div class="row-0">
            <input type="text" name="category" class="form-control" value="{{ $product->categoryName()}}" readonly>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="number" name="price" value="{{ $product->price }}" class="form-control" readonly >
            </div>
        </div>

        <div class="separador"></div>


        <div class="row-1">
            <label for="">Mostrar en:</label>
        </div>

        <div class="row-0">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="show" value="1" id="web"
                {{ ($product->show == 1) ? 'checked' : ''}}  readonly="readonly" onclick="javascript: return false;">

                <label class="form-check-label" for="web">
                  Pagina Web
                </label>
            </div>

            <div class="botones">
                <a  href="{{ route('product.index') }}" class="btn btn-outline-secondary btn-lg btn-block" >Volver</a>
            </div>
        </div>
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

