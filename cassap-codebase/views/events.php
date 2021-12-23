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
    <title>CASSAP</title>
    <!--Styles.css-->
    <link rel="stylesheet" href="../css/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/sidebar.css?v=<?php echo time(); ?>">
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
      require_once('sidebar.php');
       // require_once('sidebar.php'); 
        require __DIR__."/../controllers/event_controllers.php";
       
    ?>

    <!--Getting records from database-->
    <?php
        $eventsObj = new EventsController();
        $allEvents = array();
        $allEvents = $eventsObj -> displayEvents();
    ?>

    <div class="main-content">
        <!--Search Form-->
        <div class="search-c m-5">
            <form action="" method="post">
                <input type="text" placeholder="Search">
                <button type="submit">Search</button>
            </form>
        </div>
        <!--Container div for table-->
        <div class="table-responsive m-5">
            <table class="table table-responsive table-borderless">
                <thead>
                    <tr>
                        <th><i class="bi bi-people pe-2"></i>Title</th>
                        <th><i class="bi bi-bookmark-plus-fill pe-2"></i>Venue</th>
                        <th><i class="bi bi-telephone pe-2"></i>Date</th>
                        <th><i class="bi bi-book pe-2"></i>Class</th>
                        <th><i class="bi bi-pen pe-2"></i>Type</th>
                        <th><i class="bi bi-box-seam pe-2"></i>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        foreach($allEvents as $value){
                    ?>
                            <tr>
                               <td> <?= $value['event_title']?></td>
                               <td><?= $value["event_venue"]?></td>
                               <td><?= $value["event_date"]?></td>
                               <td><?= $value["event_class"]?></td>
                               <td><?= $value["event_type"]?></td>
                                
                               <td><a href="updateEvent.php?id=<?=$value['event_id']?>"><i class="bi bi-pencil-square"></i></a>  <a href="deleteEvent.php?id=<?= $value["event_id"]?>"><i
                                            class="bi bi-trash"></i></a></td>
                            </tr>
                        <?php
                            }
                        ?>
                </tbody>
            </table>
        </div>
        <!-- Button trigger modal - add advisor -->
        <div class="add-person">
            <a title="Add event" href="" id="add-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-square-fill"></i></i></a>
        </div>


    




        <!-- Modal Form -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title px-5" id="exampleModalLabel">Add Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--Form-->
                        <form class="row g-3 px-5 px-2" method ="POST" action ="createEvent.php">
                            <div class="col-md-12">
                                <label for="inputName" class="form-label">Event Title</label>
                                <input type="text" name="event_title" class="form-control" id="inputName">
                            </div>
                            <div class="col-12">
                                <label for="inputBio" class="form-label">Event Description</label>
                                <textarea name="event_descript" class="form-control" id="inputAddress" rows="3"
                                    placeholder="A third year student intereted in ..."></textarea>
                            </div>
                            <div class="col-12">
                                <label for="inputTel" class="form-label">Event Venue</label>
                                <input type="text" name="event_venue" class="form-control" id="inputTel">
                            </div>
                            <div class="col-md-12">
                                <label for="inputBookLink" class="form-label">Event Date</label>
                                <input type="date" name="event_date" class="form-control" id="inputBookLink">
                            </div>
                            <div class="col-md-12">
                                <label for="inputBookLink" class="form-label">Event Time</label>
                                <input type="time" name="event_time" class="form-control" id="event_time">
                            </div>
                            <div class="col-md-12">
                                <label for="inputBookLink" class="form-label">Image link</label>
                                <input type="text" name="img_link class="form-control" id="inputBookLink">
                            </div>
                            <div class="col-md-6">
                                <label for="inputType" class="form-label">Class</label>
                                <select id="inputType" name="event_class" class="form-select">
                                    <option selected>2023</option>
                                    <option>2022</option>
                                    <option>2024</option>
                                    <option>2025</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Opened To</label>
                                <select id="inputType" class="form-select" name="event_type">
                                    <option selected>CS</option>
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
                </div>               
            </div>

        </div>
    </div>
    </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>

