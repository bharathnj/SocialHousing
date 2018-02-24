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
    <title>SH - Voc Stage 3</title>

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
       <h4 class="voc-header center-align">Voice Of Customer - STAGE 3</h4>
        <div>
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
                    <span>2. Are you satisfied with the time taken from identifying a project to loan disbursement?</span>
                    <ol type="a">
                        <li>yes</li>
                        <li>No</li>
                    </ol>
                </ol>                
            </div>
            <div class="divider"></div>
            <div class="section hoverable">
               <ol>
                    <span>3. Do you think SH added value to your home buying process? If yes or no, please comment</span>
                </ol>                
            </div>
            <div class="divider"></div>
            <div class="section hoverable">
               <ol>
                    <span>4. Please rate your experience with SH until now between 1 to 5. 1 being the least satisfied and 5 being outstanding</span>
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
                    <span>5. Would you refer SH to your colleagues/family/friends? If yes or no, please comment</span>
                </ol>                
            </div>
            <div class="divider"></div>
             <div class="section hoverable">
               <ol>
                    <span>6. Are you willing to be contacted by another home seeker to provide your feedback on the dream home or SH?</span>
                </ol>                
            </div>
            <div class="section"></div>
        </div>  
    </div>

  	  <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
  </body>
</html>