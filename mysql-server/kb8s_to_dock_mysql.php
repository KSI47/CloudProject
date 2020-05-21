<?php
class Database{

    // specify your own database credentials
    private $host = "192.168.135.0";
    private $db_name = "hospital_db";
    private $username = "root";
    private $password = "root";
    private $port = "33060";
    public $conn;

    // get the database connection
    public function getConnection(){

        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";port=".$this->port.";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>

