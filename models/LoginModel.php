<?php
namespace app\models;
use app\config\Database;
use app\core\Application;
 use app\models\UserModel;

class LoginModel extends UserModel {
   //regester
    public function creatAcount($fullName, $email,$phone,$password)
    {
        $sql = "INSERT INTO `users` (`fullName`,`email`,`phone`,`password`) VALUES (?, ?, ?, ?)";
        $conn = $this->database;
    
        try {
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $fullName, \PDO::PARAM_STR);
            $stmt->bindParam(2, $email, \PDO::PARAM_STR);
            $stmt->bindParam(3, $phone, \PDO::PARAM_STR);
            $stmt->bindParam(4, $password, \PDO::PARAM_STR);
            $stmt->execute();
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            $stmt->closeCursor();
            $conn = null;
        }
        
    }
//login
    public function findAcount($email,$password)
    {
        $sql = "SELECT * from users where email=?";
        $conn = $this->database;
        try {
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $email, \PDO::PARAM_STR);
            $stmt->bindParam(2, $password, \PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch(\PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password']))
            {
                if ($user['id_role'] == 1) {
                    return $role = "Admin";
                } else if ($user['id_role'] == 2) {
                    return $role = "User";
                } else {
                    return $role = "Organisateur";
                }
            }else
                return false;
        }catch (\PDOException $e)
        {
          echo "Error: " . $e->getMessage();
        }

    }
}