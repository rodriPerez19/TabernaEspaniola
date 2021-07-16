@extends('adminlte::page')


@section('content_header')
<h1 style="text-align: center;">Pagina Principal</h1>
<hr>
@stop

@section('content')

<div style="margin: auto" class="col-6">
    <div class="alert colorPagina alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-inbox"></i> Hola!</h5>
    En este sector del sistema se realiza la administracion del apartado publico.
    En el area de 'Operaciones' podes cargar vos mismo los productos para el menu de <strong>Taberna</strong>, asi
    como tambien podes modificar y eliminar productos ya existentes.
    En el area de 'Pagina Web' podes acceder a los demas links del sistema. <a href="http://www.temberweb.com/">Contactenos</a>

    </div>
</div>

@stop

@section('css')
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

