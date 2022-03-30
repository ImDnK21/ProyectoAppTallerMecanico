<?php 
require_once("config/settings.php");

if (!isset($_SESSION['id_usuario'])) {
    header('Location: ' . APP_URL . 'login');
    exit();
}
