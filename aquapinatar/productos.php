<?php include("template/cabecera.php"); ?>

<?php 
include("administrador/config/bd.php");
$sentenciaSQL= $conexion->prepare("SELECT * FROM fuentes");
$sentenciaSQL->execute();
$listaFuentes=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>    
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="./css/productos.css"/>
     
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
</head>
<body>
<header>    
    <section class="textos-header">
    <h1>La calidad de nuestro servicio y la comodidad para nuestro cliente son nuestra razón de ser..</h1>
        <h2>Eche un vistazo a la variedad de fuentes que disponemos </h2>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;">
		<svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
   		</svg>
	</div>
</header>     
<br/><br/>
<?php foreach($listaFuentes as $fuente){ ?>
<div class="container">
     <div class="row mb-3 mx-5">  
          <div class="card mx-5 px-2">
               <div class="card-body">
                    <div class="row">
                         <div class="col">
                              <h4 class="card-title"><?php echo $fuente['nombre'] ?></h4></br>
                              <img class="img-rounded" width='50' src="./img/<?php echo $fuente['imagen'] ?>" alt="">
                         </div>
                         <div class="col pt-3 mt-3">
                              <div class="float-end">
                                   <p class="card-text"><?php echo $fuente['descripcion'] ?></p>
                                   
                                   <a name="" id="boton1" class="btn btn-info" href="./img/<?php echo $fuente['ficha'] ?>" role="button" target="_blank">Ver Ficha</a>
                              </div>
                         </div>                                                            
                    </div>
               </div>                   
               <a name="" id="boton2" class="btn btn-primary mb-2" href="contacto.php?nombre_producto=<?php echo $fuente['nombre'] ?>" role="button">Pedir información</a>
          </div>
     </div>
     <br/>
</div>
<?php } ?>
</body>
</html>
<?php include("template/pie.php"); ?>

