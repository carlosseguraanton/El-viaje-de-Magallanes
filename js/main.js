$(document).ready(main);

function main() {

	
	for (let index = 1; index <= 5; index++) {
		
		$( ".barco" + [index] ).click(function () {

			var divPregunta = $( "<div>" );
			
			divPregunta.addClass( "pregunta" + [index] );
			
			divPregunta.html( "Pregunta " + [index] + "<br><br>" + $( this ).text() );

			var divRespuestas = $( ".respuesta" + [index] );

			divPregunta.append( divRespuestas );
			
			$( "body" ).append( divPregunta );
			
		});
		
	}
	
}


















































// var br = $( "<br>" );



//$("*").fadeIn("slow");





// $(".barco" + [index]).on("click", function(event) {
	// divPregunta[index].fadeIn("slow");
	// divPregunta.addClass("pregunta" + [index]).fadeIn("slow");
// });

// Queremos que el divPregunta aparezca con efecto .fadeIn("slow");
//$("body").append(divPregunta).fadeIn("slow");