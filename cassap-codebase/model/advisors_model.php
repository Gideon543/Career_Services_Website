<?php
    require __DIR__."/../config/credentials.config.php";

    class AdvisorsModel extends DatabaseConnection{
        protected function getAllAdvisors(){
            $results = mysqli_query($this -> connect(), 
                "SELECT * FROM advisors"
            );
            return $results;
        }

        protected function getAdvisor($advisor_id){
            $results = mysqli_query($this -> connect(), 
            "SELECT * FROM advisors
             WHERE id = $advisor_id"
            );
            return $results;
        }

        protected function updateAdvisor($id, $name, $bio, $class, $email , $tel, $booking_link,$img_link){
            $result = mysqli_query($this -> connect(), 
            "UPDATE `advisors` SET `name` = '$name', `bio` = '$bio',
             `class`= '$class', `email` = '$email', `tel` = '$tel', `booking_link` = '$booking_link' ,`img_link`= '$img_link'
             WHERE `id` = '$id'"
            );
        }

        protected function  delete($advisor_id){
            $results = mysqli_query($this -> connect(), 
            "DELETE FROM `advisors` WHERE `id` = $advisor_id"
            );  
        }

        protected function createAdvisor($name, $bio, $class, $email , $tel, $booking_link,$img_link){
            $results = mysqli_query($this -> connect(),
            "INSERT INTO `advisors`(`name`, `bio`, `class`, `email`, `tel`, `booking_link`,`img_link`) 
            VALUES ('$name','$bio','$class','$email','$tel','$booking_link','$img_link')"
           );
       }
   
    }
?>