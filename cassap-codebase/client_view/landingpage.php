<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0594667512.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>" />
   

    <title>CASSAP</title>
  </head>
  <body>
    <div>

    <?php
        require_once('header.php');
        
     ?>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://www.ashesi.edu.gh/images/news_events/news/2021/November/Ibrahim_Ashesi/Ibrahim_Abdullah_Ashesi.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                  <h3><a href="#" class="text-white">Ibrahim Abdullah’s Journey from Ashesi University to Microsoft Canada. Read more by clicking on the link</a></h3>                  
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://miro.medium.com/max/3840/1*QoF8as0t8hO43awVyWYZbg.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                  <h5> <h3><a href="#" class="text-white">Alumnus Kelvin ’14 on leveraging data science for stronger decision-making in Africa.Read more by clicking on the link</a></h3>   </h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://miro.medium.com/max/3840/1*JV2zTBT78VTXaVpX5kzueQ.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                  <h5> <h3><a href="#" class="text-white">Alumna Khadijahtu ’20 wins Falling Walls science research competition and represents Ghana at virtual Berlin Science Summit</a></h3>   </h5>
                </div>
              </div>
              
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
    <div class=" d-flex justify-content-center mb-5">
      <div class="w-75">
        <h2 class="d-flex justify-content-center m-3" style="color: #4a4a4a;">Welcome to the Ashesi Career Services Page</h2>
        <p style="color: #4a4a4a;" class="mb-5">The Career Center provides all students and alumni with a connecting link between campus life and employment. 
          Through outreach to the entire Ashesi community, the Career Center strives to enhance student career development 
          leading to successful graduation and career entry. The vision of the Ashesi Career Services Center is to create an African Renaissance 
          driven by individuals with the capacity for ethical leadership, innovation and lifelong learning.</p>
        <div class="d-flex justify-content-center cus-but">
           <button type="button" class="btn btn-danger custom-btn-1"> <a href="event.php">Events</a></button>
            <button type="button" class="btn btn-danger"><a href="bookingpage.php"> Advisors</a></button>
          </div>
      </div>
    </div>

    <?php
        require_once('footer.php');
        
     ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>