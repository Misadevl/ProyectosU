@extends('adminlte::page')
@section('title', 'Panel de administracion')
@section('content_header')
    <h1>Panel de admin</h1>
@stop

@section('content')
<div class="container">


@if (Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
    {{ Session::get('mensaje')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
    @endif
    
   
    <a class="btn btn-primary " href="{{ url('empleado/create')}}"> Registrar nuevo empleado </a>
    <table class="table table-light table-responsive-sm table-hover">

        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Email</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $empleados as $empleado )
            <tr>
                {{-- <a href="{{ route('imprimir') }}">Imprime el archivo</a> --}}
                <td>{{ $empleado->id}}</td>

                <td>
                    
                    <img  src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">

                </td>

                <td>{{ $empleado->Nombre}}</td>
                <td>{{ $empleado->ApellidoPaterno}}</td>
                <td>{{ $empleado->ApellidoMaterno}}</td>
                <td>{{ $empleado->Email}}</td>
                <td>{{ $empleado->Direccion}}</td>
                <td>{{ $empleado->Telefono}}</td>
                <td>

                    

                    <form action="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="d-inline" method="POST">
                        @csrf
                        {{ method_field('GET') }}
                        <input class="btn btn-info d-inline" type="submit" onclick="return confirm('Quieres editar?')" value="Editar">

                    </form>



                    <form action="{{ url('/empleado/'.$empleado->id ) }}" class="d-inline" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input class="btn btn-danger" type="submit" onclick="return confirm('Quieres borrar?')" value="Borrar">

                    </form>
                    

                </td>

            </tr>
            @endforeach
        </tbody>


    </table>
    {!! $empleados->links()!!}
</div>
@endsection