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
                      
            <h2 class="heading-section">Contactanos</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="login-wrap p-0">
              
                    <form method="POST" action="{{route('product.store')}}" class="aviso">
                      @csrf
                <div class="form-group">
                  <input type="text" name="nombre" class="form-control" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control" id="email" required="obligatorio" placeholder="Escribe tu Email">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                      
                </div>
                <div class="form-group">
                  <input type="tel" name="telefono" class="form-control" id="telefono" placeholder="Escribe tu teléfono">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                      
                </div>
                <div class="form-group">
                  <textarea name="mensaje" class="form-control" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea>
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                      
                </div>

                
               
                <div class="form-group">
                  <button style="color: white;" type="submit" type="button" onclick="xax()" class="form-control btn btn-success submit px-3" name="enviar_formulario" id="enviar"><p>Enviar</p></button>
                </div>
              
              </form>
              
          </div>
        </div>
      </div>
    </section>
    <section id="footer" class="bg-dark">
      <div class="container">
        <img src="{{asset('img/logo1.png')}}" alt="logo" class="logo-brand">
        <ul class="list-inline">
          <li class="list-inline-item footer-menu"><a href="/">Inicio</a></li>
          <li class="list-inline-item footer-menu"><a href="{{ url('carrito')}}">Productos</a></li>
          <li class="list-inline-item footer-menu"><a href="{{ url('solicitacion')}}">Solicitud</a></li>
          <li class="list-inline-item footer-menu"><a href="{{ url('nosotros') }}">Sobre nosotros</a></li>
          <li class="list-inline-item footer-menu"><a href="{{ url('contactanos') }}">Contactanos</a></li>
        </ul>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-instagram"></ion-icon></a></li>
          <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-twitter"></ion-icon></a></li>
          <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-youtube"></ion-icon></a></li>
          <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-dribbble"></ion-icon></a></li>
          <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-facebook"></ion-icon></a></li>
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

      $('.aviso').submit(function(e){
        e.preventDefault();
        Swal.fire({
  title: 'Estas seguro de enviar este mensaje?',
  text: "Una vez enviado no se puede revertir",
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