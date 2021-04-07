
@extends('adminlte::page')

@section('title', 'Admin - create')


@section('content_header')
    <h1>Admin - Users</h1>
@stop

@section ( 'content' )
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>El registro es "{{$usuario->name}}"</h1></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Detellas del Usuario:</p>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success"><strong>Nombre:</strong> {{$usuario->name}}</li>
                        <li class="list-group-item list-group-item-success"><strong>Email:</strong> {{$usuario->email}}</li>
                    </ul>
                    <br><br>
                    <form action="{{route('usuarios.destroy', $usuario)}}" method="POST">
                        @csrf
                        @method('delete')
                        <a class="btn btn-info" href="{{route('usuarios.index')}}">Volver a lista de usuarios</a>
                        <a class="btn btn-warning" href="{{route('usuarios.edit', $usuario)}}">Editar registro</a>
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 @stop 