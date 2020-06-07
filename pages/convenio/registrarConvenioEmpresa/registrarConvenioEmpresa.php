<?php

require_once '../convenio.php';

$Empresa = new Empresa();

$Empresa->codigoConvenio = $_POST['codigo'];
$Empresa->nombreEmpresa = $_POST['nombreEmpresa'];
$Empresa->razonSocial = $_POST['razonSocial'];
$Empresa->servicio = $_POST['nombreServicio'];
$Empresa->lugar = $_POST['lugar'];
$Empresa->fecha = $_POST['fecha'];

$conn = conectarse();

$empresaService = new EmpresaService($conn);

$empresaService->addEmpresa($Empresa);
