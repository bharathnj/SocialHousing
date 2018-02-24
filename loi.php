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
    <title>SH - LOI</title>

    <?php include('header.php'); ?>
    <style type="text/css">
    .side-nav .collapsible-body li a, .side-nav.fixed .collapsible-body li a {
        padding: 0 23.5px 0 95px;
    }    
    img{
        width: 40%;
    }
    .letter-text{
        padding-top: 20px;
        padding-left: 67px;
        padding-right: 67px;
        text-align: justify;
    }
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;  
    }
    td, th{
        padding: 8px;
    }
    .card{
        box-shadow: 3px 8px 13px 3px #b5abab;
    }
    </style>
</head>
<body>  

    <?php include("navigationbar.php"); ?>

    <?php include("sidenavbar.php"); ?>    

    <!-- LOI -->
    <div class="container">
        <div class="row">
         <div class="col s2"></div>   
        <div class="col s8">
            <div class="card">
                <div class="logo">  
                    <img src="images/hlogov2.png" />
                </div>
                <div class="letter-text">
                    Dear Social Housing team,<br><br>
                    On behalf of (company nameand no. of buyers) I/we, take the opportunity to declare our intention to purchase xx units from Social Housing, Address, Bangalore.<br><br>
                    We hereby confirm our willingness to enter into contract of purchase of the following units, as specified in the table below. We agree to follow the terms and conditions discussed in our earlier email. Attached is the email for reference.
                    <br><br>            
                    <table style="width:20%">
                      <tr>
                        <th>Units</th>
                        <th>Variance</th> 
                      </tr>
                      <tr>
                        <td>Xx</td>
                        <td>2 BHK</td> 
                      </tr>
                      <tr>
                        <td>Xx</td>
                        <td>3 BHK</td> 
                      </tr>
                    </table>
                    <br>
                    Considering the volume of units, we encourage you to liaise with a financial institution and obtain special benefits which can be in the form of subsidized interest rates, waiver of processing fee or any other benefits.
                    <br><br>
                    We would like to be updated of all the offers that Social Housing provides in future. 
                    <br><br>

                    Regards, <br><br>

                    Company Name<br><br>
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