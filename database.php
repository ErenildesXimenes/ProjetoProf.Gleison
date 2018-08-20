<?php

class Database
{

    
    private static $cont = null;
    
    public function __construct() 
    {
        die('A função Init nao é permitido!');
    }
    
    public static function conectar()
    {
        if(null == self::$cont)
        {
            try
            {
            	$dbNome = 'sessaocine';
    			$dbHost = 'localhost';
    			$dbUsuario = 'root';
     			$dbSenha = '';
                self::$cont =  new PDO("mysql:host=$dbHost;dbname=$dbNome;charset=utf8", $dbUsuario, $dbSenha);
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }
    
    public static function desconectar()
    {
        self::$cont = null;
    }
}

?>