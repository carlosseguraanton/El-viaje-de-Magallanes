<?php

include 'conexionBD.php';

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

    public static function insertNombre($nombre, $curso) {
        $conn = ConexionBD::Conectar();
        
        $sqlSelect = "SELECT nombre from usuario where nombre = '$nombre'";
        
        $resultadoSelect = $conn->query($sqlSelect);
        
        $fila = mysqli_num_rows($resultadoSelect);
        
        if ($fila == 1) {
            echo 'Ya existe este usuario';
        } else {
            $sqlInsert = "INSERT into usuario (nombre, curso) values ('$nombre', '$curso', 500)";
            
            
        }

    }

    /*public static function insertNombre($nombre, $curso) {
        $conn = ConexionBD::Conectar();

        return $fila['PVP'];
    }*/
}

?>




