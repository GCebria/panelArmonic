<?php

error_reporting(0);
$id = $_GET["id"];
$idCliente = $_POST['idCliente'];
$fecha = $_POST['fecha'];

$conexion = new mysqli("localhost", "root", "", "armonic");
$query = "update pedidos set idCliente='$idCliente', fecha='$fecha' where id='$id'";
if (mysqli_query($conexion, $query)) {
    echo "New record created successfully";
    header('Location: ../index.php');
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conexion);
}
?>
