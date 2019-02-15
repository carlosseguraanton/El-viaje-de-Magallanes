<?php

error_reporting(E_ALL);

require_once '../Model/Usuario.php';

// Obtiene todos los usuarios
$data['usuarios'] = Usuario::getUsuarios();

// Carga la vista de listado
include '../View/ListUsuarios.php';

?>