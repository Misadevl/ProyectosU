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
        <a class="navbar-brand" href="#"><img src="{{asset('img/logo1.png')}}" class="logo-brand" alt=""></a>
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
    <section id="hero">
        <div class="container">
          <div class="content-center topmargin-lg">
          <h1>La LLajta</h1>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam maxime accusamus nesciunt amet, 
            fuga iste ut eveniet expta facere pariatur?</p>
            <a href="#" class="btn btn-light topmargin-sm">Explore now <ion-icon name="arrow-forward-circle"></ion-icon></a>
          </div>
        </div>
      </section>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
    <div class="row">
       <div class="col-sm-12 bg-light">
           @if (count(Cart::getContent()))
            <table class="table table-light table-responsive-sm table-hover>
                <thead class="thead-dark">
                    {{-- <th>ID</th> --}}
                    <th>NOMBRE</th>
                    <th>PRECIO</th>
                    <th>CANTIDAD</th>
                    <th scope="col">BORRAR</th>
                    
                    
                </thead>
                <tbody>
                    @foreach (Cart::getContent() as $item)
                        <tr>
                            {{-- <td>{{$item->id}}</td> --}}
                            <td>{{$item->name}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>
                                <form action="{{route('cart.removeitem')}}" class="d-inline" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <button type="submit" class="btn btn-link btn-sm text-danger">x</button>
                                </form>
                            </td>
                            {{-- <td scope="row">{{Cart::getTotalQuantity()}}</td> --}}
                            <td scope="row"></td>
                            <td scope="row"></td>
                        </tr>
                        
                    @endforeach
                    
                </tbody>
            </table>
            {{-- <p>{{Cart::getTotal()}}</p> --}}
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Items</th>
                        
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">{{Cart::getTotalQuantity()}}</td>
                       
                        <td scope="row">{{Cart::getTotal()}}</td>
                    </tr>
                </tbody>
            </table>

<a class="btn btn-info" href="{{ url('cliente/create') }}">COMPRAR</a>

            {{-- <form action="{{ url('cliente/create') }}" class="d-inline" method="POST">
              @csrf
              
              <input class="btn btn-info d-inline" type="submit" onclick="return confirm('Quieres comprar?')" value="Comprar">

          </form> --}}
           
            @else
                <p>Carrito vacio</p>
           @endif

       </div>
       
    </div>
</div>
                </div>
            </div>
        </div>
    </div>


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
</body>
</html>