<?php

class Movilidad
{
  public $codigo;
  public $fecha;
  public $destino;
  public Reservacion $reservacion;
  public $tipoAcomodacion;
  public $tipoHotel;
  public $transporte;
  public PlanAlimentacion $planAlimentacion;
  public $acompañamientoGuia;
  public $organizacionAgenda;
  public $seguroViaje;
  public $visitasTecnicas;
  public $incluirCostoEntradas;
  public $planPagos;
  public $observaciones;

  public function __construct() { }

}

class PlanAlimentacion
{
  public $numberDesayuno;
  public $numberAlmuerzo;
  public $numberCena;
  public $numberRefrigerio;

  public function __construct() { }
}

class Reservacion
{
  public $mañanas;
  public $tardes;
  public $noches;
}
