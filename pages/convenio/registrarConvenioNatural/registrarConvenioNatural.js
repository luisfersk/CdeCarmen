$(document).ready(function () {
	$("#formularioRegistroNatural").bind("submit", function () {
		$.ajax({
			type: $(this).attr("method"),
			url: $(this).attr("action"),
			data: $(this).serialize(),
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