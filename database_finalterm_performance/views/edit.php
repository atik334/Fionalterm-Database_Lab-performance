<?php
	session_start();
	//print_r($_SESSION['user']);
    //include "service/db.php";
	require_once('../service/functions.php');
	
	$result = getUsers();


	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
        $con = getConnection();
        
		$sql = "UPDATE users SET username='$username',password='$password',email='$email' where id='$id' ; ";
		if(mysqli_query($con, $sql)){
			$message = "Update Successfully";
			 header("Location: view_users.php");
		}else{
			echo "Error";
		}
			
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>

		<a href="home.php"> Back</a> | 
		<a href="logout.php"> logout</a> 
		<br/>
		
		<br><br>
		

	
		
		
	
<form method="post">
	<table>


<?php	while($row = mysqli_fetch_assoc($result)){ ?>
	    	<tr>
				<td>Id:</td>
				<td><input type="text" readonly=""name="id" value="<?=$row['id']?>" ></td>
			</tr>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" value="<?=$row['username']?>" ></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="" name="password" value="<?=$row['password']?>"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="" name="email" value="<?=$row['email']?>"></td>
			</tr>
			

			<tr>
				<td>Type:</td>
				<td><input type="" name="name" value="<?=$row['type']?>"></td>
			</tr>
			
			<tr>
			
			<tr>
			
				<td></td>
				<td><input type="submit" name="submit" value="Confirm"></td>
			</tr>
			
			
			<?php } ?>
		</table>
	</form>
	
</body>
</html>