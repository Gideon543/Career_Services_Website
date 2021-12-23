<?php
    require __DIR__."/../config/credentials.config.php";

    class DashModel extends DatabaseConnection{
        protected function getAdvisorCount(){
            $results = mysqli_query($this -> connect(), 
                "SELECT COUNT(1) FROM `advisors`"
            );
            return $results;
        }

        protected function getCPACount(){
            $results = mysqli_query($this -> connect(), 
            "SELECT COUNT(1) FROM `cpas`"
            );
            return $results;
        }

        protected function getEventCount(){
            $results = mysqli_query($this -> connect(), 
            "SELECT COUNT(1) FROM `events`"
            );
            return $results;
        }
    }
?>