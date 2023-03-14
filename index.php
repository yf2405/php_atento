<?php include("db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulary</title>
</head>
<body>
<h1>Formulary of user</h1>
	<form action="insert.php" method="POST">
		<label for="name">Name:</label>
		<input type="text" name="name" required><br>

		<label for="email">Email:</label>
		<input type="email" name="email" required><br>

		<label for="password">Password:</label>
		<input type="password" name="Password" required><br>

		<label for="birth_Day">birth Day:</label>
		<input type="date" name="birth_Day" required><br>

		<label for="city">City:</label>
		<input type="text" name="city" required><br>

		<input type="submit" value="save">
	</form>
	<br>
	<h2>List of user</h2>
</body>
</html>
