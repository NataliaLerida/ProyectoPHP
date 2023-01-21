<?php

try{
    if( !file_exists('instalaciones.csv')){
        throw new Exception('ERROR: Datos de propiedades no encontrados!');
    }
    if (($gestor = fopen('instalaciones.csv','rb')) == FALSE){
        throw new Exception('Error al recibir los datos');
    }

}
catch (Exception $e){
    echo 'ERROR: ', $e->getCode(),' - ',$e->getMessage(),'<br />';
}

?>

<?php
    $titulos = ["titulo","imagen","texto"];
    while($datos = fgetcsv($gestor)):
    $propiedad = array_combine($titulos, $datos);
    /*echo '<pre>';
    var_dump($datos);
    echo '</pre>';
    echo '<pre>';
    var_dump($propiedad);
    echo '</pre>';*/
?> 
        
<div class="servicio-ind">
    <img src="<?= WEBROOT ?>assets/imagenes/<?php echo $propiedad['imagen']; ?>" alt="anuncio">
        <h3><?= $propiedad['titulo']?></h3>
        <p><?= $propiedad['texto']?></p>
        
    </div><!--anuncio-->
        <?php endwhile; ?>
</div>