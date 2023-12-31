<?php
	include ("cnn-pdo.php");
	$id_eliminar = $_POST['id'];
	$conexion = new Conexion();
	$consulta = $conexion->prepare("DELETE FROM mitienda_comentarios WHERE id_comentario=:id");
	$consulta->bindParam(':id', $id_eliminar);
	$consulta->execute(); 
?>