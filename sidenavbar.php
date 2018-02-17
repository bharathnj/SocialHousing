<?php
if(isset($_SESSION['Login']))
   {
       $email = $_SESSION['Login'];
       $FirstName = $_SESSION['UserName'];
   } 
?>
   <!-- Side Nav -->
<ul id="slide-out" class="side-nav">
    <li>
        <div class="user-view">
            <div class="background">
                <img src="images/office.jpg">
            </div><br>
            <a href="#!name"><span class="white-text name"><?php echo $FirstName; ?></span></a>
            <a href="#!email"><span class="white-text email"><?php echo $email; ?></span></a>
        </div>
    </li>
    <li><a class="waves-effect" href="home.php"><i class="material-icons">ac_unit</i>Home</a></li>
	<li><a class="waves-effect" href="courses.php"><i class="material-icons">details</i>Courses</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="#!"><i class="material-icons">settings</i>Settings</a></li>
	<li><a class="waves-effect" href="logout.php"><i class="material-icons">close</i>Logout</a></li>
    <ul class="collapsible collapsible-accordion">
        <li>
            <a class="collapsible-header">Dropdown<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
                <ul>
                    <li><a href="#!">First</a></li>
                    <li><a href="#!">Second</a></li>
                    <li><a href="#!">Third</a></li>
                    <li><a href="#!">Fourth</a></li>
                </ul>
            </div>
        </li>
    </ul>
</ul>
