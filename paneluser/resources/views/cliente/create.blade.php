
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script type="text/javascript" src="{{asset('js/desabilitar.js')}}"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
        <a class="navbar-brand" href="/"><img src="{{asset('img/logo1.png')}}" class="logo-brand" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <ion-icon name="menu-outline"></ion-icon>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/" id="home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('carrito')}}" id="productos">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('solicitacion')}}" id="exporta">Exporta con Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('nosotros') }}" id="nosotros">Sobre Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('contactanos') }}" id="contactanos">Contactanos</a>
            </li>
          </ul>
		  @guest
									@if (Route::has('login'))
										<li class="btn btn-outline-success my-2 my-sm-0">
											<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
										</li>
									@endif
									
									@if (Route::has('register'))
										<li class="btn btn-outline-success my-2 my-sm-0">
											<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
										</li>
									@endif
								@else
		
								
		
									<li class="nav-item dropdown">
										<a id="navbarDropdown" class="btn btn-outline-success my-2 my-sm-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
											{{ Auth::user()->name }}
												{{-- Auth::guard('admins')->user()->name
													Auth::admins()->user()->name 
											Auth::guard('admin')->user()->name --}}
										</a>
		
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
											<a class="btn btn-outline-success my-2 my-sm-0" href="{{ route('logout') }}"
											   onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
											</a>
		
											<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
												@csrf
											</form>
										</div>
									</li>
		
								@endguest
          {{-- <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Inicar Sesión</button>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Registrarse</button>
          </form> --}}
        </div>
      </div>
    </nav>
    <section class="ftco-section">
      <div class="container">
              
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
                      
            <h2 class="heading-section">Formulario de Solicitud de producto:</h2>
          </div>
        </div>
    





  <div class="col-md-10">
    <div class="card">
        <div class="card-body">

                    
    <br>
    <br>
    <h3>¿Quién recibe?</h3>
<form class="exp" action="{{ route('product.agre') }}" method="POST">

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
      
   
    <textarea name="total1" id="resultado" cols="30" rows="2" placeholder="Costo en Kilos" style="font-size:1rem;" ></textarea>
    <textarea name="total2" id="resultado2" cols="30" rows="2" placeholder="Costo Toneladas" style="font-size:1rem;" ></textarea>
    <textarea name="total3" id="resultado3" cols="30" rows="2" placeholder="Costo Carrito" style="font-size:1rem;" >{{Cart::getTotal()}}</textarea>
  


    <fieldset class="col-10">
      <legend class="col-col-md-4 col-form-label col-sm-2 pt-0"><strong>Tipo de pago:</strong> </legend>
      <div class="form-group row">
        <div class="form-check">
          <div class="col-md-5">
          <input class="form-check-input" type="radio" name="tipopago" id="tipo3" value="Tarjeta de crédito" onclick="cuen()">
          <label class="form-check-label" for="gridRadios1">
            Tarjeta de crédito
          </label>
          </div>
        </div>
        
        <div class="form-check">
          <div class="col-md-5">
          <input class="form-check-input" type="radio" name="tipopago" id="tipo4" value="Paypal" onclick="pay()">
          <label class="form-check-label" for="gridRadios2">
            <a href="https://www.paypal.com/agreements/approve?nolegacy=1&ba_token=BA-25L17899RJ145874Y">PayPal</a>
          </label>
          </div>
        </div>
        
        
      </div>
    </fieldset>


    <div class="form-group row">
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
      <button type="submit" onclick="x()" class="btn btn-success" id="boton" value="boton">Aceptar</button>
    </div>
  </form>
        </div>
        </div>
        </div>       
  </div> 
</div>
</div>
</div>
</div>
</section>
<section id="footer" class="bg-dark">
  <div class="container">
    <img src="{{asset('img/logo1.png')}}" alt="logo" class="logo-brand">
    <ul class="list-inline">
      <li class="list-inline-item footer-menu"><a href="/">Inicio</a></li>
      <li class="list-inline-item footer-menu"><a href="{{url('carrito')}}">Productos</a></li>
      <li class="list-inline-item footer-menu"><a href="{{url('solicitacion')}}">Exporta con nosotros</a></li>
      <li class="list-inline-item footer-menu"><a href="{{url('nosotros')}}">Sobre nosotros</a></li>
      <li class="list-inline-item footer-menu"><a href="{{url('contactanos')}}">Contactanos</a></li>
    </ul>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
      <li class="list-inline-item"><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
      <li class="list-inline-item"><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
      <li class="list-inline-item"><a href="#"><ion-icon name="logo-dribbble"></ion-icon></a></li>
      <li class="list-inline-item"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
    </ul>
    <small>©2021 Todos los derechos reservados por creadores Ever C. F.| Misael M. G.|Rodrigo M. A.</small>
  </div>
</section>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>

      $('.exp').submit(function(e){
        e.preventDefault();
        Swal.fire({
  title: '¿Quieres realizar esta solicitud de exportacion?',
  text: "El mundo de los productos este al alcance de todos!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Enviar'
}).then((result) => {
  if (result.isConfirmed) {
    this.submit();
    
    // Swal.fire(
    //   'Deleted!',
    //   'Your file has been deleted.',
    //   'success'
    // )
  }
})
       
    
     
      });
     
    </script>
</body>
</html> 