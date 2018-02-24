<?php
   session_start();
   include('mysqlInterface.php');
   
   if(!isset($_SESSION['Login']))
   {
    header("Location: index.php");
    die();
   }

   $page="";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>SH - Voc Stage 2</title>

    <?php include('header.php'); ?>
    <style type="text/css">
    .side-nav .collapsible-body li a, .side-nav.fixed .collapsible-body li a {
        padding: 0 23.5px 0 95px;
    }

    .voc-header{
        color: #7f5826;
    }
    span{
        color: #139763 !important;
        font-weight: 500;
    }
     blockquote{
        border-left: 5px solid #7f5826;
    }
    </style>
</head>
<body>  

    <?php include("navigationbar.php"); ?>

    <?php include("sidenavbar.php"); ?>    

    <!-- VOC Stage 1 -->

    <div class="container">
       <h4 class="voc-header center-align">Voice Of Customer - STAGE 2 </h4>
        <div class="divider"></div>
            <div class="section hoverable">
               <ol>
                    <span>1. Are you satisfied with the information on the project provided by SH?</span>
                    <ol type="a">
                        <li>Yes</li>
                        <li>No</li>
                    </ol>
                </ol>                
            </div>
            <div class="divider"></div>
            <div class="section hoverable">
               <ol>
                    <span>2. Were you provided with support by SH team when requested?</span>
                    <ol type="a">
                        <li>Yes</li>
                        <li>No</li>
                    </ol>
                </ol>                
            </div>
            <div class="divider"></div>
            <blockquote>
                 <ol>
                    <span>Please rate your site visit experience with Aswani between 1 to 5. 1 being the least satisfied and 5 being outstanding</span>
                    <ul type="a">
                        <li>1 – least satisfied</li>
                        <li>2 – could have been better</li>
                        <li>3 – satisfied</li>
                        <li>4 – very good</li>
                        <li>5 – outstanding</li>
                    </ul>
                </ol>    
            </blockquote>

            <div class="section hoverable">
               <ol>
                    <span>3. Were you provided with all the information about the project during the site visit?</span>
                    <ol type="a">
                        <li>Yes</li>
                        <li>No</li>
                    </ol>
                </ol>                
            </div>
            <div class="divider"></div>
            <div class="section hoverable">
               <ol>
                    <span>4. Please rate your experience with Social Housing until now between 1 to 5. 1 being the least satisfied and 5 being outstanding</span>
                    <ol type="a">
                        <li>1 – least satisfied</li>
                        <li>2 – could have been better</li>
                        <li>3 – satisfied</li>
                        <li>4 – very good</li>
                        <li>5 – outstanding</li>
                    </ol>
                </ol>                
            </div>
            <div class="divider"></div>
            <div class="section hoverable">
                <ol>
                <span>5. What could have been done better to improve the overall site visit experience?</span>
                </ol>
            </div>
            <div class="divider"></div>
            <div class="section hoverable">
                <ol>
                <span>6. If any one of them has provided exceptional customer service, please name them</span>
                </ol>
            </div>
            <div class="divider"></div>
            <div class="section hoverable">
               <ol>
                <span>7. If there is anything SH or the home provider could improve, please specify</span>
                </ol>
            </div>
            <div class="divider"></div>
            <div class="section"></div>
        </div>
    </div>

  	  <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
  </body>
</html>