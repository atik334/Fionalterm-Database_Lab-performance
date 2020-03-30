<?php

       include "../service/db.php";
	    if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$type = $_POST['type'];
        $con = getConnection();
        
		$sql = "insert into users values('','{$username}','{$password}','{$email}', '{$type}')";
		if(mysqli_query($con, $sql)){
			echo "Registration done!";
		}else{
			echo "Error";
		}
	}
	
	
	?> 
		
		

	
	<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<h2>Registration Page</h2>
	<form action="registration.php" method="post">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>email:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>type:</td>
				<td><input type="text" name="type"></td>
			</tr>
			<tr>
			
			<tr>
			
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
			
			<tr>
			<td>
				<a href='login.php'>Login</a>
			</td>	
			</tr>
			
		</table>
	</form>
</body>
</html>


