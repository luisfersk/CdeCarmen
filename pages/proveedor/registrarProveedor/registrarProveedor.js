$(document).ready(function () {
    $("#formularioRegistroProveedor").bind("submit",function(){
        var btnEnviar = $("#btnEnviarProveedor");
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data:$(this).serialize(),
            beforeSend: function(){
                btnEnviar.val("Enviando");
                btnEnviar.attr("disabled","disabled");
            },
            complete:function(data){
                btnEnviar.val("Registrar proveedor");
                btnEnviar.removeAttr("disabled");
            },
            success: function(data){
                $(".respuesta").html(data);
            },
            error: function(data){
                alert("Problemas al tratar de enviar el formulario");
            }
        });
        return false;
    });
});