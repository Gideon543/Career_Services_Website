<?php
  require __DIR__."/../config/credentials.config.php";

  class LoginModel extends DatabaseConnection{
    
    public function getLoginInfo(){
        $results = mysqli_query($this -> connect(), 
        "SELECT * FROM `admin`"
        );
        return $results;
    }
  }
?>