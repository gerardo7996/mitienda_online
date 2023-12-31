<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda Online - Sección de Comentarios</title>
    <link rel="shortcut icon" href="img/comentarios.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="comments-form-style.css">
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
            <img src="img/hablando.png" class="comments-icon">
        </center>
        <h4 class="fw-bold text-center">Nuevo Comentario</h4><hr>
        <form action="" class="row" id="comments_form" method="POST">
            <div class="col-12">
                <label for="nombre" class="form-label">Tu Nombre</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-square"></i></span>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Escribe tu nombre" aria-label="nombre" aria-describedby="addon-wrapping">
                </div>
            </div>
            <div class="col-12">
                <label for="nombre" class="form-label" style="margin-top: 12px;">Tu Comentario</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="bi bi-chat-left-text-fill"></i></span>
                    <textarea name="comentario" id="comentario" cols="2" rows="2" class="form-control" aria-label="nombre" aria-describedby="addon-wrapping"></textarea>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-block">
                <button type="submit" class="btn btn-outline-success" name="send_comment" id="send_comment"><i class="bi bi-send-plus-fill"></i>Enviar Comentario</button>
                <button type="reset" class="btn btn-outline-warning" name="clean_form" id="clean_form"><i class="bi bi-trash-fill"></i>Limpiar Formulario</button>
            </div>
        </form>
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
<script type="text/javascript" src="sending-comment.js"></script>