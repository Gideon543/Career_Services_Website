<?php
    require __DIR__."/../model/dashboard_model.php";

    class DashController extends DashModel{
        
        public function retrieveAdvisorCount (){
            $results = $this -> getAdvisorCount();
            $advisors = mysqli_fetch_all($results, MYSQLI_ASSOC);
            return $advisors[0]["COUNT(1)"];
        }
        
        public function retrieveCPACount(){
            $results = $this -> getCPACount();
            $cpas = mysqli_fetch_all($results, MYSQLI_ASSOC);
            return $cpas[0]["COUNT(1)"];
        }

        public function retrieveEventCount(){
            $results = $this -> getEventCount();
            $events = mysqli_fetch_all($results, MYSQLI_ASSOC);
            return $events[0]["COUNT(1)"];
        }
    }
?>
