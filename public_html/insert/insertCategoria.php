<?php

error_reporting(0);
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

$conexion = new mysqli("localhost", "root", "", "armonic");
$query = "insert into categorias values(0,'$nombre','$descripcion')";
if (mysqli_query($conexion, $query)) {
    echo "New record created successfully";
        header('Location: ../index.php');

} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conexion);
}
?>
