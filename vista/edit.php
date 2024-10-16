<?php
include("../modelo/conexion.php");
if(isset($_GET['id'])){

    $txtid=(isset($_GET['id'])?$_GET['id']:"");
    $stm=$conexion->prepare("SELECT * FROM suscripcion WHERE id_user=:txtid");
    $stm->bindparam(":txtid",$txtid);
    $stm->execute();
    $registro=$stm->fetch(PDO::FETCH_LAZY);
    $nombre=$registro['nombre_user'];
    $telefono=$registro['telefono_user'];
    $fecha=$registro['fecha_user'];
    $email=$registro['email_user'];
}
if($_POST){
    
    $txtid=(isset($_POST['txtid'])?$_POST['txtid']:"");
    $nombre=(isset($_POST['nombre'])?$_POST['nombre']:"");
    $telefono=(isset($_POST['telefono'])?$_POST['telefono']:"");
    $fecha=(isset($_POST['fecha'])?$_POST['fecha']:"");
    $email=(isset($_POST['email'])?$_POST['email']:"");
    
    $stm=$conexion->prepare("UPDATE suscripcion SET nombre_user=:nombre,telefono_user=:telefono,fecha_user=:fecha,email_user=:email WHERE id_user=:txtid");
    $stm->bindParam(":nombre",$nombre);
    $stm->bindParam(":telefono",$telefono);
    $stm->bindParam(":fecha",$fecha);
    $stm->bindParam(":email",$email);
    $stm->bindParam(":txtid",$txtid);
    $stm->execute();
    header("location:index.php");
    
    
}   

?>
<?php include("layout/header.php");?>
<form action="" method="post">
                
    <div>    
        
        <input type="hidden" class="form-control"  name="txtid" value="<?php echo htmlspecialchars($txtid); ?>">

        <label for="">Nombre:</label>
        <input type="text" class="form-control"  name="nombre" value="<?php echo htmlspecialchars($nombre); ?>">

        <label for="">Telefono:</label>
        <input type="text" class="form-control"  name="telefono" value="<?php echo htmlspecialchars($telefono); ?>">


        <label for="">Fecha de Nacimiento:</label>
        <input type="date" class="form-control"  name="fecha" value="<?php echo htmlspecialchars($fecha); ?>">

        <label for="">Correo:</label>
        <input type="text" class="form-control"  name="email" value="<?php echo htmlspecialchars($email); ?>">

    </div>   
        


        <div class="modal-footer">
            <a href=index.php class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary">actualizar</button>
        </div>
     
</form>
<?php include("layout/footer.php");?>