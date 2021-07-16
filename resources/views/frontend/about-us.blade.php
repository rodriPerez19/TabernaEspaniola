<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taberna Española-Tember Marketing</title>

    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="https://kit.fontawesome.com/fdbba8c2bf.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/style.css') }}">
</head>

<body>
    <a href="https://api.whatsapp.com/send?phone=+542262593831&text=Hola%21%20Quisiera%20realizar%20una%20reserva.%20."
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <!--banner-->
    <section id="banner">
        <div class="bg-color">
            <header id="header">
                <div class="container">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="#about">Nosotros</a>
                        <a href="#event">Eventos</a>
                        <a href="/menu">Menú</a>
                        <a href="#contact">Contacto</a>
                    </div>
                    <!-- Use any element to open the sidenav -->
                    <span onclick="openNav()" class="pull-right menu-icon">☰</span>
                </div>
            </header>
            <div class="container">
                <div class="row">
                    <div class="inner text-center">
                        <h1 class="logo-name">Taberna Española</h1>
                        <h2>
                            Con su destacada cocina y personalizada atención este lugar es íntimo, clásico y actual.
                        </h2>
                        <p>
                            Nos especializamos en comidas Tradicionales Españolas
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / banner -->
    <!--about-->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">Taberna Española</h1>
                    <p class="header-p">No se prive de almorzar o cenar en un lugar distinto con la mejor atención.
                        <br>
                    </p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="col-md-6 col-sm-6">
                        <div class="about-info">
                            <h2 class="heading">Sobre nosotros:</h2>
                            <p>Nuestra cocina se especializa en platos españoles originales, algunos con un toque
                                especial de nuestro chef. Los platos estan orientados a deleitar el paladar con sabores
                                únicos para disfrutar de una exelente experiencia y recordar el sabor de un auténtico
                                plato español.</p>
                            <div class="details-list">
                                <ul>
                                    <li><i class="fa fa-check"></i>Paella.</li>
                                    <li><i class="fa fa-check"></i>Cazuela de Mariscos.</li>
                                    <li><i class="fa fa-check"></i>Gambas al Ajillo.</li>
                                    <li><i class="fa fa-check"></i>Salmon Pescadora, entre otros.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img src="img/res03.jpg" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <!--/about-->
    <!-- event -->
    <section id="event">

        <div class="bg-color" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center" style="padding:60px;">
                        <h1 class="header-h"> Próximos Eventos</h1>
                        <p class="header-p">Un poco de información...</p>
                    </div>
                    <div class="col-md-12" style="padding-bottom:60px;">
                        <div class="item active left">
                            <div class="col-md-6 col-sm-6 left-images">
                                <img src="{{ asset('img/res04.jpg') }}" class="img-responsive">
                            </div>
                            <div class="col-md-6 col-sm-6 details-text">
                                <div class="content-holder">
                                    <h2>Fiestas alegre</h2>
                                    <p> Actualmente y por razones de público conocimiento no realizamos eventos pero
                                        podemos acercarte a tu mesa nuestros deliciosos platos. Consultanos!!!
                                    <address>
                                        <strong>Lugar: </strong>
                                        Calle 83 Nº 350, 7630 Necochea
                                        <br>
                                        <strong>Hora: </strong>
                                        07:30pm
                                    </address>
                                    <a class="btn btn-imfo btn-read-more" href="https://api.whatsapp.com/send?phone=+542262593831&text=Hola%21%20Quisiera%20realizar%20una%20reserva.%20.">Reservar Mesa</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ event -->

    <!-- contact -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="header-h">Reserve su mesa</h1>
                    <p class="header-p">Realiza tu reservación y andá pensando en los deliciosos <br> platillos que
                        podes probar! </p>
                </div>
            </div>
            <div class="row msg-row">
                <div class="col-md-4 col-sm-4 mr-15">
                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span>
                            </div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Contacto</h4>
                            <p class="light-blue regular alt-p">+226 2593831 - <span class="contacts-sp">para su
                                    Reserva</span></p>
                        </div>
                    </div>
                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span>
                            </div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Horario de apertura</h4>
                            <p class="light-blue regular alt-p">de Lunes a Viernes 11.30 - 14:30 hs</p>
                            <p class="light-blue regular alt-p">
                                Sábado y Domingo 19:30 - 00.00 hs
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <form action="" method="post" role="form" class="contactForm">
                        <div id="sendmessage">Your booking request has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <div class="col-md-6 col-sm-6 contact-form pad-form">
                            <div class="form-group label-floating is-empty">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre"
                                    data-rule="minlen:4" data-msg="Ingrese al menos 4 caracteres" />
                                <div class="validation"></div>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <input type="date" class="form-control label-floating is-empty" name="date" id="date"
                                    placeholder="Date" data-rule="required" data-msg="This field is required" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form pad-form">
                            <div class="form-group">
                                <input type="email" class="form-control label-floating is-empty" name="email" id="email"
                                    placeholder="Correo Electrónico" data-rule="email"
                                    data-msg="Por favor introduzca una dirección de correo electrónico válida" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <input type="time" class="form-control label-floating is-empty" name="time" id="time"
                                    placeholder="Time" data-rule="required" data-msg="Este campo es requerido" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control label-floating is-empty" name="phone" id="phone"
                                    placeholder="Teléfono" data-rule="required" data-msg="Este campo es requerido" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <input type="number" class="form-control label-floating is-empty" name="people"
                                    id="people" placeholder="Personas" data-rule="required"
                                    data-msg="Este campo es requerido" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 contact-form">
                            <div class="form-group label-floating is-empty">
                                <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required"
                                    data-msg="Por favor escribe algo para nosotros" placeholder="Mensaje"></textarea>
                                <div class="validation"></div>
                            </div>

                        </div>
                        <div class="col-md-12 btnpad">
                            <div class="contacts-btn-pad">
                                <button class="contacts-btn">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- / contact -->
    <!-- footer -->
    @include('layoutsWeb.footer')
    <!-- / footer -->

<script src="{{ asset('contactform/contactform.js')}}"></script>
  <script src="{{ asset('js/template/jquery.min.js')}}"></script>
  <script src="{{ asset('js/template/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('js/template/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/template/custom.js')}}"></script>

</body>

</body>

</html>
