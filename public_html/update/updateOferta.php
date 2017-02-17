<?php

error_reporting(0);
$id = $_GET["id"];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$ruta = $_POST['ruta'];

$conexion = new mysqli("localhost", "root", "armonic", "armonic");
$query = "update ofertas set titulo='$titulo', descripcion='$descripcion', ruta='$ruta' where id='$id'";
if (mysqli_query($conexion, $query)) {
    echo "New record created successfully";
    header('Location: ../index.php');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conexion);
}
?>
