<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "system-ui";
			background-color: #F0C1E1;
		}
		input {
			font-size: 1.2em;
			height: 40px;
			width: 200px;
			background-color: #FDE7BB;
		}
	</style>
</head>
<body>
	<?php  
	if (isset($_SESSION['message']) && isset($_SESSION['status'])) {

		if ($_SESSION['status'] == "200") {
			echo "<h1 style='color: green;'>{$_SESSION['message']}</h1>";
		}

		else {
			echo "<h1 style='color: red;'>{$_SESSION['message']}</h1>";	
		}

	}
	unset($_SESSION['message']);
	unset($_SESSION['status']);
	?>
	<div class="login" style="border:1px solid black; background-color: #C9E6F0; width: 55%; margin: 0 auto; padding: 20px; text-align: center;">
		<h1>Login here to access the Starlit Oasis Hotel Application System</h1>
		<form action="core/handleForms.php" method="POST">
			<p>
				<label for="username">Username</label>
				<input type="text" name="username">
			</p>
			<p>
				<label for="username">Password</label>
				<input type="password" name="password">
			</p>
			<p>
				<input type="submit" name="loginUserBtn" value="Login" style="width: 80px; height: 30px; padding: 5px; font-size:1em;">
			</p>
		</form>
		<p>Don't have an account? You may register <a href="register.php">here</a></p>
	</div>
	<marquee scrolldelay="60" style="background-color: #FDE7BB; margin-top:450px; bold"><b>Starlit Oasis Hotel: Urgent hiring for Certified Registered Hospitality Professional Personels!</b></marquee>

</body>
</html>
