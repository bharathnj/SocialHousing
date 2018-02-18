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

	//	$FullName = $FirstName + " " + $LastName;
	
		if($email == $demail && $password == $dpassword){
			$_SESSION['Login'] = $email;
			$_SESSION['UserName'] = $FirstName;
			$_SESSION['UserCredentials'] = array("FullName"=> $FullName, "AccessLevel"=>$AccessLevel);	


			$login_tym = date('Y-m-d H:i:s');
			$LoginEntrySql  = "INSERT INTO loginhistory(EmailId,LoginTime) VALUES ('$email','$login_tym')";
			$res = mysqli_query($db,$LoginEntrySql);	

			$_SESSION['LoginInsertId'] = $db->insert_id;

			$res = mysqli_affected_rows($db);
			if($res == 1){
				echo 'true';	
			}else{
				echo 'error';
			}
		}else{
			
			echo 'false';
		}
	}
?>