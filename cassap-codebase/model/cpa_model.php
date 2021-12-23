<?php
    require __DIR__."/../config/credentials.config.php";

    class CPAModel extends DatabaseConnection{
        protected function getAllCPAs(){
            $results = mysqli_query($this -> connect(), 
                "SELECT * FROM `cpas`"
            );
            return $results;
        }

        protected function getCPA($advisor_id){
            $results = mysqli_query($this -> connect(), 
            "SELECT * FROM `cpas`
             WHERE id = $advisor_id"
            );
            return $results;
        }

        protected function updateCPA($id, $name, $bio, $course, $class, $email , $tel, $booking_link,$img_link){
            $result = mysqli_query($this -> connect(), 
            "UPDATE `cpas` SET `name`='$name',`bio`='$bio',`course`='$course',
            `class`='$class',`email`='$email',`tel`='$tel',`booking_link`='$booking_link',`img_link`='$img_link'
             WHERE `id` = '$id'"
            );
        }

        protected function  removeCPA($advisor_id){
            $results = mysqli_query($this -> connect(), 
            "DELETE FROM `cpas` WHERE id = $advisor_id"
            );  
        }

        protected function createCPA($name, $bio, $course, $class, $email , $tel, $booking_link){
            $results = mysqli_query($this -> connect(),
            "INSERT INTO `cpas`(`name`, `bio`, `course`, `class`, `email`, `tel`, `booking_link`,`img_link`) 
             VALUES ('$name','$bio','$course', '$class','$email','$tel','$booking_link','$img_link')"
           );
       }
   
    }
?>