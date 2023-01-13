<?php
require_once('cabecera.php');
?>
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

    <main>

        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">QUIÉNES SOMOS</h2>
                <button class="acordeon"> Nuestro objetivo</button>
                <div class="contenidotextos">
                    
                    <p> Nuestro objetivo principal es estimular el desarrollo de las        capacidades intelectuales, motrices, sociales y emocionales de los niños y niñas. Potenciar la creatividad, el interés y la curiosidad por descubrir y garantizar  y cubrir sus necesidades fisiológicas.
                        </p>  
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
      

    <script src="acordeon.js"></script>
<?php
require_once('footer.php');
?>
</main>
</body>
</html>