$(document).ready(main);

function main() {

	//$("*").fadeIn("slow");

	for (let index = 1; index <= 5; index++) {

		$(".barco" + [index]).click(function () {
			var divPregunta = $("<div>");

			divPregunta.addClass("pregunta" + [index]);

			divPregunta.text("Pregunta " + [index]);

			$("body").append(divPregunta);
			
			// Queremos que el divPregunta aparezca con efecto .fadeIn("slow");
			//$("body").append(divPregunta).fadeIn("slow");
		});

	}

	//--------------------------------- Se enviarán los datos por Ajax ---------------------------------//
	$("button").click(function () {

		var nombre = $("#nombre").val();
		var edad = $("#edad").val();
		var tipo = $("#tipo").val();

		$.post("texto.php", { nombre: nombre, edad: edad, tipo: tipo }, function (respuesta) {

			for (var i = 0; i < respuesta.length; i++) {

				var nombre_equipo = $("<p>");
				nombre_equipo.text(respuesta[i]['nombre_equipo']);

				$("#div").append(nombre_equipo);

				for (var j = 0; j < respuesta[i]['jugadores'].length; j++) {

					var jugadores = $("<p>");
					jugadores.text(respuesta[i]['jugadores'][j]);

					$("#div").append(jugadores);

				}

			}

		}, "json");

	});
	//------------------------------------------------------------------------------------------//

}

