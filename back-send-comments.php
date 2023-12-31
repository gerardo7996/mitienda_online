<?php
    include ("cnn-pdo.php");

    $nombre = $_POST['nombre'];
    $comentario = $_POST['comentario'];

    if (!empty($nombre) && !empty($comentario)) {
        $conexion = new Conexion();
        $query = $conexion->prepare("INSERT INTO mitienda_comentarios (nombre, comentario) VALUES (:nombre, :comentario)");
        $query->bindParam(':nombre', $nombre);
        $query->bindParam(':comentario', $comentario);
        $query->execute();

        $response = 2;
    }
    echo $response;
?>