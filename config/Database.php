//
//namespace app\config;
//
//class Database
//{
//
//    protected \PDO $connect;
//
//    public function __construct($db_host="localhost", $db_user="root" , $db_pass="", $db_name="youevent")
//    {
//        try {
//            $this->connect = new \PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
//            echo "it works";
//        }catch (\PDOException $e)
//        {
//                echo "there was an error:". $e->getMessage();
//        }
//    }
//}