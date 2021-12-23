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

    <title>CASSAP</title>
  </head>
  <body>
    <div>

     <?php
        require_once('header.php');
     ?>
        <main class="bg-light mt-3">
            <div class="container-lg ">
                <div class="text-center mb-5">
                    <h1 style="color: #851c2a;">BOOK AN APPOINTMENT WITH US</h1>
                    <p class="lead text-muted">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor aut consequatur excepturi! Culpa tempore, eius ea est deleniti modi architecto eveniet cum voluptates quo totam aut reiciendis corporis, et debitis.
                    </p>
                </div>
              </div>

              <div class="container mb-5">
                <div class="row">
                  <div class="col-lg-6 mb-md-3 mb-sm-3">
                      <div class="card">
                          <img src="https://www.ashesi.edu.gh/images/2018_Website/Campus_Slideshow/Ashesi_Campus_3-min.jpg" alt="" class="card-img top" style="height:250px">
                          <div class="card-body  p-4">
                              <h3 class="card-title" style="color: #851c2a;">Book for consultation</h3>
                              <p class="card-text text-muted">
                                  Hey! Have you always questioned yourself what career path will be good for you?
                                  Are you confused as to what to do in future. Click on the botton to book an appoint with one of our 
                                  seasoned advisors to help you find charter your career path.
                              </p>
                              <a href="consultation.php" class="btn text-white mt-3 e-btn  px-5" >
                                  Book
                              </a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="card">
                        <img src="https://www.ashesi.edu.gh/images/2018_Website/Student_Life/Student_Life_Banner2.jpg" alt="" class="card-img top" style="height:250px">
                        <div class="card-body  p-4">
                            <h3 class="card-title" style="color: #851c2a;">Book for CV Review</h3>
                            <p class="card-text text-muted">
                                Have you ever wondered how to can create a CV to land that job you want. 
                                Click on the book button to book a session with one of our career peer advisor to help you 
                                craft that compelling CV that can land you that job that you want.
                            </p>
                            <a href="cpa-choose.php" class="btn text-white mt-3 e-btn px-5" >
                                Book 
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