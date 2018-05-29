<?php
class Database {
  //Connecting to database
  //instantiating log class

  		public function __construct($hostname, $database, $username, $password)
  		{
  			$this->log = new Log();
  			$this->Connect($hostname, $database, $username, $password);
  			$this->parameters = array();
  		}

  private function getConnection(){

    private $hostname = "127.0.0.1";
    private $dbname ="oop"
    private $username = "root";
    private $password ="";
    private $conn;
    {
      $DBH = new PDO("mysql :hostname=$hostname; dbname=$dbname", $username, $password);
//logging any exceptions into fatal error
      $DBH->setAttribute (PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $DBH;
    }
    (PDOException $e){
      echo 'ERROR:'. $e ->getMessage();
    }
    //Show data assuming that a table has already been created
    public function showData($table){

      $sql="SELECT * FROM $table";
      $q = $this->conn->query($sql) or die("failed!");
          while($r = $q->fetch(PDO::FETCH_ASSOC)){
      $data[]=$r;
}
      return $data;
}
  public function getById($id,$table){

    $sql="SELECT * FROM $table WHERE id = :id";
    $q = $this->conn->prepare($sql);
    $q->execute(array(':id'=>$id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    return $data;
}
//updating the table in the database
  public function update($id,$name,$email,$mobile,$address,$table){

    $sql = "UPDATE $table
SET name=:name,email=:email,mobile=:mobile,address=:address
WHERE id=:id";
    $q = $this->conn->prepare($sql);
    $q->execute(array(':id'=>$id,':name'=>$name,
':email'=>$email,':mobile'=>$mobile,':address'=>$address));
return true;
}
//inserting data

public function insertData($name,$email,$mobile,$address,$table){

    $sql = "INSERT INTO $table SET name=:name,email=:email,mobile=:mobile,address=:address";
    $q = $this->conn->prepare($sql);
    $q->execute(array(':name'=>$name,':email'=>$email,
':mobile'=>$mobile,':address'=>$address));
return true;
}
//deleting data
public function deleteData($id,$table){

      $sql="DELETE FROM $table WHERE id=:id";
      $q = $this->conn->prepare($sql);
      $q->execute(array(':id'=>$id));
return true;
}

}


 ?>
