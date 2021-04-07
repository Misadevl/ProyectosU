<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/stilo.css')}}">
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
        </div>
      </div>
    </nav>
    <section id="aboutus" class="bg-light-grey">
      <div class="container">
        <div class="content-center">
        <br><br>
        <h5>LALLAJTA</h5>
          <p>Hoy en día se han convertido en uno de los grandes acontecimientos de la exportación de
            diferente tipos de cosas por diferentes tipos de empresas como ser AMAZON, FEDEX,etc.<br>

            En el transcurso del tiempo todo esto se ha vuelto algo normal por esta razón nuestra 
            empresa se dedica a EXPORTAR productos como ser Coca,
            al interior de nuestro país ya que estos productos son unos de los as consumidos por el mismo,
            las cuales producen en diferentes parte de nuestro país y exactamente por eso que nos 
            dedicamos a la EXPORTAR de dichos productos al resto del país y de esta forma la gente
            pueda consumir dichos productos comprándolos en diferentes lugar como ser: 
            super mercados, mercados locales, etc.<br>

            Nuestra empresa de EXPORTAR se centra en el requerimiento de los diferentes 
            departamentos ya que no en todos los departamento tienen un consumo igual de cada uno de
            los productos en unos se consumen mas que otros el los diferentes departamentos para esto
            contamos con los diferentes registros de pedidos que realizan para los diferentes departamentos del país.</p>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="member-container">
              <div class="member-details">
                <h5>Rodrigo Mendoza Avila</h5>
                <span>Desarrollador Web</span>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-dribbble"></ion-icon></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                </ul>
              </div>
              <img src="https://scontent.fcbb1-1.fna.fbcdn.net/v/t1.6435-9/88291682_2562365607369193_3534144531349897216_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=x_g9QTjdaJQAX8ZuP54&_nc_ht=scontent.fcbb1-1.fna&oh=96667a268532db79558352d131499ced&oe=6091C8B8" class="img-fluid" alt="member 1">
            </div>
            <div class="card-body">
              <p class="card-text">Estudia Ingenieria en sistemas en UPDS - Sede Cochabamba <br><br> Estudió en Centro educativo Catolica<br><br> Vive en Bolivia en la Ciudad de Cochabamba</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="member-container">
              <div class="member-details">
                <h5>Ever Cupi Franco</h5>
                <span>Desarrollador Web</span>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-dribbble"></ion-icon></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                </ul>
              </div>
              <img src="https://scontent.fcbb1-2.fna.fbcdn.net/v/t1.6435-9/125185836_719069422052418_7866430749343018041_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=Bwlg0CDby3YAX-_h7wO&_nc_ht=scontent.fcbb1-2.fna&oh=2d5e23641658056930e386f72c484080&oe=6090522B" class="img-fluid" alt="member 2">
            </div>
            <div class="card-body">
              <p class="card-text">Estudia Ingenieria en sistemas en UPDS - Sede Cochabamba <br><br> Estudió en Centro Martin Cardenaz<br><br>Vive en Bolivia en la Ciudad de Cochabamba</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="member-container">
              <div class="member-details">
                <h5>Misael Marquez Gutierrez</h5>
                <span>Desarrollador Web</span>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-dribbble"></ion-icon></ion-icon></a></li>
                  <li class="list-inline-item"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                </ul>
              </div>
              <img src="https://scontent.fcbb1-1.fna.fbcdn.net/v/t1.6435-9/118733958_3309631205794953_7788438160137134419_n.jpg?_nc_cat=111&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=U6hgLf6fKKQAX_f3gv8&_nc_ht=scontent.fcbb1-1.fna&oh=59bfa80a0188856ebd4d5689e891613e&oe=60910E98" class="img-fluid" alt="member 3">
            </div>
            <div class="card-body">
              <p class="card-text">Estudia Ingenieria en sistemas en UPDS - Sede Cochabamba <br><br> Estudió en Centro educativo ebenezer<br><br>Vive en Bolivia en la Ciudad de Cochabamba</p>
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