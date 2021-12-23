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

    <title>Hello, world!</title>
  </head>
  <body>
    <div>

    <?php
        require_once('header.php');
        
     ?>

        <main class="bg-light mt-3">
            <div class="container-lg ">
                <div class="text-center mb-5">
                    <h1 style="color: #851c2a;">Welcome to the event page</h1>
                    <p class="lead text-muted">
                        Hello, we hope the semester is going on well with you. The career services
                        department has a lot of program in store for you to help you shape your career trajectory.
                        View upcoming general or course specific events to get an insight as to what is expected of you
                        as a student hoping to land an internship or a job.
                    </p>
                </div>
              </div>

              <div class="container mb-5">
                <div class="row">
                  <div class="col-lg-6 mb-md-3 mb-sm-3">
                      <div class="card">
                          <img src="https://www.ashesi.edu.gh/images/news_events/news/2021/September/career_placement/Ashesi_Engineering_Class_2019.jpg" alt="" class="card-img top" style="height:250px">
                          <div class="card-body text-center py-4">
                              <h3 class="card-title" style="color: #851c2a;">General Events</h3>
                              <p class="card-text mx-5 text-muted">
                                  Are you excited about the semester? The career services have a tone of event for you. 
                                  Click on the explore to find out the general events we have for you this semester. 
                              </p>
                              <a href="generalevent.php" class="btn text-white mt-3 e-btn" >
                                  Explore
                              </a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="card">
                        <img src="https://www.ashesi.edu.gh/images/2018_Website/Ashesi_ETH/Ashesi_Mechatronics_Web_b.jpg" alt="" class="card-img top" style="height:250px">
                        <div class="card-body text-center py-4">
                            <h3 class="card-title" style="color: #851c2a;">Course Specific Event</h3>
                            <p class="card-text mx-5 text-muted">
                               Have you always been wondering how career will be like in your various field. 
                               Click explore to find out the course specific events we have for you this semester. 
                            </p>
                            <a href="eventcard.php" class="btn text-white mt-3 e-btn" >
                                Explore
                            </a>
                        </div>
                    </div>
                </div>
              </div>
              </div>

                    
                </div>
            </div>
        </main>

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