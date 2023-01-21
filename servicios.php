<?php
$titulo = 'Servicios';
require_once('./template/cabecera.php');
?>
<body>
<?php require_once('./template/menu.php.');?> 

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
    
<script src="./assets/js/acordeon.js"></script>

<?php require_once('./template/footer.php');?>
</body>
</html>

