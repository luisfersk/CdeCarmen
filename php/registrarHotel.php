<?php

require_once '../logica/bll.php';
require_once '../modulo/entity.php';
require_once 'coneccion.php';

$Hotel = new Hotel();

$Hotel->nombre = $_POST['nombre'];
$Hotel->email = $_POST['email'];
$Hotel->celular = $_POST['celular'];
$Hotel->disponibilidad = $_POST['disponibilidad'];
$Hotel->lugar = $_POST['lugar'];
$Hotel->fecha = $_POST['fecha'];

$conn = conectarse();

$logicHotel = new LogicHotel($conn);

$logicHotel->GurdarHotel($Hotel);

$conn->close();