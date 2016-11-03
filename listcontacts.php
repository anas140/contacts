<html>
<body>

	
<?php
include('mycontact.php');

	if(isset($_POST['uname']) AND $_POST['uname']!=NULL) {
			
			?>
			<table>
				<thead>
					<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Phone no</th>
					</tr>
				</thead>
				<?php
		while($fetch = mysqli_fetch_array($result)) {
			?>
			
				<tbody>
					<tr>
						<td><?php echo $fetch['name']; ?></td>
						<td><?php echo $fetch['email']; ?></td>
						<td><?php echo $fetch['phone']; ?></td>
					</tr>
	<?php
		}
	} else {
		header('location:search.php?ERR=true');
	}

	?>
	
	
                </tbody>
			</table>
</body>
</html>