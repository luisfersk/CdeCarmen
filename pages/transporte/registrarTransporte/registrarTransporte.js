$(document).ready(function () {
  $("#formularioRegistroTransporte").bind("submit",function(){
      var btnEnviar = $("#btnEnviarTransporte");
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
              $(".respuestaRegistroTransporte").html(data);
          },
          error: function(data){
              alert("Problemas al tratar de enviar el formulario");
          }
      });
      return false;
  });
});