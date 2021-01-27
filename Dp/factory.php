<?php

class MySQLConn {

        public function __construct() {
                echo "MySQL Database Connection" . PHP_EOL;
        }

        public function select() {
                echo "Your mysql select query execute here" . PHP_EOL;
        }

}

class OracleConn {

        public function __construct() {
                echo "Oracle Database Connection" . PHP_EOL;
        }

        public function select() {
                echo "Your oracle select query execute here" . PHP_EOL;
        }

}

class DBFactory {

        public static function getConn($dbtype) {

                switch($dbtype) {
                        case "MySQL":
                                $dbobj = new MySQLConn();
                                break;
                        case "Oracle":
                                $dbobj = new OracleConn();
                                break;
                        default:
                                $dbobj = new MySQLConn();
                                break;
                }

                return $dbobj;
        }

}

$dbconn1 = DBFactory::getConn("MySQL");
$dbconn1->select();
