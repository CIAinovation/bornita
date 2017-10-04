<!DOCTYPE html>
<html lang="es">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Parallax Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="materialize/css/main.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="materialize/css/font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>

<!--          Menu         -->
<nav class="nav-extended white top-menu" id="top-menu">
    <div class="nav-wrapper " >
      <a href="index.php" class="brand-logo"><img src="img/home/contacto/logoMenu.png" class="logo-menu" alt="Logo Bornita"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="selected"><a href="/index.php" class="" >Inicio</a></li>
        <li class=""><a class="" >Nosotros</a></li>
        <li><a class="" href="src/joyeria.php">Joyeria</a></li>
        <li><a class="" href="src/muebles.php">Hogar</a></li>
        <li><a class="" href="collapsible.html">Contáctanos</a></li>
        <li><a href="mobile.html" class="a-nav"><i class="material-icons">shopping_cart</i></a></li>
        <li><a class="btn-login " href="vistas/login.php">Login</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a class="" href="/index.php"><b>Inicio</b></a></li>
        <li><a class="" href="sass.html"><b>Nosotros</b></a></li>
        <li><a class="" href="src/joyeria.php">Joyeria</a></li>
        <li><a class="" href="src/muebles.php">Hogar</a></li>
        <li><a class="" href="collapsible.html">Contáctanos</a></li>
        <li><a class="" href="collapsible.html">Carrito</a></li>
        <li><a class="" href="vistas/login.php">Login</a></li>
      </ul>
    </div>
  </nav>

<!---     Slider      -->
<div class="slider" align="left">
    <ul class="slides">
      <li>
        <img src="img/home/slider/heroimage@2xBornita-com.png"> <!-- random image -->
        <div class="caption " align="left" >
          <h1 class="titulo-slider">Joyeria <br>Artesanal</h1>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/1230/547/nature/7"> <!-- random image -->
        <div class="caption left-align">
           <h1 class="titulo-slider">Joyeria <br>Artesanal</h1>
        </div>
      </li>
      <li>
        <img src="http://lorempixel.com/1230/547/nature/10"> <!-- random image -->
        <div class="caption left-align">
           <h1 class="titulo-slider">Joyeria <br>Artesanal</h1>
        </div>
      </li>
    </ul>
  </div>

