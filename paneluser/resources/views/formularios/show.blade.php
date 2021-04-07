
@extends('adminlte::page')

@section('title', 'Admin - create')


@section('content_header')
    <h1>Admin - Solicitud</h1>
@stop

@section ( 'content' )
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- @foreach ($formularios as $formulario ) --}}
                    
                
                <div class="card-header"><h1>El registro es "{{$formulario->nombre}}"</h1></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Detalles de producto:</p>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success"><strong>Nombre:</strong> {{$formulario->nombre}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Apellido:</strong> {{$formulario->apellido}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Email:</strong> {{$formulario->email}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Número de Identificación:</strong> {{$formulario->dni}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Telefono:</strong> {{$formulario->telefono}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Lugar:</strong> {{$formulario ->lugar}}</li>
                        <li class="list-group-item list-group-item-success"><strong>País:</strong> {{$formulario ->pais}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Ciudad:</strong> {{$formulario ->ciudad}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Dirección:</strong> {{$formulario ->direccion}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Codigo De País:</strong> {{$formulario ->codigo}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Tipo de Transporte:</strong> {{$formulario ->tipo}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Transporte Aerea:</strong> {{$formulario ->aerolinea}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Transporte Terrestre:</strong> {{$formulario ->terrestre}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Tipo de Producto:</strong> {{$formulario ->producto}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Unidad de peso en "Kilogramo":</strong> {{$formulario ->kg}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Unidad de peso en "Tonelada":</strong> {{$formulario ->tonelada}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Tolal a Pagar:</strong> {{$formulario ->total1}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Tolal a Pagar:</strong> {{$formulario ->total2}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Tipo de pago:</strong> {{$formulario ->tipopago}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Numero de cuenta:</strong> {{$formulario ->cuenta}}</li>
                        
                    </ul>
                   
                    <br><br>
                    <form action="{{route('formularios.destroy', $formulario)}}" method="POST">
                        @csrf
                        @method('delete')
                        <a class="btn btn-info" href="{{route('formularios.index')}}">Volver a lista de solicitud</a>
                        <a class="btn btn-warning" href="{{route('formularios.edit', $formulario)}}">Editar registro</a>
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                    
                   
                </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </div>
</div>
 @stop 