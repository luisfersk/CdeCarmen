$(document).ready(function () {
    $("#formularioRegistroNatural").bind("submit", function () {
        var btnEnviar = $("#btnEnviarNatural");
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            beforeSend: function () {
                btnEnviar.val("Enviando");
                btnEnviar.attr("disabled", "disabled");
            },
            complete: function (data) {
                btnEnviar.val("Registrar convenio");
                btnEnviar.removeAttr("disabled");
            },
            success: function (data) {
                $(".respuestaRegistroPersonaNatural").html(data);
            },
            error: function (data) {
                alert("Problemas al tratar de enviar el formulario");
            }
        });
        return false;
    });
});