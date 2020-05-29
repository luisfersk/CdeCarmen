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
      <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
      <link href="css/bootstrap.css" rel="stylesheet"/>
      <link href="css/jquery.dataTables.min.css" rel="stylesheet"/>
      <script src="js/datatables.min.js">
      </script>
      <script src="js/jquery.min.js">
      </script>
      <script src="js/popper.min.js">
      </script>
      <script src="js/bootstrap.min.js">
      </script>
      <script type="text/javascript">
      function cambiarPagina(pagina){
        var parametros = {
          "pagina" : pagina,
        };
        $.ajax({
          data:  parametros,
          url:   'php/cambioPagina.php',
          type:  'post',
          beforeSend: function () {
            $(resultado).html("Procesando, espere por favor...");
          },
          success:  function (response) {
            $(resultado).html(response);
          }
        });
      }
      function registrarProveedor(result,formulario){
        $.ajax({
          data: formulario.serialize(),
          url:   'php/registrarProveedor.php',
          type:  'post',
          beforeSend: function () {
            result.html("Procesando, espere por favor...");
          },
          success:  function (response) {
            result.html(response);
          }
        });
      }   
      </script>
    </meta>
  </head>
  <body>
    <?php require 'html/head.html';?>
    <div id="resultado">
    </div>
  </body>
</html>