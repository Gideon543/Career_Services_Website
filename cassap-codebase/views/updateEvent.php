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
    
        //require_once('sidebar.php');
        require __DIR__."/../controllers/event_controllers.php"; 
    ?>


    <?php
        $advisorObj = new EventsController();
        $id = $_GET["id"];
        $value = $advisorObj -> displayEvent($id);
    ?>

    <div class="main-content">
        <!--Form-->
        <!--Form-->
        <form class="row g-3 px-5 px-2" method="POST" action="createEvent.php">
            <div class="col-md-12">
                <label for="inputName" class="form-label">Event Title</label>
                <input type="text" name="event_title" class="form-control" value = '<?=$value[0]['event_title']?>' id="inputName">
            </div>
            <div class="col-12">
                <label for="inputBio" class="form-label">Event Description</label>
                <textarea name="event_descript" class="form-control" id="inputAddress" rows="3"><?=$value[0]['event_descipt']?></textarea>
            </div>
            <div class="col-12">
                <label for="inputTel" class="form-label">Event Venue</label>
                <input type="text" name="event_venue" class="form-control" value = <?=$value[0]['event_venue']?> id="inputTel" placeholder="+233542893998">
            </div>
            <div class="col-md-12">
                <label for="inputBookLink" class="form-label">Event Date</label>
                <input type="date" name="event_date" class="form-control" value = <?=$value[0]['event_date']?> id="inputBookLink">
            </div>
            <div class="col-md-12">
                <label for="inputBookLink" class="form-label">Event Time</label>
                <input type="time" name="event_time" value = <?=$value[0]['event_time']?> class="form-control" id="event_time">
            </div>
            <div class="col-md-12">
                <label for="inputBookLink" class="form-label">Image link</label>
                <input type="text" name="img_link" value = <?=$value[0]['event_title']?> class=" form-control" id="inputBookLink">
            </div>

            <div class="col-md-6">
                <label for="inputType" class="form-label">Class</label>
                <select id="inputType" name="event_class" class="form-select">
                    <option selected><?=$value[0]['event_class']?></option>
                    <option>2022</option>
                    <option>2024</option>
                    <option>2025</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputZip" class="form-label">Opened To</label>
                <select id="inputType" class="form-select" name="event_type">
                    <option selected><?=$value[0]['event_type']?></option>
                    <option>MIS</option>
                    <option>ENG</option>
                    <option>BA</option>
                    <option>General</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-custum-color my-3">Add Event</button>
        </form>
        <!--/Form-->
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>

<?php

    if(isset($_POST['submit'])){
        $event_id = $_POST['event_id'];
        $event_title = $_POST['event_title'];
        $event_descript = $_POST['event_descript'];
        $event_venue = $_POST['event_venue'];
        $event_date =  $_POST['event_date'];
        $event_class = $_POST['event_class'];
        $event_type = $_POST['event_type'];
        $img_link = $_POST['img_link']; 
        $event_time = $_POST['event_time']; 

        $results = $advisorObj -> changeEvent($event_id, $event_title, $event_descript, $event_venue, $event_date , $event_class, $event_type, $img_link,$event_time);
        //header("Location: cpas.php");
    }
?>