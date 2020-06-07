<?php

class MovilidadService
{
  public $movilidadController;

  public function __construct(mysqli $conn)
  {
    $this->movilidadController = new MovilidadController($conn);
  }

  public function addMovilidad(Movilidad $movilidad)
  {
    if ($this->movilidadController->addMovilidad($movilidad) === true) {
      echo '
      <div class="alert alert-success" role="alert">
          Se ha guardado correctamente.
      </div>';
    } else {
      echo '
      <div class="alert alert-danger" role="alert">' .
        $this->movilidadController->conn->error . '
      </div>';
    }
  }
}
