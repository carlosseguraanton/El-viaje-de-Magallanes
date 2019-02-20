CREATE DATABASE VIAJE;
USE VIAJE;

DROP TABLE IF EXISTS preguntas;

CREATE TABLE preguntas (
  codigo INT NOT NULL,
  pregunta varchar(150) DEFAULT NULL,
  respuestac varchar(50) DEFAULT NULL,
  respuesta1 varchar(50) DEFAULT NULL,
  respuesta2 varchar(50) DEFAULT NULL,
  respuesta3 varchar(50) DEFAULT NULL,
  PRIMARY KEY (codigo)
);

LOCK TABLES preguntas WRITE;
INSERT INTO preguntas VALUES (1, 'Archipiélago descubierto en el oceano pacifico', 'Islas marianas', 'Islas Reunión', 'Guam', 'Puerto Rico');
INSERT INTO preguntas VALUES (2, 'Capital de España durante el reinado de Carlos I', 'Valladolid', 'Toledo', 'Madrid', 'Salamanca');
INSERT INTO preguntas VALUES (3, 'Capitán que relevó a Fernando de Magallanes tras su muerte', 'Juan Sebatián Elcano', 'Juan de Cartagena', 'Gaspar de Quesada', 'Juan Serrano');
INSERT INTO preguntas VALUES (4, 'Ciudad donde se reunió con el rey de españa', 'Valladolid', 'Toledo', 'Sevilla', 'Madrid');
INSERT INTO preguntas VALUES (5, 'Nombre de la nave capitaneada por Fernando de Magallanes', 'Trinidad', 'Victoria', 'Santiago', 'Concepción');
INSERT INTO preguntas VALUES (6, 'Nombre de la nave que logro completar la expedición', 'Victoria', 'Santiago', 'Trinidad', 'Concepción');
INSERT INTO preguntas VALUES (7, 'Nombre de las islas objetivo de la expedición', 'Islas Molucas', 'Islas Marianas', 'Japón', 'China');
INSERT INTO preguntas VALUES (8, 'Nombre del buque escuela de la armada española', 'Juan Sebatián Elcano', 'Francisco Pizarro', 'Álvaro de Bazán', 'Cristóbal Colón');
INSERT INTO preguntas VALUES (9, 'Número de naves que partieron desde Sanlúcar de Barrameda', '5', '4', '6', '8');
INSERT INTO preguntas VALUES (10, 'Número de tripulantes de la expedición', '239', '150', '400', '500');
INSERT INTO preguntas VALUES (11, 'Número de tripulantes que sobrevivieron a la expedición', '18', '50', '90', '30');
INSERT INTO preguntas VALUES (12, 'País donde murió Fernando de Magallanes', 'Filipinas', 'Brasil', 'Chile', 'España');
INSERT INTO preguntas VALUES (13, 'País donde se encuentra el estrecho de magallanes', 'Chile', 'Argentina', 'Uruguay', 'Brasil');
INSERT INTO preguntas VALUES (14, 'Planeta donde existe un cráter en honor a Fernando de Magallanes', 'Marte', 'Luna', 'Júpiter', 'Venus');
INSERT INTO preguntas VALUES (15, 'Primera escala de la expedición de Magallanes', 'Islas Canarias', 'Islas Azores', 'Ceuta', 'Melilla');
INSERT INTO preguntas VALUES (16, 'Propósito de la expedición de Magallanes', 'Abrir ruta comercial', 'Descubrir territorios', 'Combatir la piratería', 'Expedición botánica');
INSERT INTO preguntas VALUES (17, 'Rey de España durante la expedición de Magallanes', 'Carlos I', 'Alfonso X', 'Carlos II', 'Felipe II');
INSERT INTO preguntas VALUES (18, 'Segunda escala de la expedición de Magallanes', 'Brasil', 'Uruguay', 'Cabo Verde', 'Argentina');
INSERT INTO preguntas VALUES (19, '¿Cuál es el país de nacimiento de Fernando de Magallanes?', 'portugal', 'españa', 'italia', 'holanda');
INSERT INTO preguntas VALUES (20, '¿Cuál fue la duración de la expedición de Magallanes?', '3', '5', '8', '1');

DROP TABLE IF EXISTS usuario;

CREATE TABLE usuario (
  codigo int(2) NOT NULL AUTO_INCREMENT,
  nombre varchar(20) NOT NULL,
  curso varchar(10) NOT NULL,
  puntuacion int(4) DEFAULT 0,
  PRIMARY KEY (codigo,nombre)
);
