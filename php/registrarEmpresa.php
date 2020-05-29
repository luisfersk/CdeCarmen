<?php

require_once '../logica/bll.php';
require_once '../modulo/entity.php';
require_once 'coneccion.php';

$Empresa = new Empresa();

$Empresa->codigoConvenio = $_POST['codigo'];
$Empresa->nombreEmpresa = $_POST['nombreEmpresa'];
$Empresa->razonSocial = $_POST['razonSocial'];
$Empresa->servicio = $_POST['nombreServicio'];
$Empresa->lugar = $_POST['lugar'];
$Empresa->fecha = $_POST['fecha'];

$conn = conectarse();

$logicEmpresa = new LogicEmpresa($conn);

$logicEmpresa->GurdarEmpresa($Empresa);

