<?php

require_once '../proveedor.php';

$Proveedor = new Proveedor();

$Proveedor->primerNombre = $_POST['primerNombre'];
$Proveedor->segundoNombre = $_POST['segundoNombre'];
$Proveedor->primerApellido = $_POST['primerApellido'];
$Proveedor->segundoApellido = $_POST['segundoApellido'];
$Proveedor->tipoIdentificacion = $_POST['tipoIdentificacion'];
$Proveedor->identificacion = $_POST['identificacion'];
$Proveedor->disponibilidad = $_POST['disponibilidad'];
$Proveedor->cantidad = $_POST['cantidad'];

$conn = conectarse();

$proveedorService = new ProveedorService($conn);

$proveedorService->addProveedor($Proveedor);
