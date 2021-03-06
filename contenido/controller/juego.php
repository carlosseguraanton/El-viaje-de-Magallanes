<?php

    include './../model/Usuario.php';
    include './../model/Pregunta.php';

    error_reporting(E_ALL);

    $data['usuarios'] = Usuario::getUsuarios();

    $nombre = $_POST['nombre'];
    $curso = $_POST['curso'];

    $usuario = new Usuario($nombre, $curso);

    $usuario->insertUsuario();

?>

<html>
    <head>

        <meta charset="UTF-8"/>

        <title>El viaje de Magallanes</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="./../../img/magallanes.jpg">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script type="text/javascript" src="./../../js/main.js"></script>

        <link rel="stylesheet" type="text/css" href="./../../css/main.css">

    </head>
    <body>

        <div class="divImg">
            <img src="./../../img/juego.png">
        </div>

        <?php
        
            $br2 = "<br><br>";
        
            for ( $i = 1; $i <= 5; $i++ ) {

                echo "<div class='circulo" . $i . "'>";

                    $pregunta = Pregunta::getPreguntaByCod($i);

                    echo "<p>" . $pregunta->getPregunta() . "</p>";

                    $respuestac = $pregunta->getRespuestac();
                    $respuesta1 = $pregunta->getRespuesta1();
                    $respuesta2 = $pregunta->getRespuesta2();
                    $respuesta3 = $pregunta->getRespuesta3();

                    echo $br2;

                    echo "<form class='respuesta" . $i . "' action='./juego.php' method='POST'>";

                        echo "<input type='radio' value='" . $respuestac . "' name='respuesta" . $i . "'>" . $respuestac;
                        echo "<input type='radio' value='" . $respuesta1 . "' name='respuesta" . $i . "'>" . $respuesta1;
                        echo "<input type='radio' value='" . $respuesta2 . "' name='respuesta" . $i . "'>" . $respuesta2;
                        echo "<input type='radio' value='" . $respuesta3 . "' name='respuesta" . $i . "'>" . $respuesta3;
                        
                        echo $br2;

                        echo "<input type='button' value='Validar Respuesta' name='validar'>";

                    echo "</form>";

                echo "</div>";

            }


        ?>
        
    </body>
</html>





<?php

    $respuestaSeleccionada = $_POST['respuestaSeleccionada'];

    if ($respuestaSeleccionada === $respuestac) {

        // Aquí habría que darle puntos al usuario.

        echo "Has acertado";

    } else {
        echo "No has acertado. La respuesta correcta es: " . $respuestac;
    }

    
    // include './../view/ListUsuarios.php';

?>
