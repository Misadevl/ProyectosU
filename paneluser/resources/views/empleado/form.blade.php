<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/styleform.css')}}">
    <title>Document</title>

</head>

<body>
    <!-- @if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)

            <li>{{ $error }} </li>
            @endforeach
        </ul>
    </div>
    @endif -->

    <div class="card-body">

        <div class="form-group row">
            <label for="Foto" class="col-md-4 col-form-label text-md-right"> Foto </label>
            @if(isset($empleado->Foto))
            <img  src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">
            @endif
            <div class="col-md-6">
               
                <input type="file" class="form-control" name="Foto" value="" id="Foto">
                @if(count($errors)>0)

                

                    @foreach($errors->get('Foto') as $error)
                    <div class="alert alert-danger" role="alert">
                    <span>{{ $error }} </span>
                    </div>
                    @endforeach
               

                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="Nombre" class="col-md-4 col-form-label text-md-right"> Nombre</label>
            <div class="col-md-6">
                <input type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}">
                @if(count($errors)>0)

                

                    @foreach($errors->get('Nombre') as $error)
                    <div class="alert alert-danger" role="alert">
                    <span>{{ $error }} </span>
                    </div>
                    @endforeach
             

                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="ApellidoPaterno" class="col-md-4 col-form-label text-md-right"> Apellido Paterno</label>
            <div class="col-md-6">
                <input type="text" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}">
                @if(count($errors)>0)

               

                    @foreach($errors->get('ApellidoPaterno') as $error)
                    <div class="alert alert-danger" role="alert">
                    <span>{{ $error }} </span>
                    </div>
                    @endforeach
               

                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="ApellidoMaterno" class="col-md-4 col-form-label text-md-right"> Apellido Materno</label>
            <div class="col-md-6">
                <input type="text" name="ApellidoMaterno" value="{{ isset ($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}">
                @if(count($errors)>0)

               

                    @foreach($errors->get('ApellidoMaterno') as $error)
                    <div class="alert alert-danger" role="alert">
                    <span>{{ $error }} </span>
                    </div>
                    @endforeach
              

                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="Email" class="col-md-4 col-form-label text-md-right"> Email</label>
            <div class="col-md-6">
                <input type="text" name="Email" value="{{ isset ($empleado->Email)?$empleado->Email:old('Email')}}">
                @if(count($errors)>0)

               

                    @foreach($errors->get('Email') as $error)
                    <div class="alert alert-danger" role="alert">
                    <span>{{ $error }} </span>
                    </div>
                    @endforeach
              

                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="Direccion" class="col-md-4 col-form-label text-md-right"> Direccion</label>
            <div class="col-md-6">
                <input type="text" name="Direccion" value="{{ isset ( $empleado->Direccion)?$empleado->Direccion:old('Direccion')}}">
                @if(count($errors)>0)

               
                    @foreach($errors->get('Direccion') as $error)
                    <div class="alert alert-danger" role="alert">

                    <span>{{ $error }} </span>
                    </div>

                    @endforeach
               
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="Telefono" class="col-md-4 col-form-label text-md-right"> Telefono</label>
            <div class="col-md-6">
                <input type="text" name="Telefono" value="{{ isset ( $empleado->Telefono)?$empleado->Telefono:old('Telefono')}}">
                @if(count($errors)>0)

               

                    @foreach($errors->get('Telefono') as $error)
                    <div class="alert alert-danger" role="alert">
                    <span>{{ $error }} </span>
                    </div>
                    @endforeach
                

                @endif
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-8 offset-md-4">
                <input type="submit" class="btn btn-primary" value="{{ $modo }}">
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">

                <a href="{{ url('empleado/')}}" class="btn btn-info"> Volver atras</a>
            </div>
        </div>
    </div>

</body>

</html>