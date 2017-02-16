<?php

error_reporting(0);
$idCliente = $_POST['idCliente'];
$fecha = $_POST['fecha'];

//$tabla = $_POST['delete_tabla'];
//$tabla = $_POST['delete_id'];
$conexion = new mysqli("localhost", "root", "", "armonic");
$query = "insert into pedidos values(0,'$idCliente','$fecha')";
if (mysqli_query($conexion, $query)) {
    echo "New record created successfully";
        header('Location: ../index.php');

} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conexion);
}
?>
