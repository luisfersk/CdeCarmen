<?php

require_once '../hotel.php';

$hotel = new Hotel();

$hotel->nombre = $_POST['nombre'];
$hotel->email = $_POST['email'];
$hotel->celular = $_POST['celular'];
$hotel->disponibilidad = $_POST['disponibilidad'];
$hotel->lugar = $_POST['lugar'];
$hotel->fecha = $_POST['fecha'];

$conn = conectarse();

$hotelService = new HotelService($conn);

$hotelService->addHotel($hotel);

$conn->close();