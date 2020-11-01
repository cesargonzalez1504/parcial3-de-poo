<?php include("db.php"); ?>

<?php include("includes/header.php"); ?>
        
<div class="container  p-4">
        <div class="row">
            <div class="col-md-4">


            <!--MENSAJE DE ALERTA-->
            <?php  if(isset($_SESSION['mensaje'])){?>
                <div class="alert alert-<?=$_SESSION['mensaje_tipo']; ?> alert-dismissible fade show" role="alert">
  <strong>
      <?=$_SESSION['mensaje']; ?>
  </strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

            <?php session_unset(); } ?>

                <div class="card card-body">
                       <?php include("formulario_tarea.php"); ?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-body">
                    <?php include("mostrar_tarea.php");?>
                </div>
            </div>

        </div>
</div>

<?php include("includes/footer.php"); ?>