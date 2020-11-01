<?php 
include("db.php");

if(isset($_POST['Registrar'])){
    $nombre = $_POST['nombretarea'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];
    

$query = "INSERT INTO tareas(titulo,descripcion,fecha_registro)
VALUES('$nombre','$descripcion','$fecha')";
$resultado = mysqli_query($conn,$query);

if(!$resultado){
    die("Error al guardar");
}else{
   $_SESSION['mensaje'] = "Tarea Registrada";
   $_SESSION['mensaje_tipo'] = "success";
   header("Location: index.php");
}
}
?>