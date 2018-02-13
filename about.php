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
        
        <script src="vertical-timeline/js/modernizr.js"></script>
        <link rel="stylesheet" href="vertical-timeline/css/reset.css"> <!-- CSS reset -->
        <link rel="stylesheet" href="vertical-timeline/css/style.css"> <!-- Resource style -->
        
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
                        <li><a href="home.php">Home</a></li>
                        <li><a href="courses.php">Courses</a></li>
                        <li class="active"><a href="about.php">About</a></li>
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

        <div class="container" id="AboutUsContainer">
            <div class="row">
                <div class="col s12">
                    <section id="cd-timeline" class="cd-container">
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="vertical-timeline/img/1.jpg" alt="Picture">
                            </div> <!-- cd-timeline-img -->

                            <div class="cd-timeline-content">
                                <h2>Who we are?</h2>
                                <p>At SH, we educate and support healthy home buying. Designing tailor made solutions catering to the needs of the home buying aspirant. We are a one-stop shop for housing solutions.
                                </p>
                                <!--<a href="#0" class="cd-read-more">Read more</a>-->
                                <span class="cd-date"><h2><b>Who?</b></h2></span>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-movie">
                                <img src="vertical-timeline/img/2.jpg" alt="Movie">
                            </div> <!-- cd-timeline-img -->

                            <div class="cd-timeline-content">
                                <h2>What we do?</h2>
                                <p>We work with the builders, financial institutions and aspirant homebuyers to bring in the best appealing solution for your dream home. Our R&amp;D team understands your need and does a 360° research on the product. 
                                </p>
                                <!--<a href="#0" class="cd-read-more">Read more</a>-->
                                <span class="cd-date"><h2><b>What?</b></h2></span>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture">
                                <img src="vertical-timeline/img/3.jpg" alt="Picture">
                            </div> <!-- cd-timeline-img -->

                            <div class="cd-timeline-content">
                                <h2>Why us?</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
                                <!--<a href="#0" class="cd-read-more">Read more</a>-->
                                <span class="cd-date"><h2><b>Why?</b></h2></span>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-location">
                                <img src="vertical-timeline/img/4.jpg" alt="Location">
                            </div> <!-- cd-timeline-img -->

                            <div class="cd-timeline-content">
                                <h2>What's in it for you?</h2>
                                <p>SH understands your requirement and values your Time and Dream. We complete our research and offer the best suitable solution ensuring 100% compliance. We do our checks on the legal documentation, quality of construction, history of the builder, facilities and amenities. A nominal conveyance fee of Rs. xxxx is charged to the buyer by SH. 
                                </p>
                                <!--<a href="#0" class="cd-read-more">Read more</a>-->
                                <span class="cd-date"><h2><b>What?</b></h2></span>
                            </div> <!-- cd-timeline-content -->
                        </div> <!-- cd-timeline-block -->

                    </section> 
                </div>
            </div>


        </div>


        <?php include('footer.php'); ?>
        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="vertical-timeline/js/main.js"></script>
        <script src="js/init.js"></script>
        
    </body>
</html>