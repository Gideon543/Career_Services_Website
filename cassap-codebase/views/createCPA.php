<?php
require __DIR__."/../controllers/cpa_controllers.php";

$cpaObj = new CPAController();

if(isset($_POST['submit'])) {   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $bio = $_POST['bio'];
    $tel = $_POST['telephone'];
    $course = $_POST['course'];
    $class = $_POST['class'];
    $booking_link = $_POST['booking-link'];
    $img_link = $_POST['img_link']; 

    
    $results = $cpaObj -> addCPA($name, $bio, $course, $class, $email , $tel, $booking_link,$img_link);
    header("Location: cpas.php");
}
?>
