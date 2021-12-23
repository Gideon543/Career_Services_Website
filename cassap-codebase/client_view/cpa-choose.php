<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASSAP|Choose CPA</title>
    <!--Styles.css-->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="cpa-choose.css?v=<?php echo time(); ?>">
    <!-- Bootstap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

</head>

<body>
<?php

         require __DIR__."/../controllers/cpa_controllers.php";
         $advisorObj = new CPAController();
         $allCPAs = array();
         $allCPAs = $advisorObj -> displayCPAs();
    ?>
     <?php
        require_once('header.php');
        
     ?>
    <!--Main container-->
    <div class="container p-5">
        <!--CPAs Container row-->
        <div class="cpa-row">
           <?php 
            foreach($allCPAs as $value){
                ?>
            <div class=" cpa-col">
                <!--CPA image cointainer-->
                <div class="cpa-image">
                    <img src="<?= $value["img_link"]?>" alt="CPA Name">
                </div>
                <div class="cpa-details">
                    <h3 class="cpa-name"><?= $value['name']?></h3>
                    <h5 class="cpa-dept"> <?= $value["course"]?></h5>
                    <h6 class="cpa-class"><?= $value["email"]?></h6>
                    <p class="cpa-bio"><?= $value["bio"]?></p>
                    <!--Book Button-->
                    <div class="book">
                        <button>Book</button>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>          
           
        </div>
       
    </div>
    <?php
        require_once('footer.php');
        
     ?>
    <!--/Main container-->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>