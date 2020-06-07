<?php

class tipoIdentificacionController 
{
  public $conn;

  public function __construct(mysqli $conn) {
    $this->conn = $conn;
  }

  public function getAllTipoIdentificacion()
  {
    $sql = "SELECT (*)FROM tipo_identificacion";
    return mysqli_query($this->conn, $sql);
  }
}
