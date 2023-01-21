<?php
require_once('./includes/app.php');
$titulo = 'inicio';
require_once('./template/cabecera.php');
?>
<body>
<?php require_once('./template/menu.php.');?> 

<main>
<section class="contenedor sobre-nosotros">
    <h2 class="titulo">QUIÉNES SOMOS</h2>
        <button class="acordeon"> Nuestro objetivo</button>
                
<div class="contenidotextos">
        <p> Nuestro objetivo principal es estimular el desarrollo de las        capacidades intelectuales, motrices, sociales y emocionales de los niños y niñas. Potenciar la creatividad, el interés y la curiosidad por descubrir y garantizar  y cubrir sus necesidades fisiológicas.</p>  
</div>
<button class="acordeon"> Nuestra misión</button>
    
<div class="contenidotextos">
                    
    <p>Ofrecer un servicio educativo de calidad que promueva una educación activa, abierta e integral del niño/a, formándole en valores morales, éticos y culturales que le ayuden a desarrollar todo su potencial personal y talento, involucrando y trabajando conjuntamente en este proceso con las familias.</p>  
</div>
<button class="acordeon"> Nuestros valores</button>
                
<div class="contenidotextos">
    <ul>
        <li>Amor: respeto, comprensión, acompañamiento y especial atención  a los más desfavorecidos.</li>
        <li> Alegría: entusiasmo y sentido de fiesta.</li>
        <li>Sencillez y humildad: cercanía y cordialidad en el trato.</li>
        <li>Paciencia: saber esperar cada proceso y saber escuchar.</li>
        <li>Búsqueda de la Verdad: coherencia, objetividad y sentido crítico.</li>
    </ul>       
</div>
</section>

<div class="slideshow-container">
    <h2 class="titulo">NUESTROS SERVICIOS</h2>
        <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="./assets/imagenes/comedorescolar.png" style="width:100%">
        <div class="text">Comedor escolar</div>
</div>
              
<div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="./assets/imagenes/aulamatinal1.png" style="width:100%">
        <div class="text">Aula matinal</div>
</div>
              
<div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="./assets/imagenes/temprana.webp" style="width:100%">
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
            
<section class="equipo-contendor">
    <h2 class="titulo">NUESTRO EQUIPO</h2>
        <div class="cards">
        <div class="card">
        <img src="./assets/imagenes/maestra1.png" alt="">
        <div class="contenido-texto-card">
            <h4>María</h4>
            <p>¡Hola! Soy María y soy la seño de esta escuela.Tengo muchas ganas de jugar y aprender con todos vosotros.</p>
        </div>
        </div>

        <div class="card">
        <img src="./assets/imagenes/maestra2.png" alt="">
        
        <div class="contenido-texto-card">
            <h4>Lucía</h4>
            <p>¡Hola! Soy Lucía y soy la seño de esta escuela.Tengo muchas ganas de jugar y aprender con todos vosotros.</p>
        </div>
    </div>
    </div>
</section>

<section class="about-services">
    <div class="contenedor">
        <h2 class="titulo">INSTALACIONES</h2>
    <div class="servicio-cont">
            <?php require_once('./inst.php');?>
        </div>
    </div>
</section>
        <?php require_once('./contacto.php');?>
</main>

<script src="./assets/js/acordeon.js"></script>

<?php require_once('./template/footer.php');?>
</body>
</html>