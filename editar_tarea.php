<?php include("db.php"); 


if  (isset($_GET['idtareas'])) {
    $idtareas = $_GET['idtareas'];
    $query = "SELECT * FROM tareas WHERE idtareas=".$idtareas;
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $nombre_completo = $row['titulo'];
      $direccion = $row['descripcion'];
      $fecha_nacimiento = $row['fecha_registro'];      
      
    }
  }

  if(isset($_POST['actualizar'])){
    $idtareas = $_GET['idtareas'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fecha_registro = $_POST['fecha_registro'];
    


$query = "UPDATE tareas SET titulo = '$titulo', descripcion = '$descripcion', fecha_registro='$fecha_registro' WHERE idtareas=".$idtareas;
$da = $conn->query($query);
if($da > 0){
    $_SESSION['mensaje'] = "Datos Actualizados Correctamente";
   $_SESSION['mensaje_tipo'] = "warning";
  header("Location: index.php");
}
  }

?>

<?php include("includes/header.php"); ?>


<div class="container">

<div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card card-body">
                <!--FORMULARIO DE ACTUALIZAR DATOS-->


                <form action="editar_tarea.php?idtareas=<?php echo $_GET['idtareas']; ?>" method="post">
                            <div class="form-group">
                                <label>Nombre Completo</label>
                                <input type="text" name="titulo" class="form-control" placeholder="Jorge Alberto Coto" required value="<?php echo $nombre_completo; ?>">
                            </div>
                            <div class="form-group">
                                <label>Direccion</label>
                                <textarea class="form-control" name="descripcion" rows="2" required >
                                <?php echo $direccion; ?>   
                                </textarea>
                                </div>
                            <div class="form-group">
                                <label>Fecha de Nacimiento</label>
                                <input type="date" name="fecha_registro" class="form-control" required value="<?php echo $fecha_nacimiento; ?>">
                            </div>

    <input type="submit" class="btn btn-success btn-block" value="Actualizar Datos del Estudiante" name="actualizar">

                        </form>

            </div>
        </div>
</div>
</div>

<?php include("includes/footer.php"); ?>