@extends('adminlte::page')
@section('title', 'Panel de administracion')
@section('content_header')
    <h1>Panel de admin</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <form action="{{ url('/empleado/'.$empleado->id )}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH')}}

                        @include('empleado.form',['modo'=>'Guardar Cambios']);
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection