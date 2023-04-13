<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TNEV - LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<form action="login.php" method="post" >
		<h2>LOGIN</h2>
		<?php if(isset($_GET['error'])){ ?>
				<p class= "error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>User Name</label><br>
		<input type="text" name="uname" placeholder="User Name"><br><br>

			<label>Password</label><br>
			<input type="password" name="password" placeholder="Password"><br><br>

				<button type="submit">Login</button>
	</form>
</body>

</html>