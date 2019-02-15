<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
  </head>
  <body>
    <h1>Usuarios</h1>
    <a href="../Controller/newUsuario.php">New Usuario</a>
    <hr>
    <?php
    foreach($data['usuarios'] as $usuario)  {
    ?>
    <table>
      <tr>
        <th>Usuario</th><th>Puntuacion</th>
      </tr>
      <tr>
        <td><?=$usuario->getNombre()?></td><td><?=$usuario->getPuntuacion()?></td><td><a href="../Controller/deleteUsuario.php?codigo=<?=$usuario->getCodigo()?>">Delete user</a><
      </tr>
    </table>
    <?php
     }
    ?>
  </body>
</html>