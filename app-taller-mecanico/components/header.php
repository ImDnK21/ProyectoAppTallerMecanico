<?php 
require_once('config/settings.php'); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (!empty($title)) { print($title . ' - '); } echo APP_NAME ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= APP_URL . 'css/style.css' ?>">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  
            
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="<?= APP_URL ?>" class="navbar-brand"><?= APP_NAME ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php if(isset($_SESSION['id_usuario'])) { ?>
                    <li class="nav-item">
                        <a href="" class="nav-link active">Bienvenido <?= $_SESSION['username'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= APP_URL . 'logout' ?>" class="nav-link active">Cerrar sesión</a>
                    </li>
                    <?php } else { ?>
                    <li class="nav-item">
                        <a href="<?= APP_URL . 'registro' ?>" class="nav-link active">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= APP_URL . 'login' ?>" class="nav-link active">Iniciar sesión</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
