<?php

require_once '../proveedor.php';

$consultaBusqueda = $_POST['valorBusqueda'];

$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

$mensaje = "";

$conexion = conectarse();

if (isset($consultaBusqueda)) {

	$consulta = mysqli_query($conexion, "SELECT * FROM proveedor WHERE identificacion  LIKE '%$consultaBusqueda%'");

	$filas = mysqli_num_rows($consulta);

	if ($filas === 0) {
		$mensaje = "<p>No hay ningún usuario con ese nombre y/o apellido</p>";
	} else {

		while ($resultados = mysqli_fetch_array($consulta)) {
			$identificacion = $resultados['identificacion'];
			$nombre = $resultados['nombre'] + $resultados['segundoNombre'] + $resultados['primerApellido'] + $resultados['segundoApellido'];
			$tipoIdentificacion  = $resultados['tipoIdentificacion'];
			$disponibilidad  = $resultados['disponibilidad'];
			$cantidad  = $resultados['cantidad'];

			$mensaje .= '
      <tr>
        <th>' . $identificacion . '</th>
        <th>' . $nombre . '</th>
        <th>' . $tipoIdentificacion . '</th>
        <th>' . $disponibilidad . '</th>
        <th>' . $cantidad . '</th>
      </tr>';
		};
	};
};

echo $mensaje;
