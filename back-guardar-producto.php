<?php 
  	include ("cnn-pdo.php");

  	$codigo = $_POST['codigo'];
  	$producto = $_POST['producto'];
  	$precio = $_POST['precio'];
  	$cantidad = $_POST['cantidad'];

  	if (!empty($codigo) && !empty($producto) && !empty($precio) && !empty($cantidad)) {
  		$carpeta = "images/";
  		$nombre_imagen = $codigo . "-" . basename($_FILES["imagen"]["name"]);
  		$directorio = $carpeta . $nombre_imagen;
  		move_uploaded_file($_FILES["imagen"]["tmp_name"], $directorio);

  		$conPDO = new Conexion();
  		$query = $conPDO->prepare("INSERT INTO mitienda_productos (codigo, producto, precio, cantidad, imagen) VALUES (:codigo, :producto, :precio, :cantidad, :imagen)");
  		$query->bindParam(':codigo', $codigo);
  		$query->bindParam(':producto', $producto);
  		$query->bindParam(':precio', $precio);
  		$query->bindParam(':cantidad', $cantidad);
  		$query->bindParam(':imagen', $nombre_imagen, PDO::PARAM_LOB);
  		$query->execute();

  		$response = 2;
  	}
  	echo $response;
?>