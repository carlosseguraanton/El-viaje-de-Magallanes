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
        
            for ($i = 1; $i <= 5; $i++) { 
                echo "<div class='barco" . $i . "'>";

                $pregunta = Pregunta::getPreguntaByCod($i);

                echo "<p>" . $pregunta->getPregunta() . "</p>";

                echo "<div class='respuesta" . $i . "'>";
                
                echo "<input type='radio' value='" . $pregunta->getRespuestac() .  "name='" . $pregunta->getRespuestac() . "'></input>";
                echo "<input type='radio' value='" . $pregunta->getRespuesta1() . "'></input>";
                echo "<input type='radio' value='" . $pregunta->getRespuesta2() . "'></input>";
                echo "<input type='radio' value='" . $pregunta->getRespuesta3() . "'></input>";
                
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
