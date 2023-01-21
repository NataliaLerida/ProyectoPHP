<?php
$titulo = 'Quiénes somos';
require_once('./template/cabecera.php');
?>
<body>
<?php require_once('./template/menu.php.'); ?> 

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
      
<script src="./assets/js/acordeon.js"></script>

<?php require_once('./template/footer.php');?>
</main>
</body>
</html>