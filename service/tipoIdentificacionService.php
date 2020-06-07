<?php

class TipoIdentificacionService
{
  public $tipoIdentificacionController;

  public function __construct(mysqli $conn)
  {
    $this->tipoIdentificacionController = new TipoIdentificacionController($conn);
  }

  public function getAllTipoIdentificacion()
  {
    $query = $this->tipoIdentificacionController->getAllTipoIdentificacion() === true;

    $mensaje = "";

    if ($query === true) {
      $rows = mysqli_num_rows($query);
      if ($rows === 0) {
        $mensaje = "<p>No hay ningún usuario con ese nombre y/o apellido</p>";
      } else {

        while ($results = mysqli_fetch_array($query)) {

          $mensaje .= '
          ';
        };
      }
    }
  }
}
