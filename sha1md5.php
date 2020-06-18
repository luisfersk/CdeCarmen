<?php
$password = sha1(md5('cdecarmen'));
$correo = 'cdecarmen@gmail.com';
$sql = "SELECT identificacion, nombre_completo, correo FROM `usuario` Wher";
$user = "root";
$pass = "";
$host = "127.0.0.1";
$ddbb = "mid_db";
$conn = new mysqli($host, $user, $pass, $ddbb);
$query= mysqli_query($conn, $sql);

$rows = mysqli_num_rows($query);

if ($rows === 0) {
  echo '
            <div class="alert alert-success" role="alert">
                error.
            </div>';
} else {
  session_start();
  while ($resultados = mysqli_fetch_array($query)) {
    $_SESSION["identificacion"] = $resultados['identificacion'];
    $_SESSION["nombreCompleto"] = $resultados['nombre_completo'];
    $_SESSION["correo"] = $resultados['correo'];
    
  }
}

echo sha1(md5('cdecarmen'));
