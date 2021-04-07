
@extends('adminlte::page')

@section('title', 'Admin - productos')


@section('content_header')
    <h1>Admin - Lista de productos</h1>
@stop

@section ( 'content' )
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Sección de Productos.</h1></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-warning" type="button" href="{{route('paneles.create')}}"><strong>Crear un nuevo registro</strong></a>
                    <br><br>
                    <p style="color:#5AAAFF;">Puede selecionar cualquier lista de los productos para ver su información</p>
                    <ol class="list-group list-group-flush ">
                        @foreach ($datos as $dato)
                            <li class="list-group-item list-group-item-warning">
                                <a style="color: #000" href="{{route('paneles.show', $dato->id)}}">{{$dato->nombre}}</a>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
 @stop 