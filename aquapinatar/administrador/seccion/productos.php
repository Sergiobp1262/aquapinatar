<?php include("../template/cabecera.php");   ?>
<?php

$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtDescripcion=(isset($_POST['txtDescripcion']))?$_POST['txtDescripcion']:"";
$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$txtFicha=(isset($_FILES['txtFicha']['name']))?$_FILES['txtFicha']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("../config/bd.php");

switch($accion){

    case "Agregar":
        $sentenciaSQL= $conexion->prepare("INSERT INTO fuentes (nombre,descripcion,imagen,ficha) VALUES (:nombre,:descripcion,:imagen,:ficha);");
        $sentenciaSQL->bindParam(':nombre',$txtNombre);
        $sentenciaSQL->bindParam(':descripcion',$txtDescripcion);

        $fecha= new DateTime();
        $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";

        $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

        if($tmpImagen!=""){

            move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);
        }

        $sentenciaSQL->bindParam(':imagen',$nombreArchivo);


        $fecha= new DateTime();
        $nombreFicha=($txtFicha!="")?$fecha->getTimestamp()."_".$_FILES["txtFicha"]["name"]:"ficha.pdf";

        $tmpFicha=$_FILES["txtFicha"]["tmp_name"];

        if($txtFicha!=""){

            move_uploaded_file($tmpFicha,"../../img/".$nombreFicha);
        }

        $sentenciaSQL->bindParam(':ficha',$nombreFicha);
        
        $sentenciaSQL->execute();

        header("Location:productos.php");
        break;



    case "Modificar":

        $sentenciaSQL= $conexion->prepare("UPDATE fuentes SET nombre=:nombre, descripcion=:descripcion WHERE id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->bindParam(':nombre',$txtNombre);
        $sentenciaSQL->bindParam(':descripcion',$txtDescripcion);
        $sentenciaSQL->execute();



        if($txtImagen!=""){

            $fecha= new DateTime();
            $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
            $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

            move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);

            $sentenciaSQL= $conexion->prepare("SELECT imagen FROM fuentes WHERE id=:id");
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();
            $fuente=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

            if(isset($fuente["imagen"]) && ($fuente['imagen']!="imagen.jpg")){

                if(file_exists("../../img/".$fuente["imagen"])){

                     unlink("../../img/".$fuente["imagen"]);
                 }
            }


            $sentenciaSQL= $conexion->prepare("UPDATE fuentes SET imagen=:imagen, imagen=:imagen WHERE id=:id");
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->bindParam(':imagen',$nombreArchivo);
            $sentenciaSQL->execute();
        }



        if($txtFicha!=""){

            $ficha= new DateTime();
            $nombreFicha=($txtFicha!="")?$ficha->getTimestamp()."_".$_FILES["txtFicha"]["name"]:"ficha.pdf";
            $tmpFicha=$_FILES["txtFicha"]["tmp_name"];

            move_uploaded_file($tmpFicha,"../../img/".$nombreFicha);

            $sentenciaSQL= $conexion->prepare("SELECT ficha FROM fuentes WHERE id=:id");
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();
            $fuente=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

            if(isset($fuente["ficha"]) && ($fuente['ficha']!="ficha.pdf")){

                if(file_exists("../../img/".$fuente["ficha"])){

                     unlink("../../img/".$fuente["ficha"]);
                 }
            }


            $sentenciaSQL= $conexion->prepare("UPDATE fuentes SET ficha=:ficha, ficha=:ficha WHERE id=:id");
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->bindParam(':ficha',$nombreFicha);
            $sentenciaSQL->execute();
        }
        header("Location:productos.php");
        break;


    case "Cancelar":
        header("Location:productos.php");
        break;


    case "Seleccionar":
        $sentenciaSQL= $conexion->prepare("SELECT * FROM fuentes WHERE id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        $fuente=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

        $txtNombre=$fuente['nombre'];
        $txtDescripcion=$fuente['descripcion'];
        $txtImagen=$fuente['imagen'];
        $txtFicha=$fuente['ficha'];
        //echo "Presionado botón Seleccionar";
         break;


    case "Borrar":

        $sentenciaSQL= $conexion->prepare("SELECT imagen FROM fuentes WHERE id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        $fuente=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

        if(isset($fuente["imagen"]) && ($fuente['imagen']!="imagen.jpg")){

            if(file_exists("../../img/".$fuente["imagen"])){

                unlink("../../img/".$fuente["imagen"]);
            }
        }

        $sentenciaSQL= $conexion->prepare("DELETE  FROM fuentes WHERE id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();

        header("Location:productos.php");
        break;
}

$sentenciaSQL= $conexion->prepare("SELECT * FROM fuentes");
$sentenciaSQL->execute();
$listaFuentes=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>




<div class="col-md-5">


    <div class="card">
        <div class="card-header">
         Datos de Fuentes de Agua
        </div>

        <div class="card-body">
       
        <form method="POST" enctype="multipart/form-data">

    <div class = "form-group">
    <label for="txtID">ID:</label>
    <input type="text" required readonly class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="ID">
    </div>

    <div class = "form-group">
    <label for="txtNombre">Nombre:</label>
    <input type="text" required class="form-control" value="<?php echo $txtNombre; ?>" name="txtNombre" id="txtNombre" placeholder="Nombre de la máquina">
    </div>

    <div class = "form-group">
    <label for="txtDescripcion">Descripción:</label>
    
    <textarea rows='4' cols='50'  type="text" required class="form-control" value="<?php echo $txtDescripcion; ?>" name="txtDescripcion" id="txtDescripcion" placeholder="Descripción producto"> </textarea> 
    </div>  

    <div class = "form-group">
    <label for="txtImagen">Imagen:</label>

   <br/>

    <?php  if($txtImagen!=""){ ?>
        
        <img class="img-thumbnail rounded"src="../../img/<?php echo $txtImagen;?>" width="50" alt="">


    <?php } ?>


    <input type="file"  class="form-control" name="txtImagen" id="txtImagen" placeholder="Imagen">
    </div>

    <div class = "form-group">
    <label for="txtFicha">Ficha:</label>

     <br/>

    <?php  if($txtFicha!=""){ ?>
        
        
       <?php echo $txtFicha;?>


    <?php } ?>
    <input type="file" required class="form-control" name="txtFicha" id="txtFicha" placeholder="Ficha producto">
    </div>  



<div class="btn-group" role="group" aria-label="">
    <button type="submit" name="accion" <?php echo ($accion=="Seleccionar")?"disabled":""; ?>  value="Agregar" class="btn btn-success">Agregar</button>
    <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")?"disabled":""; ?> value="Modificar" class="btn btn-warning">Modificar</button>
    <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")?"disabled":""; ?> value="Cancelar" class="btn btn-info">Cancelar</button>
</div>

</form>

    </div>

    
</div>
  
   
       
</div>
<div class="col-md-7">
    

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Ficha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($listaFuentes as $fuente) { ?>
            <tr>
                <td><?php echo $fuente['id']; ?></td>
                <td><?php echo $fuente['nombre']; ?></td>
                <td><?php echo $fuente['descripcion']; ?></td>
                <td>
                <img src="../../img/<?php echo $fuente['imagen']; ?>" width="50" alt="">
                </td>
                <td><?php echo $fuente['ficha']; ?></td>

                <td>
                <form method="post">

                    <input type="hidden" name="txtID" id="txtID" value="<?php echo $fuente['id']; ?>"/>

                    <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary"/>
                    
                    <input type="submit" name="accion" value="Borrar" class="btn btn-danger"/>
                    



                </form>
                
                </td>
            </tr>
            <?php } ?> 
        </tbody>
    </table>

<?php include("../template/pie.php");   ?>