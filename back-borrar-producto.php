<?php
	include ("cnn-pdo.php");
	$id_borrar = $_POST['id'];
	$conexion = new Conexion();
	$sql = $conexion->prepare("DELETE FROM mitienda_productos WHERE id_producto=:id");
	$sql->bindParam(':id', $id_borrar);
	$sql->execute(); 
?>