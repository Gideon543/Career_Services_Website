<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0594667512.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="card.css">

    <title>CASSAP</title>
</head>

<body>
    <div>

        <?php
        require_once('header.php');
        require __DIR__."/../controllers/advisors_controllers.php";
     ?>

        <main>

            <!--Getting records from database-->
            <?php
        $advisorObj = new AdvisorController();
        $allAdvisors = array();
        $allAdvisors = $advisorObj -> displayAdvisors();
    ?>
            <?php
                        foreach($allAdvisors as $value){
                ?>
            <div class="container my-5">
                <div class="blog-post">
                    <div class="blog-post__img">
                        <img src="<?= $value['img_link']?>" alt="">
                    </div>

                    <div class="blog-post__info">
                        <div class="blog-post__date">
                            <span>Class of<?= $value['class']?></span>
                            <span>Career Advisor</span>
                        </div>

                        <h1 class="blog-post__title"><?= $value["name"]?></h1>

                        <p class="blog-post__text">
                            <strong>Fun Fact: </strong> <?= $value["bio"]?>
                        </p>

                        <a href="<?= $value['booking_link']?>" class="blog-post__cta">BOOK</a>
                    </div>
                </div>
            </div>
            <?php
                            }
                        ?>


        </main>
        <?php
        require_once('footer.php');
        
     ?>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>