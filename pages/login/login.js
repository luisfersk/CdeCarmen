$(document).ready(function () {
  $("#formularioLogin").bind("submit", function () {
    $.ajax({
      type: $(this).attr("method"),
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success: function (data) {
        $(".respuesta").html(data);
      },
      error: function (data) {
        alert("Problemas al tratar de enviar el formulario");
      }
    });
    return false;
  });
});