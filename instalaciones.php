<?php
require_once('./includes/app.php');
$titulo = 'Instalaciones';
require_once('./template/cabecera.php');
?>
<body>
<?php require_once('./template/menu.php.');?> 

    <section class="about-services">
        <div class="contenedor">
            <h2 class="titulo">INSTALACIONES</h2>
        <div class="servicio-cont">
        <?php require_once('./inst.php');?>
        </div>   
        </div>
    </section>

<?php require_once('./template/footer.php');?>
    </body>
    </html>