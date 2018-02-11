<?php

	session_start();
    include('mysqlInterface.php');
	if(isset($_SESSION['Login']))
	{
		$id = $_SESSION['LoginInsertId'];
		$logout_tym = date('Y-m-d H:i:s');

		$LogoutEntrySql = "UPDATE loginhistory set LogoutTime='$logout_tym' where LoginActivityId = $id";
		$res = mysqli_query($db,$LogoutEntrySql);	

		Unset( $_SESSION['Login'] );
		Unset( $_SESSION['UserCredentials']);
		Session_Destroy();
		header("Location:index.php");
		exit;
	}else{
		
		header("Location:index.php");
	}
   ?>