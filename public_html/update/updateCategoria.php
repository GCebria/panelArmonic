<?php

error_reporting(0);
$id = $_GET["id"];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

$conexion = new mysqli("localhost", "root", "", "armonic");
$query = "update categorias set nombre='$nombre', descripcion='$descripcion' where id='$id'";
if (mysqli_query($conexion, $query)) {
    echo "New record created successfully";
    header('Location: ../index.php');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conexion);
}
?>
