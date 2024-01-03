<?php


namespace app\config;



//    private \PDO $connect;
//
//    public function __construct($db_host = "localhost", $db_user = "root", $db_pass = "", $db_name = "youevent")
//    {
//        try {
//            $this->connect = new \PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
//        } catch (\PDOException $e) {
//            echo "Connection failed: " . $e->getMessage();
//        }
//    }


class Database
{
    private  $connect;
    private $stml;

    public function __construct($db_host = 'localhost', $db_user = 'root', $db_pass = '', $db_name = 'youevent')
    {
        try {
            $dsn = "mysql:host={$db_host};dbname={$db_name}";
            $this->connect = new \PDO($dsn, $db_user, $db_pass);
            // echo "wohooooooooo it works"; // Consider removing or using it for debugging only
        } catch (\PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            die();
        }
    }


    //function to prepare queries
    public function query($sql)
    {
        $this->stml = $this->connect->prepare($sql);
    }
    public function prepare($sql) {
        return $this->connect->prepare($sql);
    }


    //excute a query
    public function execute()
    {
        return $this->stml->execute();
    }

    public function singleFetch()
    {
        $this->execute();//excute the query after
        return $this->stml->fetch();
    }

    public function singleAll()
    {
        $this->execute();//excute the query after
        return $this->stml->fetchAll();
    }

    //this method to cound the number of rows

    public function rowCount()
    {
        return $this->stml->rowCount();
    }
}