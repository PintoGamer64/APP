<!-- EN ESTE ARCHIVO TENEMOS LA CONEXION A LA BASE DE DATOS -->
<!-- VARIABLE $INSTANCIA NOS SIRVE PARA GUARDAR LA CONEXION -->
<!-- METODO CREARINSTANCIA PARA CONDICIONAR LA CONEXION ECHA -->
<?php

class BD{
    public static $instancia=null; 
    public static function crearInstancia(){
            $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instancia = new PDO('mysql:host=localhost;dbname=sofiaplus-remake', 'root', '');
            //echo "Conectado";
        return self::$instancia;
    }
}

?>
