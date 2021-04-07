
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/productos_estilos.css')}}">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
    $(window).on('scroll',function() {
        if($(window).scrollTop()){
            $('nav').addClass('black');
        }
        else
        {
            $('nav').removeClass('black')
        }
    })
    </script>
    <title>Hello, world!</title>
  </head>
  <body>
    <nav  class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            
                
             
        <a class="navbar-brand" href="/"><img src="{{asset('img/logo1.png')}}" class="logo-brand" alt=""></a>
        <button style="background: green;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <ion-icon name="menu-outline"></ion-icon>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
              
            <li class="nav-item">
                <a class="nav-link" href="/" id="home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('carrito')}}" id="productos">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('solicitacion')}}" id="exporta">Exporta con Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('nosotros')}}" id="nosotros">Sobre Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('contactanos')}}" id="contactanos">Contactanos</a>
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
        @if (count(Cart::getContent()))
                {{-- <a href="{{route('cart.checkout')}}"> Cart  --}}
                <a href="{{route('cart.checkout')}}" class="link-direction">
                    <img src="https://img.icons8.com/color/48/000000/shopping-cart--v1.png"/>
                    <div class="left-info">
                        <span class="badge badge-danger">{{count(Cart::getContent())}}</span></a>
                        
                        {{-- <span class="title">CART</span> --}}
                    </div>
                </a>
            @endif

        </div>
      </div>
    </nav>


   
  
    <section id="hero">
      <div class="container">
        <div class="content-center topmargin-lg">
        <h1>Tenemos los mejores productos para Ti!</h1>
        </div>
      </div>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    <section id="portfolio">
         
        @forelse ($product as $item)
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <br>
            <div class="portfolio-container">
              <div class="portfolio-details">
                <a href="">
                   <h2>{{$item->nombre}}</h2>
                </a>
                <a href="">
                  <p>- Producto Boliviano</p>
                </a>
              </div>
              <img src="{{asset('img/platano.jpg')}}" class="img-fluid" alt="portfolio 1">
            </div>
            <br>
            <p style="color:#000;">Información:</p>
            <p style="font-size: 1.1rem">{{$item->descripcion}}</p>
            <p><strong style="color: #000"> Precio del producto:</strong> <strong style=" color:rgb(4, 107, 0);">$ {{$item->precio}}</strong></p>
            <br> 
            <form action="{{route('cart.add')}}" method="POST">
              @csrf
              <input type="hidden" name="product_id" value="{{$item->id}}">
              <input type="submit" name="btn"  class="btn btn-success" value="Añadir al carrito">
          </form>
            <br>
            <br>
        </div>
       

     
          <div class="col-md-6">
            <br>
            <div class="portfolio-container">
              <div class="portfolio-details">
                <a href="#">
                  <h2>Naranja</h2>
                </a>
                <a href="#">
                  <p>- Producto Boliviano</p>
                </a>
              </div>
              <img src="{{asset('img/naranja.jpg')}}" class="img-fluid" alt="portfolio 1">
            </div>
            <br>
            <p style="color:#000;">Información:</p>
            <p style="font-size: 1.1rem">Es rico en</p>
            <p><strong style="color: #000"> Precio del producto:</strong> <strong style="color:rgb(4, 107, 0);">$ 15</strong></p>
            <br>
            <button type="button" class="btn btn-success">Comprar Producto</button>
            <br>
            <br>
          </div>
          <div class="col-md-6">
            <div class="portfolio-container">
              <div class="portfolio-details">
                <a href="#">
                  <h2>Palta (Aguacate)</h2>
                </a>
                <a href="#">
                  <p>- Producto Boliviano</p>
                </a>
              </div>
              <img src="{{asset('img/palta.jpg')}}" class="img-fluid" alt="portfolio 1">
            </div>
            <br>
            <p style="color:#000;">Información:</p>
            <p style="font-size: 1.1rem">Si hay un alimento que destaca entre los frutos tropicales, ese es sin dudas, el aguacate o palta. Solo es cuestión de acercarse a una góndola de supermercado y detenernos a observar la cantidad de variedades de aguacate o palta que hay disponibles.</p>
            <p><strong style="color: #000"> Precio del producto:</strong> <strong style="background-color: #000;color:#fff; border-radius:10px; padding:2px">15$u$ por kilo</strong></p>
            <br>
            <button type="button" class="btn btn-success">Comprar Producto</button>
            <br>
            <br>
          </div>
          <div class="col-md-6">
            <div class="portfolio-container">
              <div class="portfolio-details">
                <a href="#">
                  <h2>Coca Chapareña</h2>
                </a>
                <a href="#">
                  <p>- Producto Boliviano</p>
                </a>
              </div>
              <img src="{{asset('img/coca.jpg')}}" class="img-fluid" alt="portfolio 1">
            </div>
            <br>
            <p style="color:#000;">Información:</p>
            <p style="font-size: 1.1rem">La coca es una planta con un complejo conjunto de nutrientes minerales, aceites esenciales y varios componentes con mayores o menores efectos farmacológicos, uno de los cuales resulta ser el alcaloide cocaína.</p>
            <p><strong style="color: #000"> Precio del producto:</strong> <strong style="background-color: #000;color:#fff; border-radius:10px; padding:2px">15$u$ por kilo</strong></p>
            <br>
            <button type="button" class="btn btn-success">Comprar Producto</button>
            <br>
            <br>
          </div>
          <div class="col-md-6">
            <div class="portfolio-container">
              <div class="portfolio-details">
                <a href="#">
                  <h2>Mandarina</h2>
                </a>
                <a href="#">
                  <p>- Producto Boliviano</p>
                </a>
              </div>
              <img src="{{asset('img/mandarina.jpg')}}" class="img-fluid" alt="portfolio 1">
            </div>
            <br>
            <p style="color:#000;">Información:</p>
            <p style="font-size: 1.1rem">La mandarina común tiene una estrecha conexión física entre la piel y el fruto. Las mandarinas comunes son menos propicias a dañarse durante el transporte y toleran mejor el almacenaje a largo plazo.</p>
            <p><strong style="color: #000"> Precio del producto:</strong> <strong style="background-color: #000;color:#fff; border-radius:10px; padding:2px">15$u$ por kilo</strong></p>
            <br>
            <button type="button" class="btn btn-success">Comprar Producto</button>
            <br>
            <br>
          </div>
          <div class="col-md-6">
            <div class="portfolio-container">
              <div class="portfolio-details">
                <a href="#">
                  <h2>Pacay</h2>
                </a>
                <a href="#">
                  <p>- Producto Boliviano</p>
                </a>
              </div>
              <img src="{{asset('img/pacay.jpg')}}" class="img-fluid" alt="portfolio 1">
            </div>
            <br>
            <p style="color:#000;">Información:</p>
            <p style="font-size: 1.1rem">El pacay, pacae o guaba, Inga feuilleei, es un árbol mimosáceo de la familia de las leguminosas que se encuentra en América del Sur y en América Central. También es conocido como guamo.</p>
            <p><strong style="color: #000"> Precio del producto:</strong> <strong style="background-color: #000;color:#fff; border-radius:10px; padding:2px">15$u$ por kilo</strong></p>
            <br>
            <button type="button" class="btn btn-success">Comprar Producto</button>
            <br>
            <br>
          </div>
        </div>
        {{-- <div class="text-center topmargin-sm">
          <p>Tienes algún problema, comunicate con nosotros?</p>
          <a href="{{url('contactanos')}}">Presione aqui.</a>
        </div> --}}
      </div>
      @empty
      @endforelse
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







{{-- <div class="container">
    <div class="row">
       <div class="col-sm-3 bg-light">
           @if (count(Cart::getContent()))
               <a href="{{route('cart.checkout')}}"> VER CARRITO <span class="badge badge-danger">{{count(Cart::getContent())}}</span></a>
           @endif

       </div>
       <div class="col-sm-9">
            <div class="row  justify-content-center">
                @forelse ($product as $item)
                <div class="col-4 border p-5 mt-5 text-center">
                    <h1>{{$item->nombre}}</h1>
                    <P>{{$item->descripcion}}</P>
                    <P>$ {{$item->precio}}</P>
                    <form action="{{route('cart.add')}}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$item->id}}">
                        <input type="submit" name="btn"  class="btn btn-success" value="AÑADIR AL CARRITO">
                    </form>
                </div>
            @empty
                
            @endforelse
            </div>
            
       </div>
    </div>
</div> --}}
