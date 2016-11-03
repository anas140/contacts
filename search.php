<!DOCTYPE html>
		<html>
			<head>
			<title>serch</title>
			<script type="text/javascript">al</script>
		</head>
		<body>
		<?php
			if(isset($_REQUEST['MSG'])) {
				echo "<script>alert('Registered Successfully');</script>";
			}
		?>
		<center>
			<form method="POST" action="listcontacts.php">
			<input type="text" name="uname" placeholder="Enter Contact name"><br>
			<input type="submit" value="Search">
			</form>
		</center>

		</body>
</html>