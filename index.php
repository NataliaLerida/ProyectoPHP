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
            
        <section class="equipo-contendor">
            <h2 class="titulo">NUESTRO EQUIPO</h2>
            <div class="cards">
                <div class="card">
                    <img src="./imagenes/maestra1.png" alt="">
                    <div class="contenido-texto-card">
                        <h4>María</h4>
                        <p>¡Hola! Soy María y soy la seño de esta escuela.Tengo muchas ganas de jugar y aprender con todos vosotros.</p>
                    </div>

                </div>
                <div class="card">
                    <img src="./imagenes/maestra2.png" alt="">
        
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

        <section>
            <h2 class="titulo">¡Contacta con nosotros!</h2>
                
                <form name="formulario_prueba" novalidate>
                    <fieldset style="border-radius: 10px;">
                        <fieldset style="border-radius: 10px;">
                        <legend><b>Datos básicos</b></legend>
    
                        
                        
                    
                            <label for="fname">Nombre</label><br>
                            <input required type="text" id="nombre" placeholder="Su nombre de usuario" min="4" pattern="[a-zA-Z]{4,30}" name="nombre"><br>
                            
                            <label for="fname">Apellidos</label><br>
                            <input type="text" id="apellido" placeholder="Sus apellidos de usuario" min="4" pattern="[a-zA-Z]{4,30}" name="apellido"><br>
    
                            <label for="comentario">Descripción</label><br>
                            <textarea name="comentario" placeholder="comentario" maxlength="400" rows="10" cols="40"></textarea><br>
    
                            
                            
                            <label for="correo">Correo electrónico</label>
                            <input type="email" id="email" name="email" /> 
    
                            <label for="telefono">Teléfono</label>
                            <input type="text" id="telefono" placeholder="telefono" pattern="[0-9]{9}" name="telefono"><br>
                            
                            
                            <input type="button" onclick="comprobar()" value="Enviar formulario"><br>
    
    
                    
                        </fieldset>
                    
                    </form>
            </section>
    
            
</main>

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