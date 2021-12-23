<?php
require __DIR__."/../controllers/event_controllers.php";

$eventObj = new EventsController();

if(isset($_POST['submit'])) {   
    $event_title = $_POST['event_title'];
    $event_descript = $_POST['event_descript'];
    $event_venue= $_POST['event_venue'];
    $event_class = $_POST['event_class'];
    $event_type = $_POST['event_type'];
    $event_date = $_POST['event_date']; 
    $img_link = $_POST['img_link']; 
    $event_time = $_POST['event_time']; 

    $results = $eventObj -> createEvent($event_title, $event_descript, $event_venue, $event_date , $event_class, $event_type, $img_link,$event_time);
    header("Location: events.php");
}
?>