<!---     Novedades      -->
<div class="" id="portfolio">
  <div class="container-fluid">
    <div align="center">
      <h5 class="selected titulo-guion"><a>NOVEDADES</a></h5>   
    </div>
    <div class="grid">
      <!-- img grande -->
      <div class="folio-item">
          <div class="grid-item">
            <div class="folio-image">
                <img class="responsive-img" src="img/home/novedades/hongo-grd.jpg" />
            </div>
            <div class="overlay">
              <div align="right" class="circle">
                <a href="#" class="" data-lightbox="portfolio"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                      <h5>Juego de collar con aretes</h5><br>
                  </div>
                  <div class="folio-overview">
                      <span class="folio-link"><a class="folio-read-more boton" href="#"
                        data-single_url="portfolio/portfolio-alianzas.html">Añadir al Carrito</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- img mediana -->
      <div class="folio-item">
          <div class="grid-item grid-item--height2">
            <div class="folio-image">
                <img class="responsive-img" src="img/home/novedades/mariposa-med.jpg" />
            </div>
            <div class="overlay">
              <div align="right" class="circle">
                <a href="#" class="" data-lightbox="portfolio"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                      <h5>Juego de collar con aretes</h5><br>
                  </div>
                  <div class="folio-overview">
                      <span class="folio-link"><a class="folio-read-more boton" href="#"
                        data-single_url="portfolio/portfolio-alianzas.html">Añadir al Carrito</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- img chica -->
      <div class="folio-item">
          <div class="grid-item grid-item--height3">
            <div class="folio-image">
                <img class="responsive-img" src="img/home/novedades/flor-ch.jpg" />
            </div>
            <div class="overlay">
              <div align="right" class="circle">
                <a href="#" class="" data-lightbox="portfolio"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                      <h5>Juego de collar con aretes</h5><br>
                  </div>
                  <div class="folio-overview">
                      <span class="folio-link"><a class="folio-read-more boton" href="#"
                        data-single_url="portfolio/portfolio-alianzas.html">Añadir al Carrito</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- img chica -->
      <div class="folio-item">
          <div class="grid-item grid-item--height3">
            <div class="folio-image">
                <img class="responsive-img" src="img/home/novedades/olla-ch.jpg" />
            </div>
            <div class="overlay">
              <div align="right" class="circle">
                <a href="#" class="" data-lightbox="portfolio"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                      <h5>Juego de collar con aretes</h5><br>
                  </div>
                  <div class="folio-overview">
                      <span class="folio-link"><a class="folio-read-more boton" href="#"
                        data-single_url="portfolio/portfolio-alianzas.html">Añadir al Carrito</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- img chica -->
      <div class="folio-item">
          <div class="grid-item grid-item--height3">
            <div class="folio-image">
                <img class="responsive-img" src="img/home/novedades/plato-ch.jpg" />
            </div>
            <div class="overlay">
              <div align="right" class="circle">
                <a href="#" class="" data-lightbox="portfolio"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                      <h5>Juego de collar con aretes</h5><br>
                  </div>
                  <div class="folio-overview">
                      <span class="folio-link"><a class="folio-read-more boton" href="#"
                        data-single_url="portfolio/portfolio-alianzas.html">Añadir al Carrito</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- img grande -->
      <div class="folio-item">
          <div class="grid-item">
            <div class="folio-image">
                <img class="responsive-img" src="img/home/novedades/collar-grd.jpg" />
            </div>
            <div class="overlay">
              <div align="right" class="circle">
                <a href="#" class="" data-lightbox="portfolio"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                      <h5>Juego de collar con aretes</h5><br>
                  </div>
                  <div class="folio-overview">
                      <span class="folio-link"><a class="folio-read-more boton" href="#"
                        data-single_url="portfolio/portfolio-alianzas.html">Añadir al Carrito</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- img mediana -->
      <div class="folio-item">
          <div class="grid-item grid-item--height2">
            <div class="folio-image">
                <img class="responsive-img" src="img/home/novedades/aretes-med.jpg" />
            </div>
            <div class="overlay">
              <div align="right" class="circle">
                <a href="#" class="" data-lightbox="portfolio"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                      <h5>Juego de collar con aretes</h5><br>
                  </div>
                  <div class="folio-overview">
                      <span class="folio-link"><a class="folio-read-more boton" href="#"
                        data-single_url="portfolio/portfolio-alianzas.html">Añadir al Carrito</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- img chica -->
      <div class="folio-item">
          <div class="grid-item grid-item--height3">
            <div class="folio-image">
                <img class="responsive-img" src="img/home/novedades/posija-ch.jpg" />
            </div>
            <div class="overlay">
              <div align="right" class="circle">
                <a href="#" class="" data-lightbox="portfolio"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                      <h5>Juego de collar con aretes</h5><br>
                  </div>
                  <div class="folio-overview">
                      <span class="folio-link"><a class="folio-read-more boton" href="#"
                        data-single_url="portfolio/portfolio-alianzas.html">Añadir al Carrito</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
<!--       <div class="grid-item grid-item--height3">
        <img class="responsive-img" src="img/home/grid/328_220.jpg" />
      </div> -->
      <!-- img chica -->
      <div class="folio-item">
          <div class="grid-item grid-item--height3">
            <div class="folio-image">
                <img class="responsive-img" src="img/home/novedades/floreado-ch.jpg" />
            </div>
            <div class="overlay">
              <div align="right" class="circle">
                <a href="#" class="" data-lightbox="portfolio"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                      <h5>Juego de collar con aretes</h5><br>
                  </div>
                  <div class="folio-overview">
                      <span class="folio-link"><a class="folio-read-more boton" href="#"
                        data-single_url="portfolio/portfolio-alianzas.html">Añadir al Carrito</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
<!--       <div class="grid-item grid-item--height3">
        <img class="responsive-img" src="img/home/grid/328_220.jpg" />
      </div> -->

    </div>

  </div>
</div>
<!---     FIN Novedades      -->
<br><br>
<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h2 class="white-text titulo-crea">Quiero ser Mayorista</h2>
            </div>
            <div class="row center">
                <a class="btn-start">UNETE</a>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="img/home/parallax/mayorista3-com.jpg" alt="Unsplashed background img 2"></div>
