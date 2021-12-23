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
        require __DIR__."/../controllers/cpa_controllers.php"; 
    
    ?>

    <!--Getting records from database-->
    <?php
        $advisorObj = new CPAController();
        $allCPAs = array();
        $allCPAs = $advisorObj -> displayCPAs();
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
            <table class="table table-hover table-responsive table-borderless">
                <thead>
                    <tr>
                        <th><i class="bi bi-people px-2"></i>Full Name</th>
                        <th><i class="bi bi-book px-2"></i>Course</th>
                        <th><i class="bi bi-bookmark-plus-fill px-2"></i>Email</th>
                        <th><i class="bi bi-telephone px-2"></i>Telephone</th>
                        <th><i class="bi bi-pen px-2"></i>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        foreach($allCPAs as $value){
                ?>
                            <tr>
                               <td> <?= $value['name']?></td>
                               <td><?= $value["course"]?></td>
                               <td><?= $value["email"]?></td>
                               <td><?= $value["tel"]?></td>
                               <td><a href="updateCPA.php?id=<?=$value['id']?>"><i class="bi bi-pencil-square"></i></a> <a href="deleteCPA.php?id=<?= $value["id"]?>"><i
                                            class="bi bi-trash"></i></a></td>
                            </tr>
                        <?php
                            }
                        ?>
                </tbody>
            </table>
        </div>

        <div class="add-person">
            <a title="Add a person" href="" id="add-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                    class="bi bi-person-plus-fill"></i></a>
        </div>

        <!-- Modal Form -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title px-5" id="exampleModalLabel">Add Peer Advisor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--Form-->
                        <form class="row g-3 px-5 px-2" method = "POST" action ="createCPA.php">
                            <div class="col-md-12">
                                <label for="inputName" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="inputName">
                            </div>
                            <div class="col-md-12">
                                <label for="emailInput" class="form-label">Email</label>
                                <input type="email" class="form-control" id="emailInput" name="email">
                            </div>
                            <div class="col-12">
                                <label for="inputBio" class="form-label">Bio</label>
                                <textarea name="bio" class="form-control" id="inputAddress" rows="3"
                                    placeholder="A third year student intereted in ..."></textarea>
                            </div>
                            <div class="col-12">
                                <label for="inputTel" class="form-label">Telephone Number</label>
                                <input type="text" name="telephone" class="form-control" id="inputTel"
                                    placeholder="">
                            </div>
                            
                            <div class="col-md-12">
                                <label for="inputBookLink" class="form-label">Booking Link</label>
                                <input type="url" name="booking-link" class="form-control" id="inputBookLink">
                            </div>
                            <div class="col-md-12">
                                <label for="inputBookLink" class="form-label">Upload Image Link</label>
                                <input type="text" name="img_link" class="form-control" id="inputBookLink">
                            </div>
        
                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Class</label>
                                <select id="inputType" class="form-select" name="course">
                                    <option selected>2023</option>
                                    <option>2022</option>
                                    <option>All</option>
                                    <option>2024</option>
                                    <option>2025</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Course</label>
                                <select id="inputType" class="form-select" name="class">
                                    <option selected>CS</option>
                                    <option>MIS</option>
                                    <option>ENG</option>
                                    <option>BA</option>
                                    <option>ME</option>
                                </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-custum-color my-4">Add Peer Advisor</button>
                        </form>
                         <!--/Form-->
                    </div>
                </div>               
            </div>

        </div> <!--/ Modal -->

    </div>
    <!-- /main -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>