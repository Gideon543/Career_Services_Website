<?php
    require __DIR__."/../controllers/advisors_controllers.php";

    //Get advisor id from url
    $advisor_id = $_GET["id"];
    echo $advisor_id;
    
    //Delete advisor from database
    $deleteAdvisorObj = new AdvisorController();
    $deleteAdvisorObj -> deleteAdvisor($advisor_id);

    //Redirect to advisor page
    header("Location: advisors.php");

?>
