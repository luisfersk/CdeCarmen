<?php
/**
 *
 */
class EmpresaController
{
  public $conn;

  public function __construct(mysqli $conn)
  {
    $this->conn = $conn;
  }

  public function addEmpresa(Empresa $empresa)
  {
    $sql = "INSERT INTO empresa (codigo,nombre,razonSocial,servicio,lugar,fecha) VALUES ('$empresa->codigoConvenio','$empresa->nombreEmpresa','$empresa->razonSocial','$empresa->servicio','$empresa->lugar','$empresa->fecha')";
    return mysqli_query($this->conn, $sql);
  }
}
