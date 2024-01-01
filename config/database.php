<?php
class Database
{
    private $host;
    private $dbname;
    private $user;
    private $pass;
    private $pdo;

    public function __construct($host, $dbname, $user, $pass)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;
        $this->connect();
    }

    private function connect()
    {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getPdo()
    {
        return $this->pdo;
    }

    // You can add more methods for common database operations as needed
    // For example, methods for executing queries, fetching data, etc.
}

// Example usage:

/*$database = new Database('your_host', 'your_database', 'your_username', 'your_password');
$pdo = $database->getPdo();*/

// Now you can use $pdo for database operations

?>
