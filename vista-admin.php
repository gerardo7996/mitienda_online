<?php
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda Online - Vista Administrador</title>
    <link rel="shortcut icon" href="img/pagina-de-inicio.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="vista-admin.css">
</head>
<body class="sb-nav-fixed">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <span class="navbar-brand">Mi Tienda Online</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="info-desarrollador.html">Sobre el Desarrollador</a>
                    </li>
                    <li class="nav-item">
                        <a href="nuevo-producto.php" class="nav-link">Nuevo Producto</a>
                    </li>
                    <li class="nav-item">
                        <a href="mis-productos.php" class="nav-link">Mis Productos</a>
                    </li>
                    <li class="nav-item">
                        <a href="detalle-productos.php" class="nav-link">Detalles de Productos</a>
                    </li>
                    <li class="nav-item">
                        <a href="seccion-comentarios.php" class="nav-link">Comentarios</a>
                    </li>
                    <li class="nav-item">
                        <a href="lista-comentarios.php" class="nav-link">Ver Comentarios</a>
                    </li>
                </ul>
            </div>
            <a class="d-flex btn btn-outline-info" href="back-logout.php"><i class="bi bi-backspace"></i>Cerrar Sesión</a>
        </div>
    </nav>
    <br><br>
    <div class="container w-75 bg-white rounded shadow"><br>
        <center>
            <img src="img/casa.png" class="home-icon">
        </center>
        <h4 class="fw-bold text-center" style="font-style: initial; font-size: 30px; font-weight: 600; text-align: center; color: black;">Mi Tienda Online</h4><hr>
        <h4>Bienvenido a Mi Tienda Online: <?php echo $_SESSION['s_administrador']; ?></h4>
        <h5 style="text-align: left; margin-top: 12px;">La fecha y hora de hoy es: <?php echo date("d") . "-" . date("M") . "-" . date("Y"); ?></h5><br>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="img/promocion.png" alt="..." class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Promoción para todos los productos</h5><hr>
                        <p class="card-text">Ofrecemos promociones a nuestros clientes para que compren sus productos favoritos con un gran descuento.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/nuevo-producto.png" alt="..." class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Llegada de productos nuevos</h5><hr>
                        <p class="card-text">En nuestra tienda virtual llegarán nuevos productos para todos nuestros clientes que deseen mucho comprar y buscar de las diferentes categorías.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/etiquetas-de-precio.png" alt="..." class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Todos nuestros productos tienen su precio accesible</h5><hr>
                        <p class="card-text">Los precios de nuestros productos cuentan con un precio accesible para que nuestros clientes compren todos sus productos favoritos.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/estrella.png" alt="..." class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Agrega tus productos favoritos</h5><hr>
                        <p class="card-text">Dentro de nuestra tienda en línea puedes guardar todos los productos que desees comprar en una sección especial de favoritos.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/computadora-portatil.png" alt="..." class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">¡Tus datos estarán protegidos!</h5><hr>
                        <p class="card-text">Brindamos buena protección a los datos de nuestros clientes y que puedan navegar de forma segura sin rastros de Phishing, Washing, Malware y entre otras amenazas de seguridad.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/anadir-al-carrito.png" alt="..." class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">¡Guarda tus productos favoritos en tu carrito!</h5><hr>
                        <p class="card-text">Nuestra tienda virtual cuenta con un carrito para que puedas agregar todos los productos que desees comprar sin la necesidad de buscarlos.</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
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