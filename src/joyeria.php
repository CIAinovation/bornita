<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Parallax Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../materialize/css/main.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="../materialize/css/font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>

<!--          Menu         -->
<nav class="nav-extended white top-menu" id="top-menu">
    <div class="nav-wrapper " >
      <a href="index.php" class="brand-logo"><img src="../img/home/contacto/logoMenu.png" class="logo-menu" alt="Logo Bornita"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class=""><a class="" href="../index.php">Inicia</a></li>
        <li class=""><a class="" href="../index.php">Nosotros</a></li>
        <li class="selected" ><a class="" href="joyeria.php">Joyeria</a></li>
        <li><a class="" href="muebles.php">Muebles</a></li>
        <li><a class="" href="#">Hogar</a></li>
        <li><a class="" href="collapsible.html">Contáctanos</a></li>
        <li><a href="mobile.html"><i class="material-icons">shopping_cart</i></a></li>
        <li><a class="waves-effect waves-light btn">Login</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a class="" href="../index.php"><b>Nosotros</b></a></li>
        <li><a class="" href="collapsible.html">Novedades</a></li>
        <li><a class="" href="joyeria.php">Joyeria</a></li>
        <li><a class="" href="jewelry.php">Muebles</a></li>
        <li><a class="" href="collapsible.html">Contáctanos</a></li>
        <li><a class="" href="collapsible.html">Carrito</a></li>
        <li><a class="" href="collapsible.html">Login</a></li>
      </ul>
    </div>
  </nav>

<!---     Novedades      -->
<div class="" id="portfolio">
  <div class="container-fluid">
    <div align="center">
      <h5 class="selected titulo-guion"><a>Joyeria</a></h5>    
    </div>
    <div class="grid">
      <?php 
        $dir = '../img/joyas';
        $fich = scandir($dir);

        $lenght = count($fich);

        for($i = 0; $i < $lenght ; $i++){
       ?>
      <div class="folio-item">
          <div class="grid-item grid-item--height3">
            <div class="folio-image">
                <img class="responsive-img" src=" ../img/joyas/<?= $fich[$i] ?>" />
            </div>
            <div class="overlay">
              <div align="right" class="circle">
                <a href="#" class="" data-lightbox="portfolio"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                      <h5>Sala café</h5><br>
                  </div>
                  <div class="folio-overview">
                      <span class="folio-link"><a class="folio-read-more boton" href="joyeria-detalle.php"
                        data-single_url="portfolio/portfolio-alianzas.html">Comprar</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <?php } ?>
      <!--<div class="folio-item">
          <div class="grid-item grid-item--height3">
            <div class="folio-image">
                <img class="responsive-img" src="../img/home/grid/2.jpg" />
            </div>
            <div class="overlay">
              <div align="right" class="circle">
                <a href="#" class="" data-lightbox="portfolio"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                      <h5>Sala azul</h5><br>
                  </div>
                  <div class="folio-overview">
                      <span class="folio-link"><a class="folio-read-more boton" href="joyeria-detalle.php"
                        data-single_url="portfolio/portfolio-alianzas.html">Comprar</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="folio-item">
          <div class="grid-item grid-item--height3">
            <div class="folio-image">
                <img class="responsive-img" src="../img/home/grid/3.jpg" />
            </div>
            <div class="overlay">
              <div align="right" class="circle">
                <a href="#" class="" data-lightbox="portfolio"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                      <h5>Bisuteria</h5><br>
                  </div>
                  <div class="folio-overview">
                      <span class="folio-link"><a class="folio-read-more boton" href="joyeria-detalle.php"
                        data-single_url="portfolio/portfolio-alianzas.html">Comprar</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="folio-item">
          <div class="grid-item grid-item--height3">
            <div class="folio-image">
                <img class="responsive-img" src="../img/home/grid/1.jpg" />
            </div>
            <div class="overlay">
              <div align="right" class="circle">
                <a href="#" class="" data-lightbox="portfolio"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                      <h5>Sala café</h5><br>
                  </div>
                  <div class="folio-overview">
                      <span class="folio-link"><a class="folio-read-more boton" href="joyeria-detalle.php"
                        data-single_url="portfolio/portfolio-alianzas.html">Comprar</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="folio-item">
          <div class="grid-item grid-item--height3">
            <div class="folio-image">
                <img class="responsive-img" src="../img/home/grid/2.jpg" />
            </div>
            <div class="overlay">
              <div align="right" class="circle">
                <a href="#" class="" data-lightbox="portfolio"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                      <h5>Sala azul</h5><br>
                  </div>
                  <div class="folio-overview">
                      <span class="folio-link"><a class="folio-read-more boton" href="joyeria-detalle.php"
                        data-single_url="portfolio/portfolio-alianzas.html">Comprar</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="folio-item">
          <div class="grid-item grid-item--height3">
            <div class="folio-image">
                <img class="responsive-img" src="../img/home/grid/3.jpg" />
            </div>
            <div class="overlay">
              <div align="right" class="circle">
                <a href="#" class="" data-lightbox="portfolio"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                      <h5>Bisuteria</h5><br>
                  </div>
                  <div class="folio-overview">
                      <span class="folio-link"><a class="folio-read-more boton" href="joyeria-detalle.php"
                        data-single_url="portfolio/portfolio-alianzas.html">Comprar</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="folio-item">
          <div class="grid-item grid-item--height3">
            <div class="folio-image">
                <img class="responsive-img" src="../img/home/grid/1.jpg" />
            </div>
            <div class="overlay">
              <div align="right" class="circle">
                <a href="#" class="" data-lightbox="portfolio"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                      <h5>Sala café</h5><br>
                  </div>
                  <div class="folio-overview">
                      <span class="folio-link"><a class="folio-read-more boton" href="joyeria-detalle.php"
                        data-single_url="portfolio/portfolio-alianzas.html">Comprar</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="folio-item">
          <div class="grid-item grid-item--height3">
            <div class="folio-image">
                <img class="responsive-img" src="../img/home/grid/2.jpg" />
            </div>
            <div class="overlay">
              <div align="right" class="circle">
                <a href="#" class="" data-lightbox="portfolio"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                      <h5>Sala azul</h5><br>
                  </div>
                  <div class="folio-overview">
                      <span class="folio-link"><a class="folio-read-more boton" href="joyeria-detalle.php"
                        data-single_url="portfolio/portfolio-alianzas.html">Comprar</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="folio-item">
          <div class="grid-item grid-item--height3">
            <div class="folio-image">
                <img class="responsive-img" src="../img/home/grid/3.jpg" />
            </div>
            <div class="overlay">
              <div align="right" class="circle">
                <a href="#" class="" data-lightbox="portfolio"><i class="fa fa-heart-o"></i></a>
              </div>
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                      <h5>Bisuteria</h5><br>
                  </div>
                  <div class="folio-overview">
                      <span class="folio-link"><a class="folio-read-more boton" href="joyeria-detalle.php"
                        data-single_url="portfolio/portfolio-alianzas.html">Comprar</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>-->

    </div>

  </div>
