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
               <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="courseContainer.php?c=1"><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 1<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="modules/module2.php" ><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 2<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="modules/module3.php" ><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 3<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="modules/module4.php" ><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 4<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="modules/module5.php" ><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 5<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="modules/module6.php" ><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 6<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="modules/module7.php" ><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 7<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="modules/module8.php" ><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 8<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="modules/module9.php" ><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 9<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div> 
            </div>

            <div class="col m2">
               <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                       <a href="modules/module10.php" ><img src="images/office.jpg"> </a>
                    </div>
                    <div class="card-content activator">
                       <span class="card-title grey-text text-darken-4 activator">Module 10<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div> 
            </div>
        </div>
    </div>

	  <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script type="text/javascript">
        function courseContainer(module){
            $.ajax({

                url: module+".php"

            }).done(function (data){

            })
        }
    </script>
  </body>
</html>