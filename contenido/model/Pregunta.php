<?php

require_once 'conexionBD.php';

class Pregunta {
  private $codigo;
  private $pregunta;
  private $respuestac;
  private $respuesta1;
  private $respuesta2;
  private $respuesta3;

  function __construct($codigo, $pregunta, $respuestac, $respuesta1, $respuesta2, $respuesta3) {
    $this->codigo = $codigo;
    $this->pregunta = $pregunta;
    $this->respuestac = $respuestac;
    $this->respuesta1 = $respuesta1;
    $this->respuesta2 = $respuesta2;
    $this->respuesta3 = $respuesta3;
  }

  public function getCodigo() {
    return $this->codigo;
  }

  public function getPregunta() {
    return $this->pregunta;
  }

  public function getRespuestac() {
    return $this->respuestac;
  }

  public function getRespuesta1() {
    return $this->respuesta1;
  }

  public function getRespuesta2() {
    return $this->respuesta2;
  }

  public function getRespuesta3() {
    return $this->respuesta3;
  }

  public static function getPreguntaByCod($codigo) {
    $conexion = conexionBD::connect();

    $sqlSelect = "SELECT codigo, pregunta, respuestac, respuesta1, respuesta2, respuesta3 FROM preguntas WHERE codigo = \"" . $codigo . "\"";
    
    $consulta = $conexion->query($sqlSelect);
    
    $registro = $consulta->fetchObject();
    
    $pregunta = new Pregunta($registro->codigo, $registro->pregunta, $registro->respuestac, $registro->respuesta1, $registro->respuesta2, $registro->respuesta3);
    
    return $pregunta;
  }

  public static function getPreguntas() {
    $conexion = conexionBD::connect();

    $sqlSelect = "SELECT codigo, pregunta, respuestac, respuesta1, respuesta2, respuesta3 FROM preguntas";
    
    $consulta = $conexion->query($sqlSelect);

    $arrayPreguntas = [];

    while ($registro = $consulta->fetchObject()) {
      $arrayPreguntas[] = new Pregunta($registro->codigo, $registro->pregunta, $registro->respuestac, $registro->respuesta1, $registro->respuesta2, $registro->respuesta3);
    }
    
    return $arrayPreguntas;
  }

}