</div>
<footer class="page-footer grey lighten-4">
    <div class="container">
        <div class="row">
            <div class="col l3 s12">
                <h6 class="teal-text lighten-2-text">AYUDA</h6>
                <ul>
                    <li><a class="grey-text darken-4-text" href="#!">Terminos de uso</a></li>
                    <li><a class="grey-text darken-4-text" href="#!">Preguntas frecuentes</a></li>
                    <li><a class="grey-text darken-4-text" href="#!">¿QUIERES SER PROMOTOR?</a></li>
                    
                </ul>
            </div>
            <div class="col l3 s12">
                <h6 class="teal-text lighten-2-text">CONTACTO</h6>
                <ul>
                    <li><a class="black-text" >Domicilio: </a><a class="grey-text darken-4-text">Centro #268</a></li>
                    <li><a class="black-text" >Telefono: </a><a class="grey-text darken-4-text">4433231867</a></li>
                    <li><a class="black-text" >Correo: </a><a class="grey-text darken-4-text">ventas@bornitac.com</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h6 class="teal-text lighten-2-text">QUIENES SOMOS</h6>
                <ul>
                    <li><a class="grey-text darken-4-text" href="#!">Somos</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <ul>
                    <li><img src="../img/icono/Bfacebook@2x.png" width="35px" alt="">&nbsp; &nbsp;<img src="../img/icono/Btwitter@2x.png" width="35px" alt="">&nbsp; &nbsp;<img src="../img/icono/Binstagram@2x.png" width="35px" alt=""></li>
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
 

<script src="../materialize/js/jquery-1.11.3.js"></script>
<script src="../materialize/js/jquery-2.1.4.js"></script>
<script src="../materialize/js/materialize.js"></script>
<script src="../materialize/js/init.js"></script>
<script src="../materialize/js/main.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5Sjy68hWY2bsARn-jOE_uhGeYy7OYnxo&callback=initMap"
  type="text/javascript"></script>
<script src="../materialize/js/masonry.pkgd.js"></script>

<script type="text/javascript">

  
</script>
<!-- <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.inview.min.js"></script> -->
<!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> -->

</body>
</html>