<?php

include 'conexion.php';

$nombre = $_POST['nombre'];
$curso = $_POST['curso'];

$array_futbol = array(

    [
        "nombre_equipo" => "Real Madrid",
        "estadio" => "Santiago Bernabeu",
        "ciudad" => "Madrid",
        "jugadores" => [
                            "Roberto",
                            "Carlos",
                            "Juan",
                            "Salatti"
                        ]
    ]

);

class Juego {

    public static function getPVP($codigoProducto) {
        $conn = ConexionBD::Conectar();

        $sql = "SELECT PVP from producto where cod = ' . $codigoProducto . '";

        $resultado = $conn->query($sql);

        $fila = $resultado->fetch();

        return $fila['PVP'];
    }
    
}

?>




