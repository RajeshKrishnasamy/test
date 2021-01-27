<?php

interface DbConnectionInterface {
    public function connect();
} 
 
class MySqlConnection implements DbConnectionInterface {
    public function connect() {
        echo "i am connecting";
        }
}

class MySqlConnection2 implements DbConnectionInterface {
    public function connect() {
        echo "i am connecting2";
        }
}
 
class PageLoader {
    private $dbConnection;
    public function __construct(DbConnectionInterface $dbConnection) {
        $this->dbConnection = $dbConnection;
          $this->dbConnection->connect();
    }
}

$connection = new MySqlConnection2();

$pl = new PageLoader($connection);
