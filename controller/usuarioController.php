<?php

/**
 *
 */
class UsuarioController
{
  public $conn;

  public function __construct(mysqli $conn)
  {
    $this->conn = $conn;
  }

  public function getUsuarioPassword($correo, $password)
  {
    $sql = "SELECT identificacion, nombre_completo, correo FROM usuario WHERE correo='$correo' AND pass='$password'";
    
    return mysqli_query($this->conn, $sql);
  }

  public function getTipo($identificacion)
  {
    $sql ="SELECT kind FROM usuario WHERE identificacion='$identificacion'";

    return mysqli_query($this->conn, $sql);
  }
}
