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

                echo "</div>";
            }

        ?>
    </body>
</html>





<?php

    error_reporting(E_ALL);


    // ---------------------- Aquí va toda la lógica --------------------------- //

    // Obtiene todos los usuarios
    $data['usuarios'] = Usuario::getUsuarios();

    $nombre = $_POST['nombre'];
    $curso = $_POST['curso'];

    $usuario = new Usuario($nombre, $curso);

    $usuario->insertUsuario();
    

    // ------------------------------------------------- //

    // Carga la vista de listado
    // include './../view/ListUsuarios.php';

?>
