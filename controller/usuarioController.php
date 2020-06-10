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
    $sql = "SELECT identificacion, nombreCompleto, correo FROM usuario WHEN correo='$correo' AND password='$password'";
    
    return mysqli_query($this->conn, $sql);
  }

  public function getTipo($identificacion)
  {
    $sql ="SELECT tipo FROM usuario WHERE identificacion='$identificacion'";

    return mysqli_query($this->conn, $sql);
  }
}
