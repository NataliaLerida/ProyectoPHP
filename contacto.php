<?php
$titulo = 'Contacto';
require_once('./template/cabecera.php');
?>
<body>

<?php
$mensaje = '';

if (isset($_POST['OK'])) {

$nombre =$_POST['nombre'];
$mensaje='';
if ($nombre == '')
{ $mensaje .= "El nombre es obligatorio.\n"; }
if (strlen($nombre) < 10)
{ $mensaje .= "El nombre debe tener al menos 10 caracteres.\n"; }


$apellidos =($_POST['apellidos']);
if ($apellidos == '')
{ $mensaje .= "El apellido es obligatorio.\n"; }
if (strlen($apellidos) < 10)
{ $mensaje .= "El apellido debe tener al menos 10 caracteres.\n"; }


$email =($_POST['email']);
if ($email == '')
{ $mensaje .= "El email es obligatorio.\n"; }


$descripción =($_POST['descripción']);
if ($descripción == '')
{$mensaje .= "Escriba que quiere saber y nos pondremos en contacto con usted.\n"; }
if ($mensaje == '') {
exit;}
}
?>

<?php require_once('./template/menu.php.');?> 
   
<section>
    <h2 class="titulo">¡Contacta con nosotros!</h2>
        <fieldset style="border-radius: 10px;">
        <fieldset style="border-radius: 10px;">
                        

<section>

<form action="contacto.php" method="post"  novalidate>

<label for="nombre">Nombre</label><br>
<input name= "nombre" type="text" required pattern="[a-z A-Z]{3,}"><br><br>

<label for="apellidos">Apellidos</label> <br>
<input name= "apellidos" type="text" id="apellido"required pattern="[a-z A-Z]{3,}"> <br><br>

<label for="descripción">Sugerencias</label><br>
<textarea name="descripción" id="descripción" cols="60" rows="10" maxlength="20"20></textarea><br>

<label for="email">Correo electrónico</label><br>
<input name= "email" type="text"> <br><br>

<br><br>

<div id="botones">

<input type="checkbox" id="politica de privacidad" name="politica de privacidad" value="politica de privacidad">
<label for="politica de privacidad">Política de privacidad</label>

<br><br>

<input type="submit" value="Enviar" name="OK" Enviar>

</div>
<?php echo $mensaje; ?>
</form>

<?php require_once('./template/footer.php'); ?>

</main>
</body>
</html>
