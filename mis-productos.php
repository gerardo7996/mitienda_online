<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda Online - Mis Productos</title>
    <link rel="shortcut icon" href="img/existencias.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="mis-productos.css">
</head>
<body class="sb-nav-fixed">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <span class="navbar-brand">Mi Tienda Online</span>
            <a class="d-flex btn btn-outline-info" href="vista-admin.php"><i class="bi bi-backspace"></i>Volver</a>
        </div> 
    </nav>
    <br><br>
    <div class="container w-75 bg-white rounded shadow"><br>
        <center>
            <img src="img/gestion-de-productos.png" class="icono-producto">
        </center>
        <h4 class="fw-bold text-center">Mis Productos</h4><hr>
        <h5 class="mt-3">Aquí se mostrarán toda la información completa de los productos disponibles de nuestra tienda virtual.</h5><br>
        <?php
            include ("cnn-pdo.php");
            $conexion = new Conexion();
            $sql = "SELECT * FROM mitienda_productos";
            $stmt = $conexion->prepare($sql);
            $stmt->execute();
            $datos = $stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($datos as $fila):
        ?>
        <div class="col-3 d-inline-block" style="padding-bottom: 2%; margin-left: 5%;">
            <div class="card h-100" style="padding-bottom: 0%; margin-left: 7%;">
                <?php
                    $id = $fila->id_producto;
                    $img = $fila->imagen;
                    $destino = "images/" . $img;

                    if (!file_exists($img)) {
                        $img = "img/sin-imagen.png";
                    }
                ?>
                <img src="<?php echo $destino; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $fila->producto; ?></h5><hr>
                    <b class="card-text">Código: </b>  <?php echo $fila->codigo; ?><br>
                    <b class="card-text">Precio: </b>  $<?php echo number_format($fila->precio, 2, '.', ','); ?><br>
                    <b class="card-text">Cantidad: </b>  <?php echo $fila->cantidad; ?><br>
                    <center>
                        <a href="info-producto.php?id_producto=<?php echo $id; ?>" class="btn btn-outline-success"><i class="bi bi-cart-fill"></i>Comprar Producto</a>
                    </center>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <br>
    </div>
    <br><br>
    <section class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <span class="navbar-brand">Copyright @ 2023.</span>
            <a href="https://getbootstrap.com/" class="btn btn-outline-info"><i class="bi bi-share-fill"></i>Sitio web oficial de Bootstrap</a>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>