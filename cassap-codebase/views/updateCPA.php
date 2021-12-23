<?php 
/*
*********************************************************************************
A Web Site for Ashesi Career Services Department
*********************************DASHBOARD***************************************
Date started: 10th November, 2021
Date completed:  November, 2021
**********************************************************************************
*/


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASSAP|DASHBOARD</title>
    <!--Styles.css-->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <!-- Bootstap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

</head>

<body>
    <!--NAVBAR-->
   

    <!--SIDEBAR-->

    <?php
  
    // require_once('sidebar.php');
     require __DIR__."/../controllers/cpa_controllers.php"; 

        $advisorObj = new CPAController();
        $id = $_GET["id"];
        $advisor = $advisorObj -> displayCPA($id);
    ?>

    <div class="main-content">
        <!--Form-->
        <form class="row g-3 m-5" method = "POST" action = "">
            <div class="col-md-6">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value = '<?= $advisor[0]["name"] ?>' id="inputName">
            </div>
            <div class="col-md-6">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control" value = <?= $advisor[0]["email"] ?>  id="emailInput" name="email">
            </div>
            <div class="col-12">
                <label for="inputBio" class="form-label">Bio</label>
                <textarea name = "bio" class="form-control" id="inputAddress" rows="3"><?= $advisor[0]["bio"] ?> </textarea>
            </div>
            <div class="col-12">
                <label for="inputTel" class="form-label">Telephone Number</label>
                <input type="text" name="tel" class="form-control" id="inputTel" value = <?= $advisor[0]["tel"] ?> >
            </div>
            <div class="col-md-6">
                <label for="inputBookLink" class="form-label">Booking Link</label>
                <input type="url" name="booking-link" class="form-control" value = <?= $advisor[0]["booking_link"] ?>  id="inputBookLink">
                
                <input type="text" hidden name="id" class="form-control" value = <?= $advisor[0]["id"] ?>  id="inputBookLink">
            </div>

            <div class="col-12">
                <label for="inputTel" class="form-label">Image Link</label>
                <input type="text" name="img_link" class="form-control" id="inputTel" value = <?= $advisor[0]["img_link"] ?> >
            </div>
            <div class="col-md-6">
                <label for="inputZip" class="form-label">Course</label>
                <select id="inputType" class="form-select" name="course">
                    <option selected> <?= $advisor[0]["class"] ?> </option>
                    <option>MIS</option>
                    <option>CS</option>
                    <option>BA</option>
                    <option>ENG</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputZip" class="form-label">Class</label>
                <select id="inputType" class="form-select" name="class">
                    <option selected> <?= $advisor[0]["course"] ?> </option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                    <option>2025</option>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" name = 'submit' class="btn btn-primary">Update Advisor</button>
            </div>
        </form>
        <?php

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $class = $_POST['class'];
        $email = $_POST['email'];
        $tel =  $_POST['tel'];
        $bio =  $_POST['bio'];
        $course = $_POST['course'];
        $booking_link =  $_POST['booking-link'];
        $image_link = $_POST['img_link'];


        $results = $advisorObj -> changeCPA($id, $name, $bio, $class,$course, $email , $tel, $booking_link, $image_link);
        header("Location: cpas.php");
        
    }
?>
        <!--/Form-->
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>

