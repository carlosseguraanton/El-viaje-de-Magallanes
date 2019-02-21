$( document ).ready( main );

function main() {
	
	for ( let index = 1; index <= 5; index++ ) {
		
		$( ".circulo" + [ index ] ).click( function () {

			var divPregunta = $( "<div>" );
			
			divPregunta.addClass( "pregunta" + [ index ] );
			
			divPregunta.html( "Pregunta " + [ index ] + "<br><br>" + $( this ).contents().filter( "p" ).text() );

			$( this ).contents().filter( "div" ).addClass( "ocultar" );

			var divRespuestas = $( ".respuesta" + [ index ] );

			divPregunta.append( divRespuestas );
			
			$( "body" ).append( divPregunta );
			
		} );
		
	}

	// Cuándo el usuario haga click en el botón de tipo submit se enviará la respuesta seleccionada por Ajax
	$( "input[type='button']" ).click ( function () {

		var respuestaSeleccionada = $( "validar" ).val();

		$.ajax( {

			url		: "juego.php",

			type    : "post",

			data	: { respuestaSeleccionada: respuestaSeleccionada },

			success	: function( data ) {

				console.log( data );

			}

		} );
	
	} );

}















































// var br = $( "<br>" );



//$("*").fadeIn("slow");





// $(".barco" + [index]).on("click", function(event) {
	// divPregunta[index].fadeIn("slow");
	// divPregunta.addClass("pregunta" + [index]).fadeIn("slow");
// });

// Queremos que el divPregunta aparezca con efecto .fadeIn("slow");
//$("body").append(divPregunta).fadeIn("slow");