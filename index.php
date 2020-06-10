<?php
$GLOBALS['opcion_actual'] = 'index';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>
    MID
  </title>
  <meta content="width=device-width, initial-scalable=1.0" name="viewport">
  <link href="css/estilo.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/jquery.dataTables.min.css" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <script src="js/datatables.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="index.js"></script>
  </meta>
</head>

<body>
  <?php require 'pages/inicio/navbar/navbar.html'; ?>
  <div id="resultado">
    <?php require 'pages/inicio/inicio.html'; ?>
  </div>
</body>

</html>