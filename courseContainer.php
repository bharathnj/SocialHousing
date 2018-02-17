<?php
session_start();
include('mysqlInterface.php');

if(!isset($_SESSION['Login']))
{
    header("Location: index.php");
    die();
}

$page="";
$moduleNumber = $_GET['c'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Social Housing</title>

        <?php include('header.php'); ?>
        <style>
            body{
                height: 100%;
            }
            iframe{
                position: absolute;
                width: 100%;
                height: 100%;
            }
        </style>

    </head>
    <body>
     <?php include("navigationbar.php"); ?>

    <?php include("sidenavbar.php"); ?>    
        <iframe width="1000" height="600" marginheight="0" marginwidth="0" src="modules/module<?php echo $moduleNumber; ?>.php">
            Fallback text here for unsupporting browsers, of which there are scant few.
        </iframe>



        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script> 

    </body>
</html>