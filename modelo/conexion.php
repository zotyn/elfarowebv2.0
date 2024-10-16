<?php
$servidor="localhost";
$db="elfaro_bd";
$username="elfaro_bd";
$password="QqnCiRYb6baF-8O9";



try {
    $conexion=new PDO("mysql:host=$servidor;dbname=$db",$username,$password);
} catch (Excption $e) {
   echo $e->getMessage();
}
?>

