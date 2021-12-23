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


    <!--GETTING DATA FROM DATABASE-->
    <?php
        require __DIR__."/../controllers/dashboard_controllers.php";
        require_once('sidebar.php');
     
        $countObj = new DashController();
        $events = $countObj -> retrieveEventCount();
        $advisors = $countObj -> retrieveAdvisorCount();
        $cpas = $countObj -> retrieveCPACount();
        
        // $array = $countObj -> countsArray;
        

      
    ?>

    <div class="main-content">
        <div class="container">


            <div class="row dash-row mt-5">
                <div class="col-sm">
                    <div class="dash-items">
                        <span><i class="bi bi-people"></i></span>
                        <span class="num-count"><?= $advisors[0] ?></span>
                        <span>Career Advisors</span>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="dash-items">
                        <span><i class="bi bi-mortarboard"></i></span>
                        <span class="num-count"><?= $cpas ?></span>
                        <span>Career Peer Advisors</span>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="dash-items">
                        <span><i class="bi bi-calendar4-event"></i></i></span>
                        <span class="num-count"><?= $events ?></span>
                        <span>Events</span>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="dash-items">
                        <span><i class="bi bi-"></i></span>
                        <span class="num-count"><?= $cpas?></span>
                        <span>Career Peer Advisors</span>
                    </div>
                </div>
            </div>

            <!--Chart-->
            <div id="chartContainer" style="height: 300px; width: 100%; margin-top: 100px;"></div>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>
window.onload = function () {

//Better to construct options first and then pass it as a parameter
var options = {
	title: {
		text: "Analytics"              
	},
	data: [              
	{
		// Change type to "doughnut", "line", "splineArea", etc.
		type: "column",
		dataPoints: [
			{ label: "Events",  y: 9 },
			{ label: "Advisors", y:  4  },
			{ label: "Peer Advisors", y:4 },
			// { label: "",  y: 30  },
			// { label: "grape",  y: 28  }
		]
	}
	]
};

$("#chartContainer").CanvasJSChart(options);
}
</script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>

</html>