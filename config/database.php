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

    public function __construct($db_host = 'localhost', $db_user = 'root', $db_pass = '', $db_name = 'youevent_bref')
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
    
    public function prepare($sql) {
        return $this->connect->prepare($sql);
    }



}