<?php
require_once('database.php');
class UserOpration {
    private $proprties;
    private $conn;
    function __construct() {
        $this->conn = new Database();
        $this->conn = $this->conn->getmyDB();
    }
    public function __get($proprtyName){
            return $this->proprties[$proprtyName];
    }

    public function __set($proprtyName,$proprtyValue){
        $this->proprties[$proprtyName]=$proprtyValue;

    }

    public function insert(){
    try{
      $stm = $this->conn->prepare("INSERT INTO users(firstName,lastName,address)values(?,?,?)");
      $stm->execute([$this->proprties['firstName'],$this->proprties['lastName'],$this->proprties['address']]);
      echo "<script>alert('data saved successfuly');document.location='index.php'</script>";
    }catch(Exception $e){
         return $e->getMessage();
    }
    }

   public function getAll(){
       try{
        $stm = $this->conn->prepare("SELECT *  FROM users");
        $stm->execute();
        return $stm->fetchAll();
       }catch(Exception $e){
        return $e->getMessage();
   }
   }
   public function delete($id){
      try{
        $stm = $this->conn->prepare("DELETE FROM users WHERE id = ?");
        $stm->execute([$id]);
      }catch(Exception $e){
        return $e->getMessage();
   }
   }
   public function getOne($id){
    try{
     $stm = $this->conn->prepare("SELECT * FROM users WHERE id = ? LIMIT 1");
     $stm->execute([$id]);
     return $stm->fetch();
    }catch(Exception $e){
     return $e->getMessage();
}
}

public function edit(){
  try{
    $stm = $this->conn->prepare("UPDATE users SET firstName=?,lastName=?,address=?
     WHERE id=?");
    $stm->execute([$this->proprties['firstName'],$this->proprties['lastName'],
    $this->proprties['address'],$this->proprties['id']]);
    echo "<script>alert('data updated successfuly');document.location='index.php'</script>";
  }catch(Exception $e){
       return $e->getMessage();
  }
  }

}