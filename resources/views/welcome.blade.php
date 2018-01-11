<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset=utf-8>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DTE</title>
  <!-- Load Roboto font -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <!-- Load css styles -->
  <link rel="stylesheet" type="text/css" href="informativa/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="informativa/css/bootstrap-responsive.css" />
  <link rel="stylesheet" type="text/css" href="informativa/css/style.css" />
  <link rel="stylesheet" type="text/css" href="informativa/css/pluton.css" />
  <link rel="stylesheet" type="text/css" href="informativa/css/jquery.cslider.css" />
  <link rel="stylesheet" type="text/css" href="informativa/css/jquery.bxslider.css" />
  <link rel="stylesheet" type="text/css" href="informativa/css/animate.css" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="informativa/images/ico/apple-touch-icon-144.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="informativa/images/ico/apple-touch-icon-114.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="informativa/images/apple-touch-icon-72.png">
  <link rel="apple-touch-icon-precomposed" href="informativa/images/ico/apple-touch-icon-57.png">
  <link rel="shortcut icon" href="informativa/images/ico/favicon.ico">
</head>

<body>
  <!-- menu -->
  <div class="navbar">
    @include("dteInformativa.navbar")
  </div>
  <!-- Banner -->
  <div id="home">
    @include("dteInformativa.banner")
  </div>
  <!-- Servicios  -->
  <div class="section primary-section" id="service">
    @include("dteInformativa.servicios")

  </div>
  <!-- Portfolio -->
  <div class="section secondary-section " id="portfolio">
    @include("dteInformativa.portafolio")
  </div>
  <!-- Nosotros-->
  <div class="section primary-section" id="about">
    @include("dteInformativa.nosotros")
  </div>
  <!-- Frase -->
  <div class="section secondary-section">
    <div class="triangle"></div>
    <div class="container centered">
      <p class="large-text">La elegancia no es la abundancia de la simplicidad. Es la ausencia de complejidad.</p>
    </div>
  </div>
  <!-- Clientes -->
<!--   <div id="clients">
    @include("dteInformativa.clientes")
  </div> -->
  <!-- Nuestros Clientes -->
  <div class="section third-section">
    @include("dteInformativa.nuestrosClientes")
  </div>
  <!-- Price section start -->
  <div id="price" class="section secondary-section">
    @include("dteInformativa.precios")
  </div>
  <!-- Newsletter section start -->
  <div class="section third-section">
    @include("dteInformativa.noticias")
  </div>
  <!-- Contactos -->
  <div id="contact" class="contact">
    @include("dteInformativa.contactos")
  </div>
  <!-- Footer -->
  <div class="footer">
    <p> Copyright ©2018 <a href="https://www.facebook.com/lwtechnologicalsolutions/" target="_blanck">DTE / Programamos tu vida.</a>
    </p>
  </div>
  <!-- ScrollUp button start -->
  <div class="scrollup">
    <a href="#">
      <i class="icon-up-open"></i>
    </a>
  </div>
  <!-- Include javascript -->
  <script src="informativa/js/jquery.js"></script>
  <script type="text/javascript" src="informativa/js/jquery.mixitup.js"></script>
  <script type="text/javascript" src="informativa/js/bootstrap.js"></script>
  <script type="text/javascript" src="informativa/js/modernizr.custom.js"></script>
  <script type="text/javascript" src="informativa/js/jquery.bxslider.js"></script>
  <script type="text/javascript" src="informativa/js/jquery.cslider.js"></script>
  <script type="text/javascript" src="informativa/js/jquery.placeholder.js"></script>
  <script type="text/javascript" src="informativa/js/jquery.inview.js"></script>
  <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
  <script type="text/javascript" src="informativa/js/app.js"></script>
</body>
</html>