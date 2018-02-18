<?php
   session_start();
   include('mysqlInterface.php');
   
   if(!isset($_SESSION['Login']))
   {
    header("Location: index.php");
    die();
   }

   $page="home";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Social Housing</title>

    <?php include('header.php'); ?>
    <style type="text/css">
    .side-nav .collapsible-body li a, .side-nav.fixed .collapsible-body li a {
        padding: 0 23.5px 0 95px;
    }

    .modal { width: 30% !important ; height: 55% !important ; }  /* increase the height and width as you desire */
   
    </style>
</head>
<body>  

    <?php include("navigationbar.php"); ?>

    <?php include("sidenavbar.php"); ?>    

    <div id="homeContainer">
        <div class="slider fullscreen">
                <ul class="slides">
                   <li style="background-color: #222;">
                        <img src="images/real-estate-1-sh.jpg" style="background-color: #222;"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>"THE BEST INVESTMENT ON earth IS earth".</h3>
                            <h5 class="light grey-text text-lighten-3">we are here to help you out.</h5>
                        </div> -->
                     </li>
                    <li>
                        <img src="images/randomImage2.jpg"> <!-- random image -->
                        <div class="caption left-align">
                            <h3>CEO words</h3>
                            <div>
                                <img src="images/ceo.png" style="width: 100px;"/>
                            </div>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>

                            <div class="right-align">
                                <img id="CeoMessage1" src="images/youtube.gif" style="width: 300px; height: 200px;"/>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="images/randomImage3.jpg"> <!-- random image -->
                        <div class="caption left-align">
                            <h3>Director words</h3>
                            <div>
                                <img src="images/ceo.png" style="width: 100px;"/>
                            </div>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>

                            <div class="right-align">
                                <img id="CeoMessage2" src="images/youtube.gif" style="width: 300px; height: 200px;"/>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
    </div>

    <!-- CEO message1 -->

     <!-- Modal Structure -->
    <div id="message1" class="modal">
        <div class="modal-content">
            <h5 style="text-align: center;">CEO Message</h5>
            <iframe width="370" height="215" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
    </div>


    <div id="message2" class="modal">
        <div class="modal-content">
            <h5 style="text-align: center;">Director's Message</h5>
            <iframe width="370" height="215" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
    </div>
	  <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script type="text/javascript">
          $(document).ready(function(){
//                $('.carousel.carousel-slider').carousel({full_width: true});
                 $('.slider').slider();

                 $('#CeoMessage1').click(function(){
                    $('#message1').modal('open');
                 });

                $('#CeoMessage2').click(function(){
                    $('#message2').modal('open');
                 });

            });

    </script>
  </body>
</html>