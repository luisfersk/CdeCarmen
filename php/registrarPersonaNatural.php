<?php

require_once '../logica/bll.php';
require_once '../modulo/entity.php';
require_once 'coneccion.php';

$PersonaNatural = new PersonaNatural();

$PersonaNatural->codigo = $_POST['codigo'];
$PersonaNatural->identificacion = $_POST['identificacion'];
$PersonaNatural->nombre = $_POST['nombre'];
$PersonaNatural->universidad = $_POST['nombreUniversidad'];
$PersonaNatural->tipoIdentificacion = $_POST['tipoIdentificacion'];
$PersonaNatural->email = $_POST['email'];
$PersonaNatural->telefono = $_POST['telefono'];

$conn = conectarse();

$logicPersonaNatural = new LogicPersonaNatural($conn);

$logicPersonaNatural->GurdarPersonaNatural($PersonaNatural);

