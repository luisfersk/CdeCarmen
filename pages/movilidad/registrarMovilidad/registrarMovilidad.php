<?php

require_once '../movilidad.php';

$Movilidad = new Movilidad();

$Movilidad->fecha = $_POST['fecha_movilidad'];
$Movildiad->destino = $_POST['destino_movilidad'];
$Movilidad->tipoAcomodacion = $_POST['acomodacion_movilidad'];
$Movilidad->tipoHotel = $_POST['tipo_hotel_movilidad'];
$Movilidad->transporte = $_POST['transporte_movilidad'];
$Movilidad->acompañamientoGuia = $_POST['acompañamiento_guia_movilidad'];
$Movilidad->organizacionAgenda = $_POST['organizar_agenda_movilidad'];
$Movilidad->seguroViaje = $_POST['seguro_viaje_movilidad'];
$Movilida->visitasTecnicas = $_POST['visita_tecnica_movilidad'];
$Movilidad->incluirCostoEntradas = $_POST['incluir_costo_entrada_movilidad'];
$Movilidad->planPagos = $_POST['plan_pagos_movilidad'];
$Movildiad->observaciones = $_POST['observaciones_movilidad'];

$Movilidad->planAlimentacion->numberDesayuno = $_POST['desayunos_movilidad'];
$Movilidad->planAlimentacion->numberAlmuerzo = $_POST['almuerzos_movilidad'];
$Movilidad->planAlimentacion->numberCena = $_POST['cenas_movilidad'];
$Movilidad->planAlimentacion->numberRefrigerio = $_POST['refrigerios_movilidad'];

$Movildiad->reservacion->mañanas = $_POST['mañanas_movilidad'];
$Movildiad->reservacion->tardes = $_POST['tardes_movilidad'];
$Movilidad->reservacion->noches = $_POST['noches_movilidad'];

$conn = conectarse();

$movilidadService = new MovilidadService($conn);

$movilidadService->addMovilidad($Movilidad);
