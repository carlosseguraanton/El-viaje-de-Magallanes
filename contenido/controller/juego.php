<?php

    include './../model/Usuario.php';
    include './../model/Pregunta.php';

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
        
            $br = "<br>";
        
            for ($i = 1; $i <= 5; $i++) {

                echo "<div class='circulo" . $i . "'>";

                    $pregunta = Pregunta::getPreguntaByCod($i);

                    echo "<p>" . $pregunta->getPregunta() . "</p>";

                    echo "<div class='respuesta" . $i . "'>";

                        $respuestac = $pregunta->getRespuestac();
                        $respuesta1 = $pregunta->getRespuesta1();
                        $respuesta2 = $pregunta->getRespuesta2();
                        $respuesta3 = $pregunta->getRespuesta3();

                        echo $br;
                        echo $br;

                        echo "<form action='./juego.php' method='POST'>";

                            echo "<input type='radio' value='" . $respuestac . "'name='respuesta" . $i . "'>" . $respuestac . $br . $br;
                            echo "<input type='radio' value='" . $respuesta1 . "'name='respuesta" . $i . "'>" . $respuesta1 . $br . $br;
                            echo "<input type='radio' value='" . $respuesta2 . "'name='respuesta" . $i . "'>" . $respuesta2 . $br . $br;
                            echo "<input type='radio' value='" . $respuesta3 . "'name='respuesta" . $i . "'>" . $respuesta3 . $br . $br;
                            
                            echo $br;
                            echo $br;

                            echo "<input type='submit' value='Validar Respuesta' name='validar'>";

                        echo "</form>";
                    
                    echo "</div>";

                echo "</div>";

            }


        ?>
    </body>
</html>





<?php

    error_reporting(E_ALL);

    $data['usuarios'] = Usuario::getUsuarios();

    $nombre = $_POST['nombre'];
    $curso = $_POST['curso'];

    $usuario = new Usuario($nombre, $curso);

    $usuario->insertUsuario();
    
    // include './../view/ListUsuarios.php';

?>
