
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
                <div class="card-header"><h1>Registro de usuarios</h1></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Ingrese un nuevo usuario</p>

                    <form  action="{{route('usuarios.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Nombre:</label>
                          <input type="text" name="name" class="form-control" value="{{old('name')}}">
                          @error('name')
                            <small style="color: red">* {{$message}}</small>
                            <br>
                          @enderror
                        </div>
                        <div class="col-md-5">
                          <label class="form-label">Email:</label>
                          <input type="email" name="email" class="form-control" value="{{old('email')}}">
                          @error('email')
                            <small style="color: red">* {{$message}}</small>
                            <br>
                          @enderror
                        </div>
                        <br>
                        <div class="mb-3">
                            <label class="form-label">Password:</label>
                            <input type="password" name="password" class="form-control">
                            @error('password')
                            <small style="color: red">* {{$message}}</small>
                            <br>
                            @enderror
                          </div>
                        <button type="submit"  class="btn btn-primary">Registrar</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
 @stop  