<?php
include('dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['role_id'];
	 $role_name = $_POST['role_name'];
	 $skin = $_POST['skin'];
	
	
	
	 
	 mysqli_query($con,"UPDATE roles SET role_name='$role_name', skin = '$skin' where role_id='$id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated Role details!');</script>";
		echo "<script>document.location='role.php'</script>";
	
} 

