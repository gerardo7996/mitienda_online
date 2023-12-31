<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda Online - Detalle de Productos</title>
    <link rel="shortcut icon" href="img/bienes.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="detalle-productos.css">
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
            <img src="img/caja (1).png" class="product-icon">
        </center>
        <h4 class="fw-bold text-center">Tabla de productos</h4><hr>
        <h5 class="mt-3">Dentro de esta sección se mostrarán todos los productos disponibles en nuestra tienda virtual.</h5>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="products_table" style="width: 100%;">
                <thead>
                    <tr>
                        <th scope="col" style="background-color: #6A1B9A; color: whitesmoke;">ID Producto</th>
                        <th scope="col" style="background-color: #6A1B9A; color: whitesmoke;">Código</th>
                        <th scope="col" style="background-color: #6A1B9A; color: whitesmoke;">Producto</th>
                        <th scope="col" style="background-color: #6A1B9A; color: whitesmoke;">Precio</th>
                        <th scope="col" style="background-color: #6A1B9A; color: whitesmoke;">Cantidad</th>
                        <th scope="col" style="background-color: #6A1B9A; color: whitesmoke;">Imagen</th>
                        <th scope="col" style="background-color: #6A1B9A; color: whitesmoke;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include ("cnn-pdo.php");
                        $conexion = new Conexion();
                        $sql = "SELECT * FROM mitienda_productos";
                        $stmt = $conexion->prepare($sql);
                        $stmt->execute();
                        $datos = $stmt->fetchAll(PDO::FETCH_OBJ);
                        foreach ($datos as $fila):
                    ?>
                    <?php
                        $id = $fila->id_producto;
                        $img = $fila->imagen;
                        $destino = "images/" . $img;

                        if (!file_exists($img)) {
                            $img = "img/sin-imagen.png";
                        }
                    ?>
                    <tr>
                        <th scope="row" style="color: black; font-weight: 600;"><?php echo $id; ?></th>
                        <td><?php echo $fila->codigo; ?></td>
                        <td><?php echo $fila->producto; ?></td>
                        <td>$<?php echo number_format($fila->precio, 2, '.', ','); ?></td>
                        <td><?php echo $fila->cantidad; ?></td>
                        <td><img src="<?php echo $destino; ?>" width="100px"></td>
                        <td><center>
                            <a href="info-producto.php?id_producto=<?php echo $id; ?>" class="btn btn-info"><i class="bi bi-info-square-fill"></i></a>
                            <a class="btn btn-danger" onclick="aceptar_eliminacion(<?php echo $id; ?>);"><i class="bi bi-trash-fill"></i></a>
                        </center></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>
        </div>
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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>
<script src="datatable.js"></script>
<script type="text/javascript" src="eliminar-producto.js"></script>