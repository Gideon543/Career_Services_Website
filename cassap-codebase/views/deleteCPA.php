<?php
    require __DIR__."/../controllers/cpa_controllers.php";

    //Get advisor id from url
    $cpa_id = $_GET["id"];
    
    //Delete advisor from database
    $cpaObj = new CPAController();
    $cpaObj -> deleteCPA($cpa_id);

    //Redirect to advisor page
    header("Location: cpas.php");

?>