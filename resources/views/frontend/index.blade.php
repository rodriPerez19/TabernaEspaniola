<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Taberna Española-Tember Marketing</title>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <script src="https://kit.fontawesome.com/fdbba8c2bf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/template/style.css') }}">

</head>

<style>
ul li a {
  font-size: 1em !important;
  padding: 5px !important;
  margin: 0 5px !important
}
ul li {
  margin-bottom: 15px !important
}
</style>

<body>
  <!--banner-->

  <!-- menu -->
  <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Nuestro Menú</h1>

          <p class="header-p">Disfrute de la gran variedad de platos que disponemos para usted! </p>
        </div>

        <div class="col-md-12  text-center" id="menu-flters">
          <ul style="margin-left: -40px">
            <li><a href="{{ url('/') }}">MENÚ COMPLETO</a></li>
            <li><a href="{{ url("categoria/1") }}" >Entradas</a></li>
            <li><a href="{{ url("categoria/2") }}" >Ensaladas</a></li>
            <li><a href="{{ url("categoria/3") }}" >Platos principales</a></li>
            <li><a href="{{ url("categoria/4") }}" >Picadas de mariscos</a></li>
            <li><a href="{{ url("categoria/5") }}" >Pescados</a></li>
            <li><a href="{{ url("categoria/6") }}" >Pollos / Lomos</a></li>
            <li><a href="{{ url("categoria/7") }}" >Tortillas</a></li>
            <li><a href="{{ url("categoria/8") }}" >Postres</a></li>
            <li><a href="{{ url("categoria/9") }}" >Vinos tintos</a></li>
            <li><a href="{{ url("categoria/10") }}" >Vinos blancos</a></li>
            <li><a href="{{ url("categoria/11") }}" >Cervezas</a></li>
            <li><a href="{{ url("categoria/12") }}" >Agua / Gaseosas</a></li>
          </ul>
        </div>

        <div id="menu-wrapper">

            <div class="clearfix "></div>
            <div class="text-center">
                {{$products->links()}}
            </div>

            @foreach ($products as $product)

                @if (isset($product->show))

                    <div class="menu-restaurant">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">{{ $product->name }}</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">${{ $product->price }}</span>
                        </span>
                        <span class="menu-subtitle" style="font-size: 1.7rem">{{ $product->description }}</span>
                    </div>

                @endif

            @endforeach

            <div class="clearfix "></div>
            <div class="text-center">
                {{$products->links()}}
            </div>


      </div>
    </div>
  </section>
  <!--/ menu -->
  <!-- contact -->

  <!-- / contact -->
  <!-- footer -->
  @include('layoutsWeb.footer')
  <!-- / footer -->

  <script src="{{ asset('js/template/jquery.min.js')}}"></script>
  <script src="{{ asset('js/template/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('js/template/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/template/custom.js')}}"></script>
  <script src="{{ asset('contactform/contactform.js')}}"></script>
</body>

</html>
