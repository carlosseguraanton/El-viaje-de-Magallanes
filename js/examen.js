$(document).ready(function() {

	$.post("texto.php", function(respuesta) {

		var div_del_documento = $("#partidosAjax");

		for (var i = 0; i < respuesta.length; i++) {

			// Creamos tantos divs de equipos como se necesiten dentro del bucle for
			var divs_equipos = $("<div>");
			
			// Creamos el div del escudo1
			var div_escudo1 = $("<div>");
			div_escudo1.addClass("escudo");

			// Creamos la img1
			var img1 = $("<img>");
			// Le damos el atributo 'src' a la img1
			img1.attr("src", respuesta[i]['url_escudo_eq1']);
			// Le damos el atributo 'alt' a la img1
			img1.attr("alt", respuesta[i]['nombre_eq1']);
			div_escudo1.append(img1);
			divs_equipos.append(div_escudo1);

			// Creamos el div del equipo1
			var div_equipo1 = $("<div>");
			div_equipo1.addClass("equipo");
			div_equipo1.text(respuesta['nombre_eq1']);
			divs_equipos.append(div_equipo1);

			// Creamos el div del resultado del equipo1
			var div_resultado_equipo1 = $("<div>");
			div_resultado_equipo1.addClass("resultado");
			div_resultado_equipo1.text(respuesta[i]['resultado_eq1']);
			divs_equipos.append(div_resultado_equipo1);

			// Creamos el div del resultado del equipo2
			var div_resultado_equipo2 = $("<div>");
			div_resultado_equipo2.addClass("resultado");
			div_resultado_equipo2.text(respuesta[i]['resultado_eq2']);
			divs_equipos.append(div_resultado_equipo2);

			// Creamos el div del equipo2
			var div_equipo2 = $("<div>");
			div_equipo2.addClass("equipo");
			div_equipo2.text(respuesta[i]['nombre_eq2']);
			divs_equipos.append(div_equipo2);

			// Creamos el div del escudo2
			var div_escudo2 = $("<div>");;
			div_escudo2.addClass("escudo")

			// Creamos la img2
			var img2 = $("<img>");
			// Le damos el atributo 'src' a la img2
			img2.attr("src", respuesta[i]['url_escudo_eq2']);
			// Le damos el atributo 'alt' a la img2
			img2.attr("alt", respuesta[i]['nombre_eq2']);
			div_escudo2.append(img2);
			divs_equipos.append(div_escudo2);

			// Creamos el ul de los divs_equipos
			var ul = $("<ul>");
			// Creamos el li1 del ul
			var li1 = $("<li>");
			// Creamos el enlace del li1
			var enlaceLi1 = $("<a>");
			// Creamos el texto del enlace del li1
			enlaceLi1.text("Crónica");
			// Añadimos el enlaceLi1 al li1
			li1.append(enlaceLi1);
			// Añadimos el li1 al ul
			ul.append(li1);
			// Creamos el li2 del ul
			var li2 = $("<li>");
			// Creamos el enlace del li2
			var enlaceLi2 = $("<a>");
			// Creamos el texto del enlace del li2
			enlaceLi2.text("Así lo vivimos");
			// Añadimos el enlaceLi2 al li2
			li2.append(enlaceLi2);
			// Añadimos li2 al ul
			ul.append(li2);
			// Añadimos el ul a los divs de equipos
			divs_equipos.append(ul);

			// Añadimos la clase equipos a los divs
			$(divs_equipos).addClass("equipos");

			// Añadimos los divs al div_del_documento
			div_del_documento.append(divs_equipos);

		}

	}, "json");

});	