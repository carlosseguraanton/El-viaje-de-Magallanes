DROP TABLE IF EXISTS 'preguntas';
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE 'preguntas' (
  'pregunta' varchar(150) NOT NULL,
  'respuestac' varchar(50) DEFAULT NULL,
  'respuesta1' varchar(50) DEFAULT NULL,
  'respuesta2' varchar(50) DEFAULT NULL,
  'respuesta3' varchar(50) DEFAULT NULL,
  PRIMARY KEY ('pregunta')
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table 'preguntas'
--

LOCK TABLES 'preguntas' WRITE;
/*!40000 ALTER TABLE 'preguntas' DISABLE KEYS */;
INSERT INTO 'preguntas' VALUES ('Archipiélago descubierto en el oceano pacifico','Islas marianas','Islas Reunión','Guam','Puerto Rico'),('Capital de España durante el reinado de Carlos I','Valladolid','Toledo','Madrid','Salamanca'),('Capitán que relevó a Fernando de Magallanes tras su muerte','Juan Sebatián Elcano','Juan de Cartagena','Gaspar de Quesada','Juan Serrano'),('Ciudad donde se reunió con el rey de españa','Valladolid','Toledo','Sevilla','Madrid'),('Nombre de la nave capitaneada por Fernando de Magallanes','Trinidad','Victoria','Santiago','Concepción'),('Nombre de la nave que logro completar la expedición','Victoria','Santiago','Trinidad','Concepción'),('Nombre de las islas objetivo de la expedición','Islas Molucas','Islas Marianas','Japón','China'),('Nombre del buque escuela de la armada española','Juan Sebatián Elcano','Francisco Pizarro','Álvaro de Bazán','Cristóbal Colón'),('Número de naves que partieron desde Sanlúcar de Barrameda','5','4','6','8'),('Número de tripulantes de la expedición','239','150','400','500'),('Número de tripulantes que sobrevivieron a la expedición','18','50','90','30'),('País donde murió Fernando de Magallanes','Filipinas','Brasil','Chile','España'),('País donde se encuentra el estrecho de magallanes','Chile','Argentina','Uruguay','Brasil'),('Planeta donde existe un cráter en honor a Fernando de Magallanes','Marte','Luna','Júpiter','Venus'),('Primera escala de la expedición de Magallanes','Islas Canarias','Islas Azores','Ceuta','Melilla'),('Propósito de la expedición de Magallanes','Abrir ruta comercial','Descubrir territorios','Combatir la piratería','Expedición botánica'),('Rey de España durante la expedición de Magallanes','Carlos I','Alfonso X','Carlos II','Felipe II'),('Segunda escala de la expedición de Magallanes','Brasil','Uruguay','Cabo Verde','Argentina'),('¿Cuál es el país de nacimiento de Fernando de Magallanes?','portugal','españa','italia','holanda'),('¿Cuál fue la duración de la expedición de Magallanes?','3','5','8','1');
/*!40000 ALTER TABLE 'preguntas' ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table 'usuario'
--

DROP TABLE IF EXISTS 'usuario';
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE 'usuario' (
  'codigo' int(2) NOT NULL AUTO_INCREMENT,
  'nombre' varchar(20) NOT NULL,
  'curso' varchar(10) NOT NULL,
  'puntuacion' int(4) DEFAULT NULL,
  PRIMARY KEY ('codigo','nombre')
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table 'usuario'
--

LOCK TABLES 'usuario' WRITE;
/*!40000 ALTER TABLE 'usuario' DISABLE KEYS */;
INSERT INTO 'usuario' VALUES ('carlos','2DAW',500), ('pedro','2DAW',500), ('conchi','2DAW',500);
