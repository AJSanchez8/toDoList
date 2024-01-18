<?php

include 'conexion.php';

if(isset($_GET['id']) && !empty($_GET["id"])){
    $id = $_GET["id"];


$sql = "SELECT * FROM tareas WHERE id = $id";
$resultado = $conexion->query($sql);

if($resultado && $resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();

    $titulo = $row['titulo'];
    $descripcion = $row['descripcion'];
    $fecha = $row['fecha'];


    $sqlUpdate="UPDATE `tareas` SET `realizado`='0' WHERE id = $id";

    $conexion->query($sqlUpdate);

    header("Location: ../index.php");

}
}
















