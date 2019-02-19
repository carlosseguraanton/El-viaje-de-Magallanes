<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
  </head>
  <body>

    <h1>Ranking de puntuaciones</h1>
    <hr>

    <?php
      foreach($data['usuarios'] as $usuario) {
    ?>

    <table>
      <tr>
        <th>Usuario</th>
        <th>Curso</th>
        <th>Puntuacion</th>
      </tr>
      <tr>
        <td>
          <?= $usuario->getNombre() ?>
        </td>
        <td>
          <?= $usuario->getCurso() ?>
        </td>
        <td>
          <?= $usuario->getPuntuacion() ?>
        </td>
      </tr>
    </table>

    <?php
      }
    ?>

  </body>
</html>