</div>
<div class="" >
    <div class="section light-blue lighten-2">

        <!--   Icon Section   -->
        <div align="center">
            <h5 class="selected-white titulo-guion"><a >VALORES</a></h5>  
        </div><br><br><br>
        <div class="row">
            <div class="col s12 m6">             
                <div class="row" id="">
                    <div class="col m6 s4 right-align white-text">
                       <i class="fa fa-check-square-o fa-5x" id="calidad" ></i>
                   </div>
                   <div class="left-align col m6 s8">
                       <br>
                       <h5 id="calidadh5" class="titulo-guion">CALIDAD</h5>
                   </div>
               </div>
               <div class="row">
                  <div class="col m3"><p></p></div>
                  <div class="col m9">
                    <p id="calidadp" class="texto-light flow-text">
                      CUIDAMOS LOS DETALLES:<br><br>
                      En cada una de las piezas que elaboramos cuidamos los detalles para entregar piezas únicas e irrepetibles. 
                    </p>
                  </div>
               </div>
            </div>

            <div class="col s12 m6">             
                <div class="row">
                    <div class="col m4 s4 right-align white-text">
                        <i class="fa fa-heart-o  fa-5x" id="pasion" ></i>
                   </div>
                   <div class="left-align col m8 s8">
                       <br>
                       <h5 id="pasionh5" class="titulo-guion">PASION</h5>
                       
                   </div>
               </div>
               <div class="row">
                  <div class="col m3"><p></p></div>
                  <div class="col m9">
                    <p id="pasionp" class="texto-light flow-text">
                        AMAMOS LO QUE HACEMOS: <br><br>
                        A través de nuestras manos entregamos el corazón en cada pieza que elaboramos.
                      </p>
                  </div>
               </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col s12 m6">             
                <div class="row">
                    <div class="col m6 s4 right-align white-text">
                       <i class="fa fa-handshake-o fa-5x" id="honradez"></i>
                   </div>
                   <div class="left-align col m6 s8">
                       <br>
                       <h5 id="honradezh5" class="titulo-guion">HONRADEZ</h5>
                       
                   </div>
               </div>
               <div class="row">
                  <div class="col m3"><p></p></div>
                  <div class="col m9">
                    <p id="honradezp" class="texto-light flow-text">
                        SIEMPRE TRANSPARENTES: <br><br>
                        Nos interesa tu confianza, seremos siempre honestos contigo. 
                       </p>
                  </div>
               </div>
            </div>

            <div class="col s12 m6">             
                <div class="row">
                    <div class="col m4 s4 right-align white-text">
                      <i class="fa fa-lightbulb-o fa-5x" id="creatividad"></i>
                   </div>
                   <div class="left-align col m8 s8">
                       <br>
                       <h5 id="creatividadh5" class="titulo-guion">CREATIVIDAD</h5>
                       
                   </div>
               </div>
               <div class="row">
                  <div class="col m3"><p></p></div>
                  <div class="col m9">
                   <p id="creatividadp" class="texto-light flow-text">
                        REINVENTAMOS: <br><br>
                        Incorporamos en nuestras piezas las tendencias del diseño. 
                       </p>
                  </div>
               </div>
            </div>
        </div>
        <br>
    </div>
</div>

<!--   Comentarios   -->
<div class="container">
    <div class="section white">

        <!--   Icon Section   -->
        <div align="center">
            <h5 class="selected titulo-guion" ><a>OPINIONES</a></h5><br><br><br> 
        </div>
        <div class="" align="center">
          <div class="row "  align="center">
            <div class="col s12 m2">
              <img src="img/home/comentarios/mujer.jpeg" alt="" class="circle-border responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s12 m10">
              <div align="left">
                <img src="img/icono/“comilla izq@2x.png" width="50px" alt="">  
              </div>
              <div>
                <span class="black-text texto-Regular flow-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </span>
              </div> 
              <div align="right">
                <img src="img/icono/“ comilla der@2x.png" width="50px" alt="">
              </div>   
            </div>
          </div>
        </div> 
    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h2 class="white-text titulo-crea">Crea tu propio diseño</h2>
            </div>
            <div class="row center">
                <a class="btn-start">PERSONALIZA</a>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="img/home/parallax/Santa-clara-del-cobre@2x-com.png" alt="Unsplashed background img 2"></div>
</div>

