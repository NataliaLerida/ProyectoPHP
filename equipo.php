<?php
$titulo = 'Equipo';
require_once('./template/cabecera.php');
?>
<body>
    
<?php
require_once('./template/menu.php.');
?>      
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

<?php
require_once('./template/footer.php');
?>
    </body>
    </html>