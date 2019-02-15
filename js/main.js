$(document).ready(main);

function main() {

	//$("*").fadeIn("slow");

	for (let index = 1; index <= 5; index++) {
		
		$(".barco" + [index]).click(function() {
			var divPregunta = $("<div>");
			
			divPregunta.addClass("pregunta" + [index]);

			divPregunta.text("Pregunta " + [index]);
	
			$("body").append(divPregunta);
		});
		
	}

}