<?php

require_once '../convenio.php';

$personaNatural = new personaNatural();

$personaNatural->codigo = $_POST['codigo'];
$personaNatural->identificacion = $_POST['identificacion'];
$personaNatural->nombre = $_POST['nombre'];
$personaNatural->universidad = $_POST['nombreUniversidad'];
$personaNatural->tipoIdentificacion = $_POST['tipoIdentificacion'];
$personaNatural->email = $_POST['email'];
$personaNatural->telefono = $_POST['telefono'];

$conn = conectarse();

$personaNaturalService = new PersonaNaturalService($conn);

$personaNaturalService->addPersonaNatural($PersonaNatural);

