<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda Online - Iniciar Sesión</title>
    <link rel="shortcut icon" href="img/iniciar-sesion.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container w-75 bg-black rounded shadow" style="background-image: url('img/administrador.png'); background-position: center left; background-size: contain; background-position-x: -29px; border-radius: 2%;">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6">

            </div>
            <div class="col bg-info p-5 rounded-end" style="border-radius: 2%;">
                <div class="text-end">
                    <img src="img/inicio-sesion.png" width="48" alt="">
                </div>
                <h2 class="fw-bold text-center py-5">Iniciar Sesión</h2>
                <form action="" id="login_form" method="POST">
                    <div class="mb-4">
                        <label for="admin_username" class="form-label">Usuario</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-fill-add"></i></span>
                            <input type="text" name="admin_username" id="admin_username" class="form-control" placeholder="Escribe tu usuario" aria-label="admin_username" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="admin_pswd" class="form-label">Contraseña</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-key-fill"></i></span>
							<input type="password" name="admin_pswd" id="admin_pswd" class="form-control" placeholder="Escribe tu contraseña" aria-label="admin_pswd" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-outline-dark" name="enviar" id="enviar"><i class="bi bi-box-arrow-in-right"></i>Inicia Sesión</button>
                    </div>
                    <div class="my-3">
                        <span>Usuario: master, Contraseña: 12345</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<script type="text/javascript" src="login-ajax.js"></script>