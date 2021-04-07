
@extends('adminlte::page')

@section('title', 'Admin - create')


@section('content_header')
<script type="text/javascript" src="{{asset('js/desabilitar.js')}}"></script>
    <h1>Admin - Edit</h1>
@stop

@section ( 'content' )


                    <h1>Formulario de Solicitud de producto:</h1>
    <br>
    <br>
    <h2>¿Quién recibe?</h2>
<form class=" row gx-3 gy-2 align-items-center" action="{{ route('formularios.update',$formulario) }}" method="POST">

    @csrf
    @method('put')
    <div class="col-4">
      <label for="inputEmail4" class="form-label">Nombre:</label>
      <input type="text" class="form-control" name="nombre" value="{{old('nombre'),$formulario->nombre}}">
      @error('nombre')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
    </div>


    <div class="col-4">
      <label for="inputPassword4" class="form-label">Apellido:</label>
      <input type="text" class="form-control" id="" name="apellido" value="{{old('apellido'),$formulario->apellido}}">
      @error('apellido')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
    </div>

    <div class="col-4">
      <label for="inputPassword4" class="form-label">Correo electronico:</label>
      <input type="email" class="form-control" id="" name="email" value="{{old('email'),$formulario->email}}" placeholder="@xample.com" >
      @error('email')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
    </div>


    <br>
    <h2>¿Dónde lo recibe?</h2>
    <br>


    <fieldset class="col-10">
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="lugar" id="lugar" value="Nacional" onclick="nacional()">
          <label class="form-check-label" for="gridRadios1">
            Nacional 
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="lugar" id="lugar" value="Internacional" onclick="internacional()">
          <label class="form-check-label" for="gridRadios2">
            Internacional
          </label>
        </div>
        @error('lugar')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
      </div>
    </fieldset>
    <br>
    <br>
    <br>

    <div class="col-3">
      <label for="inputAddress" class="form-label">País:</label>
      <input type="text" class="form-control" id="pais" name="pais" placeholder="" value="{{old('pais'),$formulario->pais}}" disabled>
      @error('pais')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
    </div>


    <div class="col-md-6">
      <label for="inputCity" class="form-label">Ciudad:</label>
      <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{old('ciudad'),$formulario->ciudad}}" disabled>
      @error('ciudad')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
    </div>


    <div class="col-md-5">
        <label for="inputCity" class="form-label">Dirección:</label>
        <input type="text" class="form-control" id="direccion" name="direccion" value="{{old('direccion'),$formulario->direccion}}" disabled>
        @error('direccion')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
    </div>


    <div class="col-md-2">
        <label for="inputCity" class="form-label">Codigo de país:</label>
        <input type="text" class="form-control" id="codigo" name="codigo"  value="{{old('codigo'),$formulario->codigo}}" placeholder="#####" disabled>
        @error('codigo')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
    </div>


    <div class="col-md-3">
        <label for="inputCity" class="form-label">Teléfono:</label>
        <input type="text" class="form-control" id="telefono" name="telefono" value="{{old('telefono'),$formulario->telefono}}" disabled>
        @error('telefono')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
    </div>


    <div class="col-md-6">
        <label for="inputCity" class="form-label">Numero Identificación:</label>
        <input type="text" class="form-control" id="dni" name="dni" value="{{old('dni'),$formulario->dni}}" disabled>
        @error('dni')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <fieldset class="col-10">
      <legend class="col-form-label col-sm-2 pt-0"><strong>Tipo de transporte:</strong> </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tipo" id="tipo1" value="Aerolinea" onclick="activarcaja()">
          <label class="form-check-label" for="gridRadios1">
            Aerolinea
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tipo" id="tipo2" value="Terrestre" onclick="desactivarcaja()">
          <label class="form-check-label" for="gridRadios2">
            Terrestre
          </label>
        </div>
        @error('tipo')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
      </div>
    </fieldset>

    <div class="col-md-4">
      <label for="inputState" class="form-label">Aerolinea</label>
      <select id="inputState1" class="form-select" name="aerolinea" id="opcion1" disabled>
        <option selected></option>
        <option>BoA(Boliviana de Aviación)</option>
      </select>
    </div>

    <div class="col-md-4">
      <label for="inputState" class="form-label">Buses</label>
      <select id="inputState2" class="form-select" name="terrestre" id="opcion2" disabled>
        <option selected></option>
        <option>Trans Azul</option>
      </select>
    </div>


    <h1>Detalles de producto:</h1>
    <p class="col-10"><strong>Cantidad o peso del producto:</strong></p>


    <div class="col-10">
      <label for="inputState" class="form-label">Tipo de producto:</label>
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

    <div class="col-md-3">
      <label for="inputEmail4" class="form-label">Kg:</label>
      <input type="text" class="form-control" name="kg" value="{{old('kg'),$formulario->kg}}" id="kg">
    </div>


    <div class="col-md-3">
      <label for="inputPassword4" class="form-label">Tonelada</label>
      <input type="text" class="form-control" id="tonelada" name="tonelada" value="{{old('tonelada'),$formulario->tonelada}}">
    </div>
    <br>
    

    <div class="col-12">
      <button type="button" class="btn btn-success" id="boton" value="boton" style="background: green;" onclick="operacion()" onclick="operacion2()">Calcular el precio a pagar</button>
    </div>


    <div class="col-md-3">
      <textarea name="total1" id="resultado" cols="30" rows="2" placeholder="=" style="font-size:2rem;" ></textarea>
      <textarea name="total2" id="resultado2" cols="30" rows="2" placeholder="=" style="font-size:2rem;" ></textarea>
    </div>



    <fieldset class="col-10">
      <legend class="col-form-label col-sm-2 pt-0"><strong>Tipo de pago:</strong> </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tipopago" id="tipo3" value="Tarjeta de crédito" checked>
          <label class="form-check-label" for="gridRadios1">
            Tarjeta de crédito
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="tipopago" id="tipo4" value="Paypal">
          <label class="form-check-label" for="gridRadios2">
            Paypal
          </label>
        </div>
      </div>
    </fieldset>


    <div class="col-md-3" id="cuenta">
      <label for="inputEmail4" class="form-label">Numero de cuenta:</label>
      <input type="text" class="form-control" id="cuenta" name="cuenta" value="{{old('cuenta'),$formulario->cuenta}}" >
      @error('cuenta')
            <small style="color: red">* {{$message}}</small>
            <br>
      @enderror
    </div>


    <div class="col-12">
      <button type="submit" class="btn btn-success" style="background: green;" onclick="return confirm('Estas seguro(a) de la informacion ingresada.?')" id="boton" value="boton">Aceptar</button>
    </div>
  </form>
                    

 @stop  