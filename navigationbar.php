	    <!-- Navigation Bar Section-->
   <div class="navbar-fixed">
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">
            <img class="logo" src="images/hlogov2.png" style="width: 125px; margin-left: 41px; margin-top:0px;" />
            <a href="#" data-activates="slide-out" style="display: list-item;" class="button-collapse"><i class="material-icons">menu</i></a>
        </a>
        <ul class="right hide-on-med-and-down">
            <li <?php if($page=="home")echo "class='active'"; ?>><a href="home.php">Home</a></li>
			<li <?php if($page=="courses")echo "class='active'"; ?>><a href="courses.php">Courses</a></li>
            <li <?php if($page=="about")echo "class='active'"; ?>><a href="about.php">About</a></li>
            <li><a class="waves-effect waves-light btn edit-button" href="logout.php">Logout</a></li>
        </ul>
        </div>
    </nav>
    </div>