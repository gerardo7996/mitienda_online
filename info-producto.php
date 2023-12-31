<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda Online - Información del Producto</title>
    <link rel="shortcut icon" href="img/informe-seo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="products-info.css">
    <script src="https://www.paypal.com/sdk/js?client-id=Ac482THBrf6AoPaJCisizbAdJZ5zrPXGAQN5fyc5uKELN5wk3Pjn0bXx7YjD071UNs3mNDH-LLWWsTYy&currency=MXN"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <span class="navbar-brand">Mi Tienda Online</span>
            <a class="d-flex btn btn-outline-info" href="vista-admin.php"><i class="bi bi-backspace"></i>Volver</a>
        </div>
    </nav>
    <br><br>
    <div class="container-fluid bg-white rounded shadow"><br>
        <center>
            <img src="img/archivo.png" class="details-icon">
        </center>
        <h4 class="fw-bold text-center">Información completa del producto</h4><hr>
        <?php
            include ("cnn-pdo.php");
            $id = $_GET['id_producto'];
            $conexion = new Conexion();
            $sql = "SELECT * FROM mitienda_productos WHERE id_producto=:id";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $register = $stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($register as $row):
        ?>
        <div class="row">
            <div class="col-md-6 order-md-1">
                <?php
                    $id = $row->id_producto;
                    $img = $row->imagen;
                    $destino = "images/" . $img;

                    if (!file_exists($img)) {
                        $img = "img/sin-imagen.png";
                    }
                ?>
                <center>
                    <img src="<?php echo $destino; ?>" alt="" class="img-fluid">
                </center>
            </div>
            <div class="col-md-6 order-md-2">
                <h2 style="font-weight:600;"><?php echo $row->producto; ?></h2>
                <h2>$<?php echo number_format($row->precio, 2, '.', ','); ?></h2>
                <p class="lead">
                    <?php echo $row->producto; ?><br>
                    Quedan <?php echo $row->cantidad; ?> disponibles en tienda.
                </p>
                <div class="d-grid gap-3 col-10 mx-auto">
                    <div id="paypal-button-container"></div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
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
</body>
</html>
<script type="text/javascript">
    paypal.Buttons({
        style:{
            color: 'blue',
            shape: 'pill',
            label: 'pay'
        },
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount:{
                        value: <?php echo $row->precio; ?>
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            actions.order.capture().then(function(detalles) {
                Swal.fire(
                    "¡Pago completado!",
                    "Tu pago se ha realizado con exito",
                    "success"
                )
                console.log(detalles);
            });
        },
        onCancel: function(data) {
            Swal.fire(
                "Pago cancelado",
                "Tu pago fue cancelado y no se pudo realizar la transacción",
                "info"
            )
            console.log(data);
        }
    }).render('#paypal-button-container');
</script>