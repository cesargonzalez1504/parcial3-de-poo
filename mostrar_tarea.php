<form method="POST" action="index.php">

    <input type="submit" class="btn btn-success btn-block" value="Mostrar tarea" name="mostrar"><br>



    <?php 
        if(isset($_POST['mostrar'])){
    ?>

                    <table id="example" class="table table-striped table-bordered" style="width:100%">

                    <thead>
                        <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Fecha</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM tareas";
                            $resultado_tabla = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_array($resultado_tabla)){
                        ?>
                        <tr>
                            <td><?php echo $row['titulo']; ?></td>
                            <td><?php echo $row['descripcion']; ?></td>
                            <td><?php echo $row['fecha_registro']; ?></td>
                            

                            <td>

                            <a href="editar_tarea.php?idtareas=<?php echo $row['idtareas'];?>" class="btn btn-secondary">
                                Editar
                                </a>
                              <a href="eliminar_tarea.php?idtareas=<?php echo $row['idtareas'];?>" class="btn btn-danger">
                                Eliminar
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>


                    </table>
    <?php  } ?>
</form>