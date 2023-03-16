<?php include("db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="index.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulary</title>
</head>
<body>
	<?php if(isset($_SESSION['message'])){?>
		<?= $_SESSION['message']?>
	<?php session_unset();}?>
	
<h1>Formulary of user</h1>
	<form action="insert.php" method="POST" id = "query_js">
		<label for="name">Name:</label>
		<input type="text" name="name" required><br>

		<label for="email">Email:</label>
		<input type="email" name="email" required><br>

		<label for="password">Password:</label>
		<input type="password" name="password" required><br>

		<label for="birthDay">birth Day:</label>
		<input type="date" name="birthDay" required><br>

		<label for="city">City:</label>
		<input type="text" name="city" required><br>

		<input type = "submit" name="save" value="save" ></input>
	</form>
	<br>
	<h2>List of user</h2>
	 <table id= "myTable">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Birthday</th>
				<th>City</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$query = "SELECT * FROM formulary";
			$result_formulary = mysqli_query($connection, $query);
			while ($row = mysqli_fetch_array($result_formulary)) {?>
              <tr>
			 
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['password']?></td>
				<td><?php echo $row['birthday']?></td>
				<td><?php echo $row['city']?></td>
				<td>
				<a href="edit.php?id=<?php echo $row['id']?>"> 
				   edit
				</a>
				<a href="delete.php?id=<?php echo $row['id']?>"> 
				  Delete
				</a>
			</td>
			  </tr>
		<?php 	}?>

			
		</tbody>
  </table>
  
</body>
</html>
