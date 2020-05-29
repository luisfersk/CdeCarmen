<?php

require_once '../logica/bll.php';
require_once '../modulo/entity.php';
require_once 'coneccion.php';

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

$logicProveedor = new LogicProveedor($conn);

$logicProveedor->GurdarProveedor($Proveedor);


