<?php

require_once 'conexionDB.php';

class Usuario {

  private $codigo;
  private $nombre;
  private $curso;
  private $puntuacion;

  function __construct($codigo, $nombre, $curso, $puntuacion) {
    $this->codigo = $codigo;
    $this->nombre = $nombre;
    $this->curso = $curso;
    $this->puntuacion = $puntuacion;
  }

  public function getCodigo() {
    return $this->codigo;
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

  public function insert() {
    $conexion = conexionBD::connect();

    $sqlInsert = "INSERT INTO usuario (codigo, nombre, curso, puntuacion) VALUES (\"".$this->codigo."\", \"".$this->nombre."\", \"".$this->curso."\", \"".$this->puntuacion."\")";
    
    $conexion->exec($sqlInsert);
  }

  public function delete() {
    $conexion = conexionBD::connect();

    $sqlDelete = "DELETE FROM usuario WHERE codigo=\"".$this->codigo."\"";

    $conexion->exec($sqlDelete);
  }

  public static function getUuarios() {
    $conexion = conexionBD::connect();

    $sqlSelect = "SELECT codigo, nombre, curso, puntuacion FROM usuario";
    
    $consulta = $conexion->query($sqlSelect);

    $arrayUsuarios = [];

    while ($registro = $consulta->fetchObject()) {
      $arrayUsuarios[] = new Usuario($registro->codigo, $registro->nombre, $registro->curso, $registro->puntuacion);
    }
    
    return $arrayUsuarios;    
  }

  public static function getPlayersById($id) {
    $conexion = conexionBD::connect();

    $sqlSelect = "SELECT codigo, nombre, curso, puntuacion FROM usuario WHERE codigo=\"".$codigo."\"";
    
    $consulta = $conexion->query($sqlSelect);
    
    $registro = $consulta->fetchObject();
    
    $usuario = new Usuario($registro->codigo, $registro->nombre, $registro->curso, $registro->puntuacion);
    
    return $usuario;    
  }

}