
<?php
error_reporting(0);
$id = $_POST['delete_id'];
$tabla = $_POST['delete_tabla'];
//$tabla = $_POST['delete_id'];
$conexion = new mysqli("localhost", "root", "armonic", "armonic");
$query = "delete from $tabla where ID = $id";
$result = $conexion->query($query);
?>