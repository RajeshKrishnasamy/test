protected $host = '127.0.0.1';
protected $db = 'sym_work';
protected $name = 'root';
protected $pass = 'root';
protected $conn;
private static $settings = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

public function __construct() {
    try {
        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->name, $this->pass, self::$settings);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

$host = '127.0.0.1';
$db = 'sym_work';
$name = 'root';
$pass = 'password';
$conn;
static $settings = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);


    try {
        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->name, $this->pass, self::$settings);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
