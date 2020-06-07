<?php
require_once '../models/entity.php';

class MovilidadController
{
  public $conn;

  public function __construct(mysqli $conn)
  {
    $this->conn = $conn;
  }

  public function addMovilidad(Movilidad $movilidad)
  {
    $sql = "INSERT INTO movilidad(fecha, destiono, mañanas_reservacion, tardes_reservacion, noche_reservacion" .
      ", tipo_acomodacion, tipo_hotel, transporte, acompañamiento_guia, organizacion_agenda, seguro_viaje, visitas_tecnicas" .
      ", costo_entradas, plan_pagos, desayunos, observaciones, almuerzos, cenas, refrigerios) VALUES ('$movilidad->fecha'" .
      ", '$movilidad->destino','$movilidad->reservacion->mañanas','$movilidad->reservacion->tardes','$movilidad->reservacion->noches'" .
      ", '$movilidad->tipoAcomodacion','$movilidad->tipHotel','$movilidad->transporte','$movilidad->acompañamientoGuia'" .
      ", '$movilidad->organizacionAgenda','$movilidad->seguroViaje','$movilidad->visitasTecnicas','$movilidad->incluirCostoEntradas'" .
      ", '$movilidad->planPagos','$movilidad->planAlimentacion->numberDesayuno','observaciones','$movilidad->planAlimentacion->numberAlmuerzos'" .
      ", '$movilidad->planAlimentacion->numberCena','$movilidad->planALimentacin->numberRefrigerios')";

    return mysqli_query($this->conn, $sql);
  }
}
