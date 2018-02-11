<?php
    session_start();
    include('mysqlInterface.php');

    if(isset($_POST))
    {
		$email = $_POST['email'];
		$password = $_POST['pass'];
	
		$FullName = "0";
		$FirstName="0";
		$LastName="0";
		$AccessLevel=0;
		$demail="0";
		$dpassword="0";

		$sql = "SELECT * from users WHERE EmailId = '$email'";
		

		$result = mysqli_query($db,$sql);
		if(mysqli_num_rows($result) > 0)
		{
		    while($row = mysqli_fetch_assoc($result))
		    {
				$FirstName = $row['FirstName'];	
				$LastName = $row['LastName'];
				$demail = $row['EmailId'];
				$dpassword = $row['Password'];
				$AccessLevel = $row['AccessLevel'];
	    	}
		}
	
		if($email == $demail && $password == $dpassword){
			$_SESSION['Login'] = $email;
			
			$FullName = $FirstName + " " + $LastName;

			$_SESSION['UserCredentials'] = array("FullName"=> $FullName, "AccessLevel"=>$AccessLevel);	
			
			echo 'true';			 
		}else{
			
			echo 'false';
		}
	}
?>