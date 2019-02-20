<?php

abstract class conexionBD {

	private static $server = 'localhost';
	private static $db = 'viaje';
	private static $user = 'carlos';
	private static $password = 'carlos';
	private static $port = 3306;

	public static function connect() {
		try {
			$connection = new PDO("mysql:host=" . self::$server . ";dbname=" . self::$db.";port=" . self::$port . ";charset=utf8", self::$user, self::$password);
		} catch (PDOException $e) {
			echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
            
			die ("Error: " . $e->getMessage());
		}
        
		return $connection;
	}
    
}

?>
