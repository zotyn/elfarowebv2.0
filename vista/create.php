<?php if($_POST){

$nombre=(isset($_POST['nombre'])?$_POST['nombre']:"");
$telefono=(isset($_POST['telefono'])?$_POST['telefono']:"");
$fecha=(isset($_POST['fecha'])?$_POST['fecha']:"");
$email=(isset($_POST['email'])?$_POST['email']:"");

$stm=$conexion->prepare("INSERT INTO suscripcion(id_user, nombre_user, telefono_user, fecha_user, email_user) VALUES(null,:nombre,:telefono,:fecha,:email)");
$stm->bindParam(":nombre",$nombre);
$stm->bindParam(":telefono",$telefono);
$stm->bindParam(":fecha",$fecha);
$stm->bindParam(":email",$email);
$stm->execute();
header("location:index.php");


}   
?>

<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar suscripción</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <form action="" method="post">
                <div class="modal-body">
            
                    <label for="">Nombre:</label>
                    <input type="text" class="form-control"  name="nombre" value="" placeholder="Ingresa tu nombre" required>
              
            
                    <label for="">Telefono:</label>
                    <input type="text" class="form-control"  name="telefono" value="" placeholder="Ingresa tu número de teléfono" required>
              

                    <label for="">Fecha de Nacimiento:</label>
                    <input type="date" class="form-control"  name="fecha" value=""  required>
                
                    <label for="">Correo:</label>
                    <input type="text" class="form-control"  name="email" value="" placeholder="Ingresa tu correo Electronico" required>
              

          

                    <div class="field">
                        <div class="control">
                        <label class="checkbox">
                         <input type="checkbox" required>
                            Acepto los <a href="#">términos y condiciones</a>
                        </label>
                     </div>
                    </div>
                     

                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                         <button type="submit" class="btn btn-primary">Suscribirse</button>
                    </div>
            </form>

            
        </div>
    </div>
  </div>
</div>



