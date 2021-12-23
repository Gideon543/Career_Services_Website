<?php
    require __DIR__."/../config/credentials.config.php";

    class EventModel extends DatabaseConnection{
        
        protected function getAllEvents(){
            $results = mysqli_query($this -> connect(), 
                "SELECT * FROM events"
            );
            return $results;
        }
        protected function getCourseEvents(){
            $results = mysqli_query($this -> connect(), 
                "SELECT * FROM events where event_type <> 'General'"
            );
            return $results;
        }
        protected function getGeneralEvents(){
            $results = mysqli_query($this -> connect(), 
                "SELECT * FROM events where event_type = 'General'"
            );
            return $results;
        }

        protected function getAnEvent($event_id){
            $results = mysqli_query($this -> connect(), 
                "SELECT * FROM events
                 WHERE event_id = '$event_id'"
            );
            return $results;
        }

        protected function updateEvent($id, $event_title, $event_descript, $event_venue, $event_date , $event_class, $event_type, $img_link,$event_time){
            $result = mysqli_query($this -> connect(), 
                "UPDATE `events` SET `event_title` = '$event_title', `event_descipt` = '$event_descript',
                 `event_venue` = '$event_venue', `event_date` = '$event_date', `event_class` = '$event_class', `event_type` = '$event_type', `img_link`= '$img_link', `event_time` ='$event_time'
                 WHERE `event_id` = '$id'"
            );
        }

        protected function removeEvent($event_id){
           $results = mysqli_query($this -> connect(), 
                "DELETE FROM events WHERE event_id = $event_id"
            );  
        }

        protected function insertEvent($event_title, $event_descript, $event_venue, $event_date , $event_class, $event_type,$img_link,$event_time){
             $results = mysqli_query($this -> connect(),
                "INSERT INTO `events`(`event_title`, `event_descipt`, `event_venue`, `event_date`, `event_class`, `event_type`,`img_link`,`event_time`) 
                 VALUES ('$event_title', '$event_descript', '$event_venue', '$event_date' , '$event_class', '$event_type','$img_link','$event_time')" 
            );
        }
    }



?>