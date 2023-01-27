<?php
  require_once "plantillas\header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
	  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilosforo/swiper-bundle.min.css">
    <link rel="stylesheet" href="./estilosforo/styleforo.css">
    <link rel="icon" href="multimedia\iconos\viajar.png">
    <title>Foro viajero</title>
</head>

<body>  
    <!--------- swiiper ----------->
    <div class="swiper mySwiper">

       <center><h1 id="titulo1"> EXPLORA MULTITUDINARIOS DESTINOS</h1></center>
      <div class="swiper-wrapper" style="height: auto">
        <div class="swiper-slide">
          <img id="img" src="multimedia\imagenes\italy-g6297384cf_1920.jpg" />
        </div>
        <div class="swiper-slide">
          <img id="img" src="multimedia\imagenes\eiffel.jpg" />
        </div>
        <div class="swiper-slide">
          <img id="img" src="multimedia\imagenes\isla-de-pascua.jpg" />
        </div>
        <div class="swiper-slide">
          <img id="img" src="multimedia\imagenes\colombia- cartagena.jpg" />
        </div>
        <div class="swiper-slide">
          <img id =" img" src="multimedia\imagenes\london.jpg" />
        </div>
        <div class="swiper-slide">
          <img id="img"src="multimedia\imagenes\Alpes.jpg" />
        </div>
        <div class="swiper-slide">
          <img id="img" src="multimedia\imagenes\Grecia.jpg" />
        </div>
        <div class="swiper-slide">
          <img id="img" src="multimedia\imagenes\Pan de azucar.jpg" />
        </div>
        <div class="swiper-slide">
          <img id="img"  src="multimedia\imagenes\niagara.jpg" />
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
<!------- Paneles------->

    <div class="contenedor">
		<div class="contenedor-conciertos">
			<div class="card">
        <img src="multimedia\imagenes\las-personas-conectadas.jpg" alt="imagengrecia" id="img2">
				<div class="textos">
					<h3>Foro virtual</h3>
					<p>interactua con otros viajeros !</p>
				</div>
			</div>
			<div class="card">
        <img src="multimedia\imagenes\lugares_para_conocer.jpg" alt="imagengrecia" id="img2">
				<div class="textos">
					<h3>top 10 lugares para conocer</h3>
					<p>los mejores lugares para hacer turismo!</p>
				</div>
			</div>
			<div class="card" >  
        <img src="multimedia\imagenes\hombre-turista.jpg" alt="imagengrecia" id="img2">
				<div class="textos">
					<h3>lugares para conocer en colombia</h3>
					<p>13 de Diciembre 2021</p>
				</div>
			</div>

			<div class="card" style="background-image: url('./img/4.jpg')">
        <img src="multimedia\imagenes\london.jpg" alt="imagengrecia" id="img2">
				<div class="textos">
					<h3>comparte tus experiencias con videos y fotografias</h3>
					<p>20 de Diciembre 202</p>
				</div>
			</div>
			
		</div>
		

    <!--  contacto  -->
		<div class="banner" style="background-image: url('./img/banner.jpg')">
			<h3>Informacion</h3>
			<ul>
				<li> <a href="">acerca de nosotros</a> </li>
				<li>telefono: 42353546</li>
				<li>correo : danielortizdavid@gmail.com</li>
				<li>ayuda</li>
				
			</ul>
			<button class="boton">comunicate con nosotros</button>
		</div>
	</div>


  
    <script src="./scrips/swiper-bundle.min.js"></script>
    <script src="./scrips/foro.js"></script>
</body>
</html>