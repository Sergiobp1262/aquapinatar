<?php include("template/cabecera.php"); ?>


<?php 
	if (isset($_GET['nombre_producto'])) {
		$nombre_producto = $_GET['nombre_producto'];
	} else{
		$nombre_producto = "";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validación de Formulario </title>
	<link rel="stylesheet" href="">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/formulario.css">
</head>
<body>
<header>    
    <section class="textos-header">
    <h1>Contacto</h1>
        <h2>Nuestro personal especializado se encargará de seleccionar por usted el tipo de filtración y purificación del agua más adecuado en cada caso concreto, para prestarle un servicio a medida.</h2>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;">
		<svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
   		</svg>
	</div>
</header>
	<div class="contenedor">
		<p>Si está Ud. interesado en recibir información acerca de nuestros productos y servicios, cumplimente por favor el siguiente formulario.
		   Aqua Pinatar se pondrá en contacto con usted para analizar sus necesidades de inmediato.<p>
		   <img src="imagenes/correo.png" alt="" class="centrar">	   
	</div>
	<main>
		<form action="correo.php" class="formulario" id="formulario" method="POST">
			<!-- Grupo: Usuario -->
			<div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Nombre</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="Escriba su Nombre">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

	
			<!-- Grupo: Correo Electronico -->
			<div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label">Correo Electrónico</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@correo.com">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
			</div>

			<!-- Grupo: Teléfono -->
			<div class="formulario__grupo" id="grupo__telefono">
				<label for="telefono" class="formulario__label">Teléfono</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="4491234567">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>

			<!-- Grupo: Mensaje -->
			<div class="elem-group" id="grupo__mensaje">
				<label for="mensaje" class="formulario__label">Observaciones</label>
				<textarea id="mensaje" name="mensaje_vista" cols="40" rows="4" placeholder="Escribe un mensaje opcional">Me gustaría recibir información de este producto: <?php echo $nombre_producto ?></textarea>		
			</div>

			<!-- Grupo: Terminos y Condiciones -->
			<div class="formulario__grupo" id="grupo__terminos">
				<label class="formulario__label">
					<input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
					Acepto los Terminos y Condiciones
				</label>
			</div>

			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
		</form>
		<br/>
	</main>
	<div class="row">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5679.818108165663!2d-0.8042518796805904!3d37.83509717967112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd630e4f062d0f4b%3A0x27c4c02b0b4956a8!2sC.%20Giovani%20Bernini%2C%2030740%20San%20Pedro%20del%20Pinatar%2C%20Murcia!5e0!3m2!1ses!2ses!4v1638437584177!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
	<script src="js/formulario.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>


<?php include("template/pie.php"); ?>