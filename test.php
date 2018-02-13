<?php
/*  session_start();
   include('mysqlInterface.php');

   if(!isset($_SESSION['Login']))
   {
    header("Location: index.php");
    die();
   }
*/
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Social Housing</title>

        <?php include('header.php'); ?>
    </head>
    <body>
        <!-- Navigation Bar Section-->
        <div class="navbar-fixed">
            <nav class="white" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="#" class="brand-logo">
                        <img class="logo" src="images/hlogov2.png" style="width: 125px; margin-left: 41px; margin-top:0px;" />
                        <a href="#" data-activates="slide-out" style="display: list-item;" class="button-collapse"><i class="material-icons">menu</i></a>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li class="active"><a href="home.php">Home</a></li>
                        <li><a href="courses.php">Courses</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a class="waves-effect waves-light btn edit-button" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </div>


        <!-- Side Nav -->
        <ul id="slide-out" class="side-nav">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="images/office.jpg">
                    </div><br>
                    <a href="#!name"><span class="white-text name">User Name</span></a>
                    <a href="#!email"><span class="white-text email">User Name@domain.com</span></a>
                </div>
            </li>
            <li><a class="waves-effect" href="home.php"><i class="material-icons">ac_unit</i>Home</a></li>
            <li><a class="waves-effect" href="courses.php"><i class="material-icons">details</i>Courses</a></li>
            <li><div class="divider"></div></li>
            <li><a class="waves-effect" href="#!"><i class="material-icons">settings</i>Settings</a></li>
            <li><a class="waves-effect" href="logout.php"><i class="material-icons">close</i>Logout</a></li>
        </ul>

        <div class="" id="homeContainer">
            <!--
<div class="carousel carousel-slider center" data-indicators="true">
<div class="carousel-fixed-item left-align">
<a class="btn waves-effect white grey-text darken-text-2" onclick="CarouselPrevious();">Prev</a>
</div>
<div class="carousel-fixed-item right-align">
<a class="btn waves-effect white grey-text darken-text-2" onclick="CarouselNext();">Next</a>
</div>
<div class="carousel-item red white-text" href="#">
<h2>First Panel</h2>
<p class="white-text">This is your first panel</p>
</div>
<div class="carousel-item amber white-text" href="#">
<h2>Second Panel</h2>
<p class="white-text">This is your second panel</p>
</div>
<div class="carousel-item green white-text" href="#">
<h2>Third Panel</h2>
<p class="white-text">This is your third panel</p>
</div>
<div class="carousel-item blue white-text" href="#">
<h2>Fourth Panel</h2>
<p class="white-text">This is your fourth panel</p>
</div>
</div>
-->
            <div class="slider fullscreen">
                <ul class="slides">
                    <li>
                        <img src="images/randomImage1.jpg"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="images/randomImage2.jpg"> <!-- random image -->
                        <div class="caption left-align">
                            <h3>Left Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="images/randomImage3.jpg"> <!-- random image -->
                        <div class="caption right-align">
                            <h3>Right Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <script>
            $(document).ready(function(){
//                $('.carousel.carousel-slider').carousel({full_width: true});
                 $('.slider').slider();
            });

            function CarouselNext(){
                $('.carousel').carousel('next');
            }

            function CarouselPrevious(){
                $('.carousel').carousel('prev');
            }
        </script>
    </body>

</html>