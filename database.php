<?php
class Database{
 //pdo conection
 private $dns;
 private $username;
 private $password;
 private $conn;
 public function  __construct(){
    $this->dns='mysql:host=localhost;dbname=regester';
    $this->username='root';
    $this->password='';
    try
    {
        $this->conn =  new PDO($this->dns,$this->username,$this->password);
    }catch(PDOException $e) {
        exit('Database error');
    }
    return $this->conn;
 }
 
 public function getmyDB()
 {
 if ($this->conn instanceof PDO)
     {
     return $this->conn;
     }
 }

}