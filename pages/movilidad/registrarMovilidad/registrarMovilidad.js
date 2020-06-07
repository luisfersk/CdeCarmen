$(document).ready(function () {
  $("#formularioRegistroMovilidad").bind("submit",function(){
    var btnEnviar = $("#btnEnviarMovildad");
    $.ajax({
      type: $(this).attr("method"),
      url: $(this).attr("action"),
      data:$(this).serialize(),
      beforeSend: function(){
        btnEnviar.val("Enviando");
        btnEnviar.attr("disabled","disabled");
      },
      complete:function(data){
        btnEnviar.val("Registrar empresa");
        btnEnviar.removeAttr("disabled");
      },
      success: function(data){
        $(".respuestaRegistroMovilidad").html(data);
      },
      error: function(data){
        alert("Problemas al tratar de enviar el formulario");
      }
    });
    return false;
  });
});