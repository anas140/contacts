<html>
<body>

	<table>
		<thead>
			<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone no</th>
			</tr>
		</thead>
		<tbody>
<?php
include('mycontact.php');

	if(isset($_POST['uname'])) {
		while($fetch = mysqli_fetch_array($result)) {
			?>
			<tr>
				<td><?php echo $fetch['name']; ?></td>
				<td><?php echo $fetch['email']; ?></td>
				<td><?php echo $fetch['phone']; ?></td>
			</tr>
			<?php
		}
	}

	?>
	
	
</tbody>
</table>
</body>
</html>