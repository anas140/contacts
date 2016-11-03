<?php
	include('config.php');
	$uname = $_POST['uname'];
	
	$query="select * from contacts where name LIKE '$uname%'";
	
	$result = mysqli_query($con,$query);

?>
