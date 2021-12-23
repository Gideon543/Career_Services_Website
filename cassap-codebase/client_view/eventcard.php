
 <?php 
       // require_once('sidebar.php'); 
        require __DIR__."/../controllers/event_controllers.php";
       
    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0594667512.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="card.css">
    <script src="https://kit.fontawesome.com/0594667512.js" crossorigin="anonymous"></script>

    <title>CASSAP</title>
  </head>
  <body>
      
    <main>
    <?php
        require_once('header.php');
        
     ?>

            <!--Getting records from database-->
            <?php
        $eventsObj = new EventsController();
        $courseEvents = array();
        $courseEvents = $eventsObj -> displayCourseEvents();
    ?>
     <?php 
            foreach($courseEvents as $value){
                ?>
        <div class="container mt-5">
            <div class="blog-post">
                <div class="blog-post__img">
                    <img src="<?= $value['img_link']?>" alt="">
                </div>
        
                <div class="blog-post__info">
                    <div class="blog-post__date">
                        <span><?= $value['event_date']?></span>
                        <span><?= $value['event_time']?></span>
                    </div>
        
                    <h1 class="blog-post__title"><?= $value['event_title']?></h1>
        
                    <p class="blog-post__text">
                    <?= $value['event_descipt']?>
                    </p>
        
                    <a href="#" class="blog-post__cta">RSVP</a>
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

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>