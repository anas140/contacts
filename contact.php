<?php
	$name = $_POST['uname'];
	$email = $_POST['email'];
	$phno = $_POST['phno'];

	//$con = mysqli_connect('localhost','root','','contacts');
	include('config.php');
	$result = mysqli_query($con,"insert into contacts values('$name','$email','$phno')");
		if($result > 0) {
			header('location:search.php?MSG=true');
		} else {
			echo "not inserted";
		}


?>