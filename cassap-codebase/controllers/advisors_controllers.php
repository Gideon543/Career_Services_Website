<?php
    require __DIR__."/../model/advisors_model.php";

    class AdvisorController extends AdvisorsModel{
        
        public function addAdvisor ($name, $bio, $class, $email , $tel, $booking_link,$img_link){
            $results = $this -> createAdvisor($name, $bio, $class, $email , $tel, $booking_link,$img_link);
        }
        
        public function displayAdvisor($advisor_id){
            $results = $this -> getAdvisor($advisor_id);
            return mysqli_fetch_all($results, MYSQLI_ASSOC);
        }

        public function displayAdvisors(){
            $results = $this -> getAllAdvisors();
            return mysqli_fetch_all($results, MYSQLI_ASSOC);
        }

        public function changeAdvisor($id, $name, $bio, $class, $email , $tel, $booking_link,$img_link){
            $results = $this -> updateAdvisor($id, $name, $bio, $class, $email , $tel, $booking_link,$img_link);
        }

        public function deleteAdvisor($advisor_id){
           $results = $this -> delete($advisor_id);

        }
    }

?>