<div>
  <div align="center">
    <h5 class="selected titulo-guion"><a>CONTACTO</a></h5><br><br><br> 
  </div>
  <div>
      <div class="row">
         <div class="col s12 m6">
           <form action="" method="get" accept-charset="utf-8">
             <div class="row">
              <div class="input-field col s12">
                <input id="last_name" type="text" class="validate">
                <label for="last_name" class="Haettenschweiler">NOMBRE *</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="last_name" type="text" class="validate">
                <label for="last_name" class="Haettenschweiler">CORREO *</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="last_name" type="text" class="validate">
                <label for="last_name" class="Haettenschweiler">TELEFONO</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="last_name" type="text" class="validate">
                <label for="last_name" class="Haettenschweiler">ASUNTO *</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1" class="Haettenschweiler">MENSAJE *</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <a class="waves-effect  light-blue lighten-3 btn" >ENVIAR</a>
              </div>
            </div>
           </form>
         </div>
         <div class="col s12 m6">
           <img src="img/home/contacto/contactoimage@2x-com.png" class="responsive-img" alt="">
         </div>
      </div>
  </div>
</div>
<div class="row">
    <div class="col s12">
        <div id="google-map" data-latitude="19.7181" data-longitude="-101.1564"></div>
         <script>
     
    </script>
    </div>
</div>
<footer class="page-footer grey lighten-4">
    <div class="container">
        <div class="row">
            <div class="col l3 s12">
              <div class="row">
                <div class="col m6 s12">
                  <img src="img/home/contacto/logoFooter.png" alt="">
                </div>
                <div class="col m6 s12">
                  <h6 class="teal-text lighten-2-text Haettenschweiler">AYUDA</h6>
                  <ul>
                      <li><a class="grey-text darken-4-text foot-light" href="#!">Términos de uso</a></li>
                      <li><a class="grey-text darken-4-text foot-light" href="#!">Preguntas frecuentes</a></li>
                      <li><a class="grey-text darken-4-text foot-light" href="#!">¿QUIERES SER PROMOTOR?</a></li>
                      
                  </ul>
                </div>
              </div>
            </div>
            <div class="col l3 s12">
                <h6 class="teal-text lighten-2-text Haettenschweiler">CONTACTO</h6>
                <ul class="address">
                    <li><a class="black-text foot-SemiBold" >Domicilio: </a><a class="grey-text darken-4-text foot-light">Centro #268</a></li>
                    <li><a class="black-text foot-SemiBold" >Telefono: </a><a class="grey-text darken-4-text foot-light">4433231867</a></li>
                    <li><a class="black-text foot-SemiBold" >Correo: </a><a class="grey-text darken-4-text foot-light">ventas@bornitac.com</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h6 class="teal-text lighten-2-text Haettenschweiler">QUIENES SOMOS</h6>
                <ul>
                    <li><a class="grey-text darken-4-text foot-light" href="#!">En Bornita conectamos artesanos mexicanos con mercados de alto valor para beneficiar su economía y fomentar el comercio justo. Apoyamos a la preservación de las actividades artesanales de las comunidades con diseños innovadores que conservan la esencia de las técnicas tradicionales. </a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <ul>
                    <li>
                      <a href="https://www.facebook.com/Bornita.mx/" target="_blank"><img src="img/icono/Bfacebook@2x.png" width="35px" alt="Facebook bornita"></a>&nbsp; &nbsp;
                      <a href=""><img src="img/icono/Btwitter@2x.png" width="35px" alt="Twitter bornita"></a>&nbsp; &nbsp;
                      <a href="https://www.instagram.com/bornitamx" target="_blank"><img src="img/icono/Binstagram@2x.png" width="35px" alt="Instagram bornita"></a>  
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container" align="center">
            <a class="brown-text text-lighten-3" >&copy; Copyright 2017. Todos los derechos reservados</a>
        </div>
    </div>
</footer>


<!--  Scripts-->
 

<!-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
<script src="materialize/js/jquery-1.11.3.js"></script>
<script src="materialize/js/jquery-2.1.4.js"></script>
<script src="materialize/js/materialize.js"></script>
<script src="materialize/js/init.js"></script>
<script src="materialize/js/main.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5Sjy68hWY2bsARn-jOE_uhGeYy7OYnxo&callback=initMap"
  type="text/javascript"></script>
<script src="materialize/js/masonry.pkgd.js"></script>

<script type="text/javascript">

  
</script>
<!-- <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.inview.min.js"></script> -->
<!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> -->

</body>
</html>
