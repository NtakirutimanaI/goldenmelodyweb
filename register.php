
<!DOCTYPE html>
<html>
<head>
	<title>User Registeration Form</title>
	<link rel="stylesheet" type="text/css" href="stylee.css ">
</head>
<body>
<div class="header">
	<h2>Register</h2>
	<form action="login.php" method="post">
	<div class="input-group">
		<label>Username:</label>
		<input type="text" name="username">
	</div>
	<div class="input-group">
		<label>Email:</label>
		<input type="text" name="email">
	</div>
	<div class="input-group">
		<label>Password:</label>
		<input type="text" name="password-1">
	</div>
	<div class="input-group">
		<label>Confirm-Password:</label>
		<input type="text" name="password-2">
	</div>
	<div class="input-group">
		<button type="submit" name="register" class="btn">Register</button> 
	</div>
	<p>
		Already a member?<a href="login.php">Sin in</a>
	</p>
</form>
</div>
</body>
</html>
