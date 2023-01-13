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

        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">INSTALACIONES</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="./imagenes/instalaciones1.jpg" alt="">
                        <h3>Sala de relajación</h3>
                        <p>Durante el desarrollo de la clase, adaptaremos ejercicios de relajacion para todos y cada uno de nuestros alumnos. Todos las actividades a desarrollar estarán adaptados a las posibilidades de cada niño y niña.</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="./imagenes/instalaciones2.jpg" alt="">
                        <h3>Patio interior infantil</h3>
                        <p>Patio interior, donde los más pequeños se encuentrarán con espacios al aire libre para desarrollar una actividad no dirigida, que posibilite la relación con los demás y con diferentes materiales</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="./imagenes/instalaciones3.jpg" alt="">
                        <h3>Patio exterior infantil</h3>
                        <p>En este entorno, es donde el niño tiene que sentirse cómodo. En los tres primeros años de vida se desarrolla gran parte de la personalidad, debe haber un contacto permanente con la naturaleza.</p>
                    </div>
                </div>
            </div>
        </section>

<?php
require_once('footer.php');
?>
    </body>
    </html>