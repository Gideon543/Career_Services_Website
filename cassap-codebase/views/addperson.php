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
    <?php require_once('sidebar.php') ?>

    <div class="main-content">
        <div class="title">
            <h1>ADD A PERSON</h1>
        </div>


        <!--Form-->
        <form class="row g-3 m-5">
            <div class="col-md-6">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="inputName">
            </div>
            <div class="col-md-6">
                <label for="emailInput" class="form-label">Emial</label>
                <input type="email" class="form-control" id="emailInput" name="email">
            </div>
            <div class="col-12">
                <label for="inputBio" class="form-label">Bio</label>
                <textarea name = "bio" class="form-control" id="inputAddress" rows="3" placeholder="A third year student intereted in ..."></textarea>
            </div>
            <div class="col-12">
                <label for="inputTel" class="form-label">Telephone Number</label>
                <input type="text" name="telephone" class="form-control" id="inputTel" placeholder="+233542893998">
            </div>
            <div class="col-md-6">
                <label for="inputClass" class="form-label">Class</label>
                <input type="text" name="class" class="form-control" id="inputClass">
            </div>
            <div class="col-md-6">
                <label for="inputBookLink" class="form-label">Booking Link</label>
                <input type="url" name="booking-link" class="form-control" id="inputBookLink">
            </div>
            <div class="col-md-6">
                <label for="inputType" class="form-label">Type</label>
                <select id="inputType" name="type" class="form-select">
                    <option selected>Advisor</option>
                    <option>CPA</option>

                </select>
            </div>
            <div class="col-md-6">
                <label for="inputZip" class="form-label">Department</label>
                <select id="inputType" class="form-select" name="dept">
                    <option selected>Computer Science</option>
                    <option>MIS</option>
                    <option>EE</option>
                    <option>BA</option>
                    <option>ME</option>
                    <option>CE</option>

                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Add Person</button>
            </div>
        </form>
        <!--/Form-->
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>