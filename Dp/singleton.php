<?php

// Singleton to connect db.
class ConnectDb {
    // Hold the class instance.
    private static $instance = null;
    private $conn;
    
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $name = 'mytest';
     
    // The db connection is established in the private constructor.
    private function __construct()
    {
      $this->conn = new PDO("mysql:host={$this->host};
      dbname={$this->name}", $this->user,$this->pass,
      array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }
    
    public static function getInstance()
    {
      if(!self::$instance)
      {
        self::$instance = new ConnectDb();
      }
     
      return self::$instance;
    }
    
    public function getConnection()
    {
      return $this->conn;
    }
  }

//   class DataBaseConnecter { 
                  
//     private static $obj; 
                  
//     private final function __construct() { 
//         echo __CLASS__ . " initialize only once "; 
//     } 
      
//     public static function getConnect() { 
//         if (!isset(self::$obj)) { 
//             self::$obj = new DataBaseConnecter(); 
//         } 
          
//         return self::$obj; 
//     } 
// } 
  
// $obj1 = DataBaseConnecter::getConnect(); 
// $obj2 = DataBaseConnecter::getConnect(); 
  
// var_dump($obj1 == $obj2); 