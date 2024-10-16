<?php 
include("../modelo/conexion.php");
$stm=$conexion->prepare("SELECT * FROM suscripcion");
$stm->execute();
$suscripcion=$stm->fetchALL(PDO::FETCH_ASSOC);

if(isset($_GET['id'])){

    $txtid=(isset($_GET['id'])?$_GET['id']:"");
    $stm=$conexion->prepare("DELETE FROM suscripcion WHERE id_user=:txtid");
    $stm->bindParam(":txtid",$txtid);
    $stm->execute();
    header("location:index.php");
}
?>

<?php include("layout/header.php");?>
<?php include("create.php");?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
  Nuevo
</button>
<div class="table-responsive">
    <table class="table">
        <thead class="table table-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Fecha Nac</th>
                <th scope="col">correo</th> 
            </tr>
        </thead>
        <tbody>
            <?php foreach($suscripcion as $suscripcion) {?>
            <tr class="">
                <td scope="row"><?php echo $suscripcion['id_user']?></td>
                <td><?php echo $suscripcion['nombre_user']?></td>
                <td><?php echo $suscripcion['telefono_user']?></td>
                <td><?php echo $suscripcion['fecha_user']?></td>
                <td><?php echo $suscripcion['email_user']?></td>
                <td>
                <a href="edit.php?id=<?php echo $suscripcion['id_user']?>" class="btn btn-success">Editar</a>
                <a href="index.php?id=<?php echo $suscripcion['id_user']?>" class="btn btn-danger">Borrar</a>

                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>

<?php include("layout/footer.php");?>  





