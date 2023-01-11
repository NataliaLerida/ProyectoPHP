<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Proyecto Final</title>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
    <header>
        <nav>
            <a href="./quienessomos.php">QUIÉNES SOMOS</a>
            <a href="./equipo.php">EQUIPO</a>
            <a href="./servicios.php">SERVICIOS</a>
            <a href="./instalaciones.php">INSTALACIONES</a>
            <a href="./contacto.php">CONTACTO</a>
        </nav>

        <section class="textos-header">
            <h1>ESCUELA INFANTIL "MENGÍBAR"</h1>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill:white ;"></path></svg></div>
        
        <div>
            <div id="iconos">
                <a href="https://www.facebook.com/"><img src="./imagenes/facebook.png" alt=""></a>
                <a href="https://twitter.com/?lang=es"><img src="./imagenes/twitter.png" alt=""></a>

        </div>

    </header> 

    <div class="slideshow-container">
            
        <h2 class="titulo">NUESTROS SERVICIOS</h2>
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="./imagenes/comedor-escolar.png" style="width:100%">
          <div class="text">Comedor escolar</div>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="./imagenes/aulamatinal1.png" style="width:100%">
          <div class="text">Aula matinal</div>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="./imagenes/temprana.webp" style="width:100%">
          <div class="text">Cuidado de bebés</div>
        </div>
      
      
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      
     
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    
      <script src="./acordeon.js"></script>


      <footer>    
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Teléfono</h4>
                <p>953372415</p>
            </div>
        </div>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Email</h4>
                <p>escuelainfaltil@mengibar.es</p>
            </div>
        </div>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Localización</h4>
                <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=mengibar&amp;t=p&amp;z=11&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://piratebay-proxys.com/">Piratebay</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Natalia Lérida </h2>
    </footer>
</body>
</html>

