<?php
    require __DIR__."/../controllers/event_controllers.php";

    //Get event id from url
    $event_id = $_GET["id"];

    echo $event_id;
    
    //Delete event from database
    $eventObj = new EventsController();
    $eventObj -> deleteEvent($event_id);

    //Redirect to event page
    header("Location: events.php");

?>