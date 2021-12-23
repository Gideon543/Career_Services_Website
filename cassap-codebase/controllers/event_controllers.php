<?php
    require __DIR__."/../model/event_model.php";

    class EventsController extends EventModel{
        
        public function createEvent ($event_title, $event_descript, $event_venue, $event_date , $event_class, $event_type, $img_link,$event_time){
            $results = $this -> insertEvent($event_title, $event_descript, $event_venue, $event_date , $event_class, $event_type, $img_link,$event_time);
        }
        
        
        public function displayEvent($event){
            $results = $this -> getAnEvent($event);
            return mysqli_fetch_all($results, MYSQLI_ASSOC);

        }

        public function displayCourseEvents(){
            $results = $this -> getCourseEvents();
            return mysqli_fetch_all($results, MYSQLI_ASSOC);
        }

        public function displayGeneralEvents(){
            $results = $this -> getGeneralEvents();
            return mysqli_fetch_all($results, MYSQLI_ASSOC);
        }

        public function displayEvents(){
            $results = $this -> getAllEvents();
            return mysqli_fetch_all($results, MYSQLI_ASSOC);
        }

        public function changeEvent($id, $event_title, $event_descript, $event_venue, $event_date , $event_class, $event_type, $img_link,$event_time){
            $results = $this -> updateEvent($id, $event_title, $event_descript, $event_venue, $event_date , $event_class, $event_type, $img_link,$event_time);
        }


        public function deleteEvent($name){
            $results = $this -> removeEvent($name);

        }
    }



?>