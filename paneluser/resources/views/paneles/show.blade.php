
@extends('adminlte::page')

@section('title', 'Admin - create')


@section('content_header')
    <h1>Admin - Producto</h1>
@stop

@section ( 'content' )
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>El registro es "{{$dato->nombre}}"</h1></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Detalles de producto:</p>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success"><strong>Nombre:</strong> {{$dato->nombre}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Descripcion:</strong> {{$dato->descripcion}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Precio:</strong> {{$dato->precio}}</li>
                        
                    </ul>
                    <br><br>
                    <form action="{{route('paneles.destroy', $dato)}}" method="POST">
                        @csrf
                        @method('delete')
                        <a class="btn btn-info" href="{{route('paneles.index')}}">Volver a lista de productos</a>
                        <a class="btn btn-warning" href="{{route('paneles.edit', $dato)}}">Editar registro</a>
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 @stop 