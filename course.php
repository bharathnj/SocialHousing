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




    <?php include('footer.php'); ?>
	  <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

  </body>
</html>