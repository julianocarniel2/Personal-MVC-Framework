<?php

namespace App;

class Connection {

    public static function getDb(){ //Por ser static o método getDb pode ser chamado diretamente. Não precisamos criar uma classe de conexão para utilizá-lo.
        try { //Basta referenciar, utlizando namespace e use ... PDO é uma classe padrão do PHP que fica no namespace \
            $conn = new \PDO( 
                "mysql:host=localhost;dbname=mvc;charset=utf8",
                "root",
                ""
            );

            return $conn;

        } catch(\PDOException $e) {
            echo 'Erro de conexão';
        }
    }
}

?>