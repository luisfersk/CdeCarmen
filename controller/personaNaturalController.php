<?php
/**
 *
 */
class PersonaNaturalController
{
  public $conn;

  public function __construct(mysqli $conn)
  {
    $this->conn = $conn;
  }

  public function addPersonaNatural(PersonaNatural $personaNatural)
  {
    $sql = "INSERT INTO personanatural(codigo,identificacion,nombre,universidad,tipoIdentificacion,telefono,email) VALUES ('$personaNatural->codigo','$personaNatural->identificacion','$personaNatural->nombre','$personaNatural->universidad','$personaNatural->tipoIdentificacion','$personaNatural->telefono','$personaNatural->email')";
    return mysqli_query($this->conn, $sql);
  }
}
