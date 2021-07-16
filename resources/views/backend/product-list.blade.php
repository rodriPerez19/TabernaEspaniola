@extends('adminlte::page')


@section('content_header')
    <h1 style="text-align: center;">Listado de Productos</h1>
    <hr>
@stop

@section('content')


    <div class="links">
        {{$products->links()}}
    </div>



    <div class="tabla">

        <div class="producto encabezado">
            <strong>Producto</strong>
        </div>
        <div class="descripcion encabezado">
            <strong>Descripcion</strong>
        </div>
        <div class="mostrar encabezado">
            <strong>Ver</strong>
        </div>
        <div class="acciones encabezado">
            <strong>Acciones</strong>
        </div>

        @foreach ($products as $product)

            <div class="producto centrar ">
                <a href="{{ url("ver-producto/$product->id") }}">
                    {{$product->name}}
                </a>
            </div>
            <div class="descripcion centrar">
                {{ $product->description }}
            </div>
            <div class="mostrar centrar ">
                @if ($product->show)
                    Si
                @else
                    No
                @endif
            </div>
            <div class="acciones centrar">
                <a href="{{ url("configurar-producto/$product->id") }}" class="btn btn-outline-primary btn-lg"><i class="fas fa-edit"></i></i></a>

                <a data-toggle="modal" data-target="#confirmar{{$product->id}}" class="btn btn-outline-danger btn-lg" href="#">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </div>

            @include('layouts.product-confirm-delete')

        @endforeach

    </div>

    <div class="clearfix "></div><br>
    <div class="links">
        {{$products->links()}}
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

