$(document).ready( function () {
  $('#example').DataTable();
} ); 
$(document).ready(function() {
  $("#resultadoBusqueda").html('<pre>   El campo esta vacio....</pre>');
});
function buscar() {
  var textoBusqueda = $("input#busqueda").val();
  if (textoBusqueda != "") {
    $.post("./php/consultarHotel.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
      $("#resultadoBusqueda").html(mensaje);
    }); 
  } else { 
    $("#resultadoBusqueda").html('<pre>   El campo esta vacio....</pre>');
  };
};  