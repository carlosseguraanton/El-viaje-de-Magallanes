<?php

include 'conexionBD.php';

$nombre = $_POST['nombre'];
$curso = $_POST['curso'];

// ------------------------------------------------ //
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
// ------------------------------------------------ //


class Juego {

    public static function insertUsuario($nombre, $curso) {
        $conn = ConexionBD::Conectar();
        
        $sqlSelect = "SELECT nombre from usuario where nombre = '$nombre'";
        
        $resultadoSelect = $conn->query($sqlSelect);
        
        $fila = mysqli_num_rows($resultadoSelect);
        
        if ($fila == 1) {
            echo 'Ya existe este usuario';
        } else {
            $sqlInsert = "INSERT into usuario (nombre, curso, puntuacion) values ('$nombre', '$curso', 500)";

            if ($conn->query($sqlInsert) === true) {
                
            }
            
            
        }

    }

    public static function obtenerPreguntaCompleta() {
        $conn = ConexionBD::Conectar();

        $sqlSelect = "SELECT * from preguntas";

        $arrayPreguntas = $conn->query($sqlSelect);

        return $pregunta;
    }
}

?>




