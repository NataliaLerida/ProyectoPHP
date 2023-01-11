<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
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

<script src="./acordeon.js"></script>

<footer>
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
</main>

            

</body>
</html>