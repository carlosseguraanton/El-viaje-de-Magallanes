<?php

abstract class Conexion {

    public static function Conectar() {
        
        try {

            $conn = new PDO('mysql:host=localhost;dbname=VIAJE', 'juego', 'juego');
        
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {

            print "¡Error al conectar!: " . $e->getMessage() . "<br/>";
        
            die();
            
        }
        
        return $conn;
        
    }

}

?>




