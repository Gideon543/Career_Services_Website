<?php
    require __DIR__."/../model/cpa_model.php";

    class CPAController extends CPAModel{
        
        public function addCPA ($name, $bio, $course, $class, $email , $tel, $booking_link,$img_link){
            $results = $this -> createCPA($name, $bio, $course, $class, $email , $tel, $booking_link,$img_link);
        }
        
        public function displayCPA($advisor_id){
            $results = $this -> getCPA($advisor_id);
            return mysqli_fetch_all($results, MYSQLI_ASSOC);
        }

        public function displayCPAs(){
            $results = $this -> getAllCPAs();
            return mysqli_fetch_all($results, MYSQLI_ASSOC);
        }

        public function changeCPA($id, $name, $bio, $course, $class, $email , $tel, $booking_link,$img_link){
            $results = $this -> updateCPA($id, $name, $bio, $course, $class, $email , $tel, $booking_link,$img_link);
        }

        public function deleteCPA($advisor_id){
            $results = $this -> removeCPA($advisor_id);

        }
    }

?>