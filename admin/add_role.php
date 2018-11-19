<?php 
include 'dbcon.php';
	$role_name = $_POST['role_name'];
	$skin = $_POST['skin'];
	
		mysqli_query($con,"INSERT INTO roles(role_name,skin) 
			VALUES('$role_name','$skin')")or die(mysqli_error($con));  
			echo "<script type='text/javascript'>alert('Data Successfully Saved!');</script>";
			echo "<script>window.location='role.php'</script>";   
	


?>