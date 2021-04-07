
@extends('adminlte::page')

@section('title', 'Admin - create')


@section('content_header')
<script type="text/javascript" src="{{asset('js/desabilitar.js')}}"></script>
    <h1>Admin - Create</h1>
@stop

@section ( 'content' )
<div class="container">
  <div class="row justify-content-center">
  <div class="col-md-10">
    <div class="card">
        <div class="card-body">

                    <h2>Formulario de Solicitud de producto:</h2>
    <br>
    <br>
    <h3>¿Quién recibe?</h3>
<form class="" action="{{ route('formularios.store') }}" method="POST">

    @csrf
    <div class="form-group row">
      <label for="inputEmail4" class="col-md-4 col-form-label ">Nombre:</label>
      <div class="col-md-5">
      <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
      @error('nombre')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
      </div>
    </div>


    <div class="form-group row">
      <label for="inputPassword4" class="col-md-4 col-form-label">Apellido:</label>
      <div class="col-md-5">
      <input type="text" class="form-control" id="" name="apellido" value="{{old('apellido')}}">
      @error('apellido')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
      </div>
    </div>

    <div class="form-group row">
      <label for="inputPassword4" class="col-md-4 col-form-label">Correo electronico:</label>
      <div class="col-md-5">
      <input type="email" class="form-control" id="" name="email" value="{{old('email')}}" placeholder="@xample.com" >
      @error('email')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
      </div>
    </div>


    <br>
    <h3>¿Dónde lo recibe?</h3>
    <br>


    <fieldset class="col-12">
      <div class="form-group row">
        <div class="form-check">
          <div class="col-md-5">
          <input class="form-check-input" type="radio" name="lugar" id="lugar" value="Nacional" onclick="nacional()">
          <label class="form-check-label" for="gridRadios1">
            Nacional 
          </label>
          </div>
        </div>
        <div class="form-check">
          <div class="col-md-5">
          <input class="form-check-input" type="radio" name="lugar" id="lugar" value="Internacional" onclick="internacional()">
          <label class="form-check-label" for="gridRadios2">
            Internacional
          </label>
          </div>
        </div>
        @error('lugar')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
      </div>
    </fieldset>
  

    <div class="form-group row">
      <label for="inputAddress" class="col-md-4 col-form-label">País:</label>
      <div class="col-md-5">
      <input type="text" class="form-control" id="pais" name="pais" placeholder="" value="{{old('pais')}}" disabled>
      @error('pais')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
      </div>
    </div>


    <div class="form-group row">
      <label for="inputCity" class="col-md-4 col-form-label">Ciudad:</label>
      <div class="col-md-5">
      <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{old('ciudad')}}" disabled>
      @error('ciudad')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
      </div>
    </div>


    <div class="form-group row">
        <label for="inputCity" class="col-md-4 col-form-label">Dirección:</label>
        <div class="col-md-5">
        <input type="text" class="form-control" id="direccion" name="direccion" value="{{old('direccion')}}" disabled>
        @error('direccion')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
        </div>
    </div>


    <div class="form-group row">
        <label for="inputCity" class="col-md-4 col-form-label">Codigo de país:</label>
        <div class="col-md-4">
        <input type="text" class="form-control" id="codigo" name="codigo"  value="{{old('codigo')}}" placeholder="#####" disabled>
        @error('codigo')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
        </div>
    </div>


    <div class="form-group row">
        <label for="inputCity" class="col-md-4 col-form-label">Teléfono:</label>
        <div class="col-md-5">
        <input type="text" class="form-control" id="telefono" name="telefono" value="{{old('telefono')}}" disabled>
        @error('telefono')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
        </div>
    </div>


    <div class="form-group row">
        <label for="inputCity" class="col-md-4 col-form-label">Numero Identificación:</label>
        <div class="col-md-5">
        <input type="text" class="form-control" id="dni" name="dni" value="{{old('dni')}}" disabled>
        @error('dni')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
        </div>
    </div>
    <fieldset class="col-12">
      <legend class="col-md-4 col-form-label"><strong>Tipo de transporte:</strong> </legend>
      <div class="form-group row">
        <div class="form-check">
          <div class="col-md-5">
          <input class="form-check-input" type="radio" name="tipo" id="tipo1" value="Aerolinea" onclick="activarcaja()">
          <label class="form-check-label" for="gridRadios1">
            Aerolinea
          </label>
          </div>
        </div>
        <div class="form-check">
          <div class="col-md-5">
          <input class="form-check-input" type="radio" name="tipo" id="tipo2" value="Terrestre" onclick="desactivarcaja()">
          <label class="form-check-label" for="gridRadios2">
            Terrestre
          </label>
          </div>
        </div>
        @error('tipo')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
      </div>
    </fieldset>

    <div class="form-group row">
      <label for="inputState" class="col-md-4 col-form-label">Aerolinea</label>
      <div class="col-md-5">
      <select id="inputState1" class="form-select" name="aerolinea" id="opcion1" disabled>
        <option selected></option>
        <option>BoA(Boliviana de Aviación)</option>
      </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="inputState" class="col-md-4 col-form-label">Buses</label>
      <div class="col-md-5">
      <select id="inputState2" class="form-select" name="terrestre" id="opcion2" disabled>
        <option selected></option>
        <option>Trans Azul</option>
      </select>
      </div>
    </div>


    {{-- <h1>Detalles de producto:</h1> --}}
    


    <div class="form-group row">
      <label for="inputState" class="col-md-4 col-form-label">Tipo de producto:</label>
      <div class="col-md-5">
      <select id="inputState" class="form-select" name="producto" id="">
        <option selected></option>
        <option>La hoja de Coca</option>
        <option>Platano</option>
        <option>Naranja</option>
        <option>Mandarina</option>
        <option>Palta</option>
        <option>Pacay</option>
      </select>
      @error('producto')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
      </div>
    </div>
    <p><strong>Cantidad o peso del producto</strong></p>
    <div class="form-group row">
      <label for="inputEmail4" class="col-md-4 col-form-label">Kg:</label>
      <div class="col-md-5">
      <input type="text" class="form-control" name="kg" value="{{old('kg')}}" id="kg">
      </div>
    </div>


    <div class="form-group row">
      <label for="inputPassword4" class="col-md-4 col-form-label">Tonelada</label>
      <div class="col-md-5">
      <input type="text" class="form-control" id="tonelada" name="tonelada" value="{{old('tonelada')}}">
      </div>
    </div>
    <br>
    

    <div class="form-group row">
      <button type="button" class="btn btn-success" id="boton" value="boton" style="background: green;" onclick="operacion()" onclick="operacion2()">Calcular el precio a pagar</button>
    </div>


    
      <textarea name="total1" id="resultado" cols="30" rows="2" placeholder="=" style="font-size:1rem;" ></textarea>
      
   
    
    <textarea name="total2" id="resultado2" cols="30" rows="2" placeholder="=" style="font-size:1rem;" ></textarea>
  


    <fieldset class="col-10">
      <legend class="col-col-md-4 col-form-label col-sm-2 pt-0"><strong>Tipo de pago:</strong> </legend>
      <div class="form-group row">
        <div class="form-check">
          <div class="col-md-5">
          <input class="form-check-input" type="radio" name="tipopago" id="tipo3" value="Tarjeta de crédito" checked>
          <label class="form-check-label" for="gridRadios1">
            Tarjeta de crédito
          </label>
          </div>
        </div>
        
        <div class="form-check">
          <div class="col-md-5">
          <input class="form-check-input" type="radio" name="tipopago" id="tipo4" value="Paypal">
          <label class="form-check-label" for="gridRadios2">
            Paypal
          </label>
          </div>
        </div>
        
        
      </div>
    </fieldset>


    <div class="form-group row" id="cuenta">
      <label for="inputEmail4" class="col-md-4 col-form-label">Numero de cuenta:</label>
      <div class="col-md-5">
      <input type="text" class="form-control" id="cuenta" name="cuenta" value="{{old('cuenta')}}" >
      @error('cuenta')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
      </div>
    </div>


    <div class="form-group row">
      <button type="submit" class="btn btn-success" style="background: green;" onclick="return confirm('Estas seguro(a) de la informacion ingresada.?')" id="boton" value="boton">Aceptar</button>
    </div>
  </form>
        </div>
        </div>
        </div>       
  </div> 
</div>
 @stop  