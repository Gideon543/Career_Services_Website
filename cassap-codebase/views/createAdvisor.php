<?php
require __DIR__."/../controllers/advisors_controllers.php";

$advisorObj = new AdvisorController();

if(isset($_POST['submit'])) {   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $bio = $_POST['bio'];
    $tel = $_POST['telephone'];
    $class = $_POST['class'];
    $booking_link = $_POST['booking-link']; 
    $img_link = $_POST['img_link'];

    
    $results = $advisorObj -> addAdvisor($name, $bio, $class, $email , $tel, $booking_link,$img_link);
    header("Location: advisors.php");
}
?>

     

       