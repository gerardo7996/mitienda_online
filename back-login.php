<?php
    session_start();
    include ("cnn-pdo.php");
    $cnnPDO = new Conexion();

    $user = (isset($_POST['user'])) ? $_POST['user'] : '';
    $pswd = (isset($_POST['pswd'])) ? $_POST['pswd'] : '';

    $query = "SELECT * FROM mitienda_administrador WHERE admin_username = '$user' AND admin_pswd = '$pswd'";
    $statement = $cnnPDO->prepare($query);
    $statement->execute();

    if ($statement->rowCount() >= 1) {
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['s_administrador'] = $user;
    } else {
        $_SESSION['s_administrador'] = null;
        $data = null;
    }
    print json_encode($data);
    $cnnPDO = null;
?>