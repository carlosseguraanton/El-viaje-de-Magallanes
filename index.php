<html>

<head>

    <meta charset="UTF-8" />

    <title>El viaje de Magallanes</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="./img/magallanes.jpg">

    <link rel="stylesheet" href="./css/estilos.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" src="./js/formulario.js"></script>

</head>

<body>

    <div class="contenedor-formulario">

        <div class="wrap">

            <h1>El viaje de Magallanes</h1>

            <br>

            <img src="./img/magallanes.jpg"/>

            <br>

            <form action="./contenido/controller/juego.php" class="formulario" name="formulario_registro" method="POST">

                <div>

                    <div class="input-group">

                        <input type="text" id="nombre" name="nombre">

                        <label class="label" for="nombre">Nombre:</label>

                    </div>

                    <div class="input-group">

                        <input type="text" id="curso" name="curso">

                        <label class="label" for="curso">Curso:</label>

                    </div>

                    <input type="submit" id="btn-submit" value="¡COMENZAR A JUGAR!">

                </div>

            </form>

        </div>
        
    </div>

</body>

</html>
