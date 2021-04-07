
@extends('adminlte::page')

@section('title', 'Admin - create')


@section('content_header')
    <h1>Admin - Create</h1>
@stop

@section ( 'content' )
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Registro de productos</h1></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Ingrese un nuevo producto</p>

                    <form  action="{{route('paneles.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Nombre del producto:</label>
                          <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}">
                          @error('nombre')
                            <small style="color: red">* {{$message}}</small>
                            <br>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Descripcion</label>
                          <input type="text" name="descripcion" class="form-control" value="{{old('descripcion')}}">
                          @error('descripcion')
                            <small style="color: red">* {{$message}}</small>
                            <br>
                          @enderror
                        </div>
                        <div class="col-md-5">
                          <label class="form-label">Precio:</label>
                          <input type="text" name="precio" class="form-control" value="{{old('precio')}}">
                          @error('precio')
                            <small style="color: red">* {{$message}}</small>
                            <br>
                          @enderror
                        </div>
                        <br>
                        
                          <br>
                          
                        <button type="submit"  class="btn btn-primary">Registrar</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
 @stop 