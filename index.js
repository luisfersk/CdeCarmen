
function cambiarPagina(pagina) {
  var parametros = {
    "pagina": pagina,
  };
  $.ajax({
    data: parametros,
    url: 'php/cambioPagina.php',
    type: 'post',
    beforeSend: function () {
      $(resultado).html("Procesando, espere por favor...");
    },
    success: function (response) {
      $(resultado).html(response);
    }
  });
}
function registrarProveedor(result, formulario) {
  $.ajax({
    data: formulario.serialize(),
    url: 'php/registrarProveedor.php',
    type: 'post',
    beforeSend: function () {
      result.html("Procesando, espere por favor...");
    },
    success: function (response) {
      result.html(response);
    }
  });
}  