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
    <section id="hero">
      <div class="container">
        <div class="content-center topmargin-lg">
        <h1>Exportaciones La LLajta</h1>
        <p>Somos una empresa de exportacion de frutos bolivianos para que usted no le falte fruta en su hogar.</p>
          <a href="{{ url('carrito')}}" class="btn btn-light topmargin-sm">Explora ahora<ion-icon name="arrow-forward-circle"></ion-icon></a>
        </div>
      </div>
    </section>

    <section id="portfolio">
      <div class="container-fluid">
        <div class="content-center">
          <h2>Nosotros trabajos para usted y usted trabaja con nosotros <b>Productos asombrosos</b>.</h2>
          <p>El mundo de los productos y la exportacion cada vez mas va en acenso para todo el mundo, por esta razon que nuestrar empresa de frutas no se puede quedar atras.</p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="portfolio-container">
              <div class="portfolio-details">
                <a href="{{ url('carrito')}}">
                  <h2>Platano</h2>
                </a>
                <a href="{{ url('carrito')}}">
                  <p>Informacion</p>
                </a>
              </div>
              <img src="{{asset('img/platano.jpg')}}" class="img img-fluid" alt="portfolio 1">
            </div>
          </div>
          <div class="col-md-6">
            <div class="portfolio-container">
              <div class="portfolio-details">
                <a href="{{ url('carrito')}}">
                  <h2>Naranja</h2>
                </a>
                <a href="{{ url('carrito')}}">
                  <p>Informacion</p>
                </a>
              </div>
              <img src="{{asset('img/naranja.jpg')}}" class="img img-fluid" alt="portfolio 1">
            </div>
          </div>
          <div class="col-md-6">
            <div class="portfolio-container">
              <div class="portfolio-details">
                <a href="{{ url('carrito')}}">
                  <h2>Palta</h2>
                </a>
                <a href="{{ url('carrito')}}">
                  <p>Informacion</p>
                </a>
              </div>
              <img src="{{asset('img/palta.jpg')}}" class="img img-fluid" alt="portfolio 1">
            </div>
          </div>
          <div class="col-md-6">
            <div class="portfolio-container">
              <div class="portfolio-details">
                <a href="{{ url('carrito')}}">
                  <h2>Hoja de Coca</h2>
                </a>
                <a href="{{ url('carrito')}}">
                  <p>Informacion</p>
                </a>
              </div>
              <img src="{{asset('img/coca.jpg')}}" class="img img-fluid" alt="portfolio 1">
            </div>
          </div>
        </div>
        
      </div>
    </section>
    <section id="aboutus" class="bg-light-grey">
      <div class="container">
        <div class="content-center">
          <h2>Nuestra compañia la La LLajta <b> Gran Compañia</b></h2>
          <p>Somos un grupo de aficionados aun cursando la Universidad pero podemos desarrollar sistemas arqueologicos segun las bases de nuestros clientes.</p>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="member-container">
              <div class="member-details">
                <h5>Rodrigo Mendoza Avila</h5>
                <span>Desarrollador Web</span>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-instagram"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-twitter"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-youtube"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-dribbble"></ion-icon></ion-icon></a></li>
                  <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-facebook"></ion-icon></a></li>
                </ul>
              </div>
              <img src="{{asset('img/usuario1.png')}}" class="img-fluid" alt="member 1">
            </div>
          </div>
          <div class="col-md-4">
            <div class="member-container">
              <div class="member-details">
                <h5>Ever Cupi Franco</h5>
                <span>Desarrollador Web</span>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-instagram"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-twitter"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-youtube"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-dribbble"></ion-icon></ion-icon></a></li>
                  <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-facebook"></ion-icon></a></li>
                </ul>
              </div>
              <img src="{{asset('img/usuario1.png')}}" class="img-fluid" alt="member 2">
            </div>
          </div>
          <div class="col-md-4">
            <div class="member-container">
              <div class="member-details">
                <h5>Misael Marquez Gutierrez</h5>
                <span>Desarrollador Web</span>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-instagram"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-twitter"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-youtube"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-dribbble"></ion-icon></ion-icon></a></li>
                  <li class="list-inline-item"><a href="https://www.instagram.com/?hl=es"><ion-icon name="logo-facebook"></ion-icon></a></li>
                </ul>
              </div>
              <img src="{{asset('img/usuario1.png')}}" class="img-fluid" alt="member 3">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials">
      <div class="container">
        <div class="content-center">
          <h2>Opíniones de <b>nuestros clientes....</b></h2>
          <p>En esta seccion se mostrara las opiniones de nuestros clientes satisfechos o insatisfechos sobre nuestra empresa de desarrollo web.</p>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="carousel-container">
              <p>La pagina tiene un buen diseño.</p>
                  <div class="rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                    </ul>
                  </div>
                  <div class="testimonial-user">
                    <div class="row">
                      <div class="col-md-3">
                        <img src="{{asset('img/usu1.jpg')}}" class="img-fluid" alt="testimonial user 1">
                      </div>
                      <div class="col-md-9">
                        <h6>Marisa Mayer</h6>
                        <span>Yahoo Ceo</span>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-container">
              <p>Esta pagina me gusto porque es interactiva, amigable, llamativa, consultiva...</p>
                  <div class="rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                    </ul>
                  </div>
                  <div class="testimonial-user">
                    <div class="row">
                      <div class="col-md-3">
                        <img src="{{asset('img/mendazo.jpg')}}" class="img-fluid" alt="testimonial user 1">
                      </div>
                      <div class="col-md-9">
                        <h6>Rodrigo Mendazo Avila</h6>
                        <span>Albañil</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
              <div class="carousel-container">
              <p>Consideron que esta pagina web resalta todo lo importante que quiere exportar sobre su comercio el crecimiento sobre sus productos y la implementacion y un desarrollo mas, es una buena experiencia para productos y servicios.</p>
                  <div class="rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                      <li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
                    </ul>
                  </div>
                  <div class="testimonial-user">
                    <div class="row">
                      <div class="col-md-3">
                        <img src="{{asset('img/mendazo.jpg')}}" class="img-fluid" alt="testimonial user 1">
                      </div>
                      <div class="col-md-9">
                        <h6>Rodrigo Mendazo Avila</h6>
                        <span>Albañil</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <div class="control-button">
              <ion-icon name="arrow-back-circle"></ion-icon>
              <span class="sr-only">Previous</span>
            </div>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <div class="control-button">
              <ion-icon name="arrow-forward-circle"></ion-icon>
            </div>
            <span class="sr-only">Next</span>
          </a>
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
  </body>
</html>