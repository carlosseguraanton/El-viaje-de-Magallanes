$(document).ready(main);

function main() {

	//$("*").fadeIn("slow");

	for (let index = 1; index <= 5; index++) {

		$(".barco" + [index]).click(function () {
			var divPregunta = $("<div>");

			divPregunta.addClass("pregunta" + [index]);

			divPregunta.text("Pregunta " + [index]);

			$("body").append(divPregunta);

			// $(".barco" + [index]).on("click", function(event) {
				// divPregunta[index].fadeIn("slow");
				divPregunta.addClass("pregunta" + [index]).fadeIn("slow");
			// });
			
			// Queremos que el divPregunta aparezca con efecto .fadeIn("slow");
			//$("body").append(divPregunta).fadeIn("slow");
 
		});

	}

}

