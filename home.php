<?php
   session_start();
   include('mysqlInterface.php');
   
   if(!isset($_SESSION['Login']))
   {
    header("Location: index.php");
    die();
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Global Foundries | Home</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/custom.css" type="text/css" rel="stylesheet" />
	
	<style type="text/css">
		.preloader-background {
			display: flex;
			align-items: center;
			justify-content: center;
			background-color: #eee;
			position: fixed;
			z-index: 100;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;	
		}
	</style>
</head>
<body>
	    <!-- Navigation Bar Section-->
   <div class="navbar-fixed">
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">
            <img class="logo" src="images/logo.png" style="width: 270px; margin-left: 51px; margin-top:13px;" />
            <a href="#" data-activates="slide-out" style="display: list-item;" class="button-collapse"><i class="material-icons">menu</i></a>
        </a>
        <ul class="right hide-on-med-and-down">
            <li class="active"><a href="index.html">Home</a></li>
			<li><a href="details.html">Details</a></li>
			<li><a class="waves-effect waves-light btn modal-trigger" target="_blank" href="addpartner.html">+ Add Partner</a></li>
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
        <li><a class="waves-effect" href="index.html"><i class="material-icons">ac_unit</i>Home</a></li>
		        <li><a class="waves-effect" href="details.html"><i class="material-icons">details</i>Details</a></li>
        <li><a class="waves-effect modal-trigger" href=""><i class="material-icons">person_add</i>Add Partner</a></li>
        <li><div class="divider"></div></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons">settings</i>Settings</a></li>
		<li><a class="waves-effect" href="logout.html"><i class="material-icons">close</i>Logout</a></li>
    </ul>
	<h1>welcome</h1>
	
	  <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

  </body>
</html>