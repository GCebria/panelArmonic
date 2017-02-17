<?php

error_reporting(0);
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$imagen = $_POST['imagen'];
if($_POST['videos']== NULL){
    $videos = null;
}else{
    $videos = $_POST['videos'];
};
$idCategoria = $_POST['idCategoria'];
//$tabla = $_POST['delete_tabla'];
//$tabla = $_POST['delete_id'];
$conexion = new mysqli("localhost", "root", "armonic", "armonic");
$query = "insert into productos values(0,'$nombre','$descripcion',$precio,'$imagen',$videos,$idCategoria)";
if (mysqli_query($conexion, $query)) {
    echo "New record created successfully";
        header('Location: ../index.php');

} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conexion);
}
?>
