<?php
	session_start();
	if(isset($_SESSION['Login']))
	{
		Unset( $_SESSION['Login'] );
		Unset( $_SESSION['UserCredentials']);
		Session_Destroy();
	//	$GLOBALS['disp'] = 1;
		header("Location:index.php");
		exit;
	}else{
		
		header("Location:index.php");
	}
   ?>