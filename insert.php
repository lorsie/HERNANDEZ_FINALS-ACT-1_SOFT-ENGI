<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
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
	<a href="index.php">Back</a>
	<h1>Fill this up to insert a new applicant for Hotel Staffs</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="first_name" required>
		</p>
		<p>
			<label for="firstName">Last Name</label> 
			<input type="text" name="last_name" required>
		</p>
		<p>
			<label for="firstName">Position</label> 
			<input type="text" name="position" required>
		</p>
		<p>
			<label for="firstName">Gender</label> 
			<input type="text" name="gender" required>
		</p>
		<p>
			<label for="firstName">Age</label> 
			<input type="text" name="age" required>
		</p>
		<p>
			<label for="firstName">Email</label> 
			<input type="email" name="email" required>
		</p>
		<p>
			<label for="firstName">Contact Number</label> 
			<input type="text" name="contact_number" required>
		</p>
		<p>
			<label for="firstName">Address</label> 
			<input type="text" name="address" required>
		</p>
        <p>
			<label for="firstName">Hire Date</label> 
			<input type="text" name="hire_date" required>
		</p>
		<p>
			<input type="submit" name="insertApplicantBtn">
		</p>
	</form>
</body>
</html>
