<?php
class Database {

    private $db_host;
    private $db_user ;
    private $db_password;
    private $db_name ;

    private $pdo;

    public function __construct( $db_host,$db_user,$db_password, $db_name ) {
        try {
            $this->pdo = new PDO("mysql:host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("pdoection failed: " . $e->getMessage());
        }
    }

    public function create($table, $data) {

        $columns = implode(", ", array_keys($data));

        $placeholders = implode(", ", array_fill(0, count($data), "?"));

        $sql = "INSERT INTO `$table` ($columns) VALUES ($placeholders)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array_values($data));

        return $this->pdo->lastInsertId();
    }

    public function read($table, $conditions = [], $fields = []) {
        $sql = "SELECT $fields FROM `$table`";
        if (!empty($conditions)) {

            $sql .= " WHERE " . implode(" AND ", $conditions);

        }

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($table, $data, $conditions) {
        $set_items = [];
        foreach ($data as $column => $value) {
            $set_items[] = "`$column` = ?";
        }
        $set_clause = implode(", ", $set_items);

        $where_clause = implode(" AND ", $conditions);

        $sql = "UPDATE `$table` SET $set_clause WHERE $where_clause";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array_merge(array_values($data), array_values($conditions)));

        return $stmt->rowCount();
    }

    public function delete($table, $conditions) {
        $where_clause = implode(" AND ", $conditions);

        $sql = "DELETE FROM `$table` WHERE $where_clause";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array_values($conditions));

        return $stmt->rowCount();
    }

    public function getPdo()
    {
        return $this->pdo;
  
  
    }
}







# Example usage:

/*$database = new Database('host', 'database', 'username', 'password');
$pdo = $database->getPdo();*/

// Now you can use $pdo for database operations

?>
