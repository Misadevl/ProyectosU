@extends('adminlte::page')

@section('title', 'Admin - Productos')


@section('content_header')
    <h1>Admin - Productos</h1>
@stop

@section ( 'content' )
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Esta es la sección de productos, Bienvenido</h1></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>En esta parte usted podra ver los registros de los productos y los detalles del mismo para que pueda eliminar, editar, y/ o modificar</p>
                    <a type="button" class="btn btn-secondary" href="{{route('paneles.index')}}">Ir a lista</a>
                </div>
            </div>
        </div>
    </div>
</div>
 @stop
