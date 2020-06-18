<?php

class tipoIdentificacionController 
{
  public static $conn;

  public function __construct(mysqli $conn) {
    self::$conn = $conn;
  }

  public function getAllTipoIdentificacion()
  {
    $sql = "SELECT (*)FROM tipo_identificacion";
    return mysqli_query(self::$conn, $sql);
  }
}
