<?php

require_once 'conexionBD.php';

class Usuario {

  private $nombre;
  private $curso;
  private $puntuacion = 500;

  function __construct($nombre, $curso) {
    $this->nombre = $nombre;
    $this->curso = $curso;
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function getCurso() {
    return $this->curso;
  }

  public function getPuntuacion() {
    return $this->puntuacion;
  }

  public function insertUsuario() {
    $conexion = conexionBD::connect();

    $sqlInsert = "INSERT INTO usuario (nombre, curso, puntuacion) VALUES (\"" . $this->nombre . "\", \"" . $this->curso . "\", \"" . $this->puntuacion . "\")";
    
    $conexion->exec($sqlInsert);
  }

  /*public function updatePuntuacionUsuario($puntuacion) {
    $conexion = conexionBD::connect();

    $sqlUpdate = "UPDATE usuario SET puntuacion = $puntuacion WHERE codigo = \"" . $this->codigo . "\"";

    $conexion->exec($sqlUpdate);
  }*/

  public static function getUsuario($codigo) {
    $conexion = conexionBD::connect();

    $sqlSelect = "SELECT codigo, nombre, curso, puntuacion FROM usuario WHERE codigo = \"" . $codigo . "\"";
    
    $consulta = $conexion->query($sqlSelect);
    
    $registro = $consulta->fetchObject();
    
    $usuario = new Usuario($registro->codigo, $registro->nombre, $registro->curso, $registro->puntuacion);
    
    return $usuario;
  }

  public static function getUsuarios() {
    $conexion = conexionBD::connect();

    $sqlSelect = "SELECT codigo, nombre, curso, puntuacion FROM usuario order by puntuacion";
    
    $consulta = $conexion->query($sqlSelect);

    $arrayUsuarios = [];

    while ($registro = $consulta->fetchObject()) {
      $arrayUsuarios[] = new Usuario($registro->codigo, $registro->nombre, $registro->curso, $registro->puntuacion);
    }
    
    return $arrayUsuarios;
  }

}
