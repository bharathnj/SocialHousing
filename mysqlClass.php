<?php 

	include('mysqlInterface.php'); 
    
    function add($id,$email,$password,$type,$status)
    {
        global $db;
        $sql = "INSERT INTO user_login(id,email,password,type,status,created_timestamp) VALUES('$id','$email','$password','$type','$status',now())";
        $val = mysqli_query($db,$sql);
        return $val;
    }
    
    function inactivate($id)
    {
        global $db;
        $sql = "UPDATE user_login SET status='0' WHERE email = $id";
        $r = mysqli_query($db,$sql);
        return $r;
    }
?>