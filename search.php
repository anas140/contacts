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
			if(isset($_REQUEST['ERR'])) {
				echo "<script>alert('contats not avalabe try to research');</script>";
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