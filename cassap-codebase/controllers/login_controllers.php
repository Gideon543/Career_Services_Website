<?php

    require __DIR__."/../model/login_model.php";

    class LoginController extends LoginModel{
        public function displayLogin(){
            $results = $this -> getLoginInfo();
            return mysqli_fetch_all($results, MYSQLI_ASSOC);
        }

        public function checkDetails($email, $password){
            $usersInfo = $this -> displayLogin();
            $usersEmail = $usersInfo[0]["email"];
            $usersPass = $usersInfo[0]["password"];
            

            if (($usersEmail === $email) && ($usersPass === $password)){
                return true;
            }
            return false;
        }
    }




?>