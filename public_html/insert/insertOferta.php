<?php

error_reporting(0);
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$ruta = $_POST['ruta'];

//$tabla = $_POST['delete_tabla'];
//$tabla = $_POST['delete_id'];
$conexion = new mysqli("localhost", "root", "", "armonic");
$query = "insert into ofertas values(0,'$titulo','$descripcion','$ruta')";
if (mysqli_query($conexion, $query)) {
    echo "New record created successfully";
        header('Location: ../index.php');

} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conexion);
}
?>
