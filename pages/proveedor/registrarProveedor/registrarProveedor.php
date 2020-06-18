<?php

require_once '../proveedor.php';

$proveedor = new Proveedor();

$database = new Database();

$proveedor->tipoIdentificacion = $_POST['tipoIdentificacion'];
$proveedor->identificacion = $_POST['identificacion'];
$proveedor->nombre = $_POST['nombre'];
$proveedor->telefono = $_POST['telefono'];
$proveedor->lugar = $_POST['lugarRecidencia'];
$proveedor->direccion = $_POST['direccion'];
$proveedor->nota = $_POST['nota'];

$conn = $database->getCon();

$proveedorService = new ProveedorService($conn);

$proveedorService->addProveedor($proveedor);
