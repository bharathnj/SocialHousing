<?php
   session_start();
   include('mysqlInterface.php');
   
   if(!isset($_SESSION['Login']))
   {
    header("Location: index.php");
    die();
   }

   $page="courses";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Social Housing</title>

    <?php include('header.php'); ?>
    <style type="text/css">
        .card-content{
            background-color: #fff;
        }
        .card .card-content .card-title {
            display: block;
            line-height: 8px;
            margin-bottom: 8px;
            font-size: 18px;
        }

        .card .card-content{
            padding: 10px;
        }
        .card .card-content .card-title i {
            line-height: 10px;
        }
    </style>
</head>
<body>
     <?php include("navigationbar.php"); ?>

    <?php include("sidenavbar.php"); ?>    

    <div class="section"></div>
    <div class="container">
        <!-- Modules section -->
        <div class="row">
            <div class="col m2">
               <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="courseContainer.php?c=0"><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Who we are ?<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Who we are ?<i class="material-icons right">close</i></span>
                        <p>description of module...</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="courseContainer.php?c=1"><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 1<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Current Housing Crisis<i class="material-icons right">close</i></span>
                        <p>description...</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="courseContainer.php?c=2" ><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 2<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">House-Buying Process<i class="material-icons right">close</i></span>
                        <p>description...</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="courseContainer.php?c=3" ><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 3<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Identification Of Product<i class="material-icons right">close</i></span>
                        <p>description...</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="courseContainer.php?c=4"><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 4<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Meet the house seeker's<i class="material-icons right">close</i></span>
                        <p>description...</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="courseContainer.php?c=5"><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 5<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Negotiate with the builder on a subsidized price <i class="material-icons right">close</i></span>
                        <p>description...</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="courseContainer.php?c=6"><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 6<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">CIBIL Score<i class="material-icons right">close</i></span>
                        <p>description...</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="courseContainer.php?c=7"><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 7<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Site Visit<i class="material-icons right">close</i></span>
                        <p>description...</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="courseContainer.php?c=8"><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 8<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Letter Of Intent<i class="material-icons right">close</i></span>
                        <p>descriptiion...</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="courseContainer.php?c=9"><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 9<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Document Collection<i class="material-icons right">close</i></span>
                        <p>description...</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="courseContainer.php?c=10"><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 10<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Booking Process<i class="material-icons right">close</i></span>
                        <p>description...</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="courseContainer.php?c=11"><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 11<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Identify Social Housing Business Partner (SHBP)<i class="material-icons right">close</i></span>
                        <p>description...</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="courseContainer.php?c=12"><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 12<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Welcome Kit<i class="material-icons right">close</i></span>
                        <p>description...</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="courseContainer.php?c=13"><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 13<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Approach Financial Institution<i class="material-icons right">close</i></span>
                        <p>description...</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="courseContainer.php?c=14"><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 14<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Important Information<i class="material-icons right">close</i></span>
                        <p>description...</p>
                    </div>
                </div> 
            </div>

            <!-- Assessment -->
             <div class="col m2">
               <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="courseContainer.php?c=14"><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 14<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Important Information<i class="material-icons right">close</i></span>
                        <p>description...</p>
                    </div>
                </div> 
            </div>
        </div>
    </div>

	  <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
  </body>
</html>