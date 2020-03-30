<?php
	
	session_start();

	include('../service/functions.php');
	//include_once('db.php');
	//require('db.php');
	//require_once('db.php');

	if(isset($_POST['submit1'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username!=null)
		{
			$user = validate($username, $password);

		if(count($user) > 0 ){
			$_SESSION['user'] = $user;
			//echo "test";
			header("location:../views/home.php");
		}else{
			echo "invalid username/password";
		}
	    }	
    else
    	{
			echo "invalid username/password";
		}
		}
			
		

?>