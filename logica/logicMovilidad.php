<?php
require_once '../datos/dal.php';

class LogicMovilidad
{
  public $dataMovilidad;

  public function __construct(mysqli $conn) {
    $this->dataMovilidad = new DataMovilidad($conn);
  }

  public function GuardarMovilidad(Movilidad $movilidad)
  {
    if($this->dataMovilidad->GuardarMovilidad($movilidad) === true){
      echo'
      <div class="alert alert-success" role="alert">
          Se ha guardado correctamente.
      </div>';
    } else {
      echo '
      <div class="alert alert-danger" role="alert">'.
      $this->dataMovilidad->conn->error.'
      </div>';
    }
  }
}
