

<!--                                                                                            _____
                                                                                              /       \
                                                                                             /  STOP   \
                                                                                             \         /
                                                                                              \ _____ /
                                                                                                 |
                                                                                                 |
                                                                                        | NO PASAR SIN PERMISO |
________________________________________________________________________________________________________________________________________________________________________________________________/ -->
                                                           <!-- No Tocar nada a menos que estes 100% seguro de lo que haces... -->

<?php

class conection
{
    public $server = 'sql10.freemysqlhosting.net';
    public $user = "sql10618119";
    public $password = "4NHAsCAvnP";
    public $port = "3306";
    public $db="sql10.freemysqlhosting.net";

    public $conection;


    public function __construct()
    {

        try {
            $username = "sql10618119";
            $password = "4NHAsCAvnP";
            $database = "sql10618119";
            $host = "sql10.freemysqlhosting.net";
        
            $dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
        
            $this->conection = new PDO($dsn, $username, $password, $options);
        
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function execut($I)//Insertar/actualizar/Eliminar
    {
        $this->conection->exec($I); 
        return $this->conection->lastInsertId();
    }
    public function consult($sql)
    {
        $sentence = $this->conection->prepare($sql);
        $sentence->execute();
        return $sentence->fetchAll();
    }
}


?>
