<?php

require_once '../proveedor.php';

$proveedor = new Proveedor();

$proveedor->tipoIdentificacion = $_POST['tipoIdentificacion'];
$proveedor->identificacion = $_POST['identificacion'];
$proveedor->nombre = $_POST['nombre'];
$proveedor->telefono = $_POST['telefono'];
$proveedor->lugar = $_POST['lugar'];
$proveedor->direccion = $_POST['direccion'];
$proveedor->nota = $_POST['nota'];

$conn = conectarse();

$proveedorService = new ProveedorService($conn);

$proveedorService->addProveedor($proveedor);