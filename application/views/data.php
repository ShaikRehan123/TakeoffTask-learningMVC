<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>View Data</title>
</head>
<body>
	<h1>Hello this is View Data page</h1>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Phone Number</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if (!empty($users)) {
				foreach ($users as $user) {
					echo "<tr>";
					echo "<td>".$user['id']."</td>";
					echo "<td>".$user['name']."</td>";
					echo "<td>".$user['phoneNumber']."</td>";
					echo "<td>".$user['email']."</td>";
					echo "</tr>";
				}
			}
			?>
		</tbody>
	</table>
	<form action="<?php echo base_url(); ?>index.php/UserController/add_user" method="post" style="margin-top: 100px;">
		<label for="name">Name</label>
		<input type="text" name="name" id="name">
		<label for="phoneNumber">Phone Number</label>
		<input type="text" name="phoneNumber" id="phoneNumber">
		<label for="email">Email</label>
		<input type="text" name="email" id="email">
		<input type="submit" value="Add User">
	</form>
</body>
</html>
