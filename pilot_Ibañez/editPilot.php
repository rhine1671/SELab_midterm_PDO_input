<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<?php $getPilotByID = getPilotByID($pdo, $_GET['pilot_id']); ?>
	<form action="core/handleForms.php" method="POST">
        <input type="hidden" name="pilot_id" value="<?php echo $getPilotByID['pilot_id']; ?>">
		<p>
			<label for="first_name">First Name: </label> 
			<input type="text" name="first_name" value="<?php echo $getPilotByID['first_name']; ?>">
		</p>
		<p>
			<label for="last_name">Last Name: </label> 
			<input type="text" name="last_name" value="<?php echo $getPilotByID['last_name']; ?>">
		</p>
		<p>
			<label for="gender">Gender: </label>
			<input type="text" name="gender" value="<?php echo $getPilotByID['gender']; ?>">
		</p>
		<p>
			<label for="nationality">Nationality: </label>
			<input type="text" name="nationality" value="<?php echo $getPilotByID['nationality']; ?>">
		</p>
		<p>
			<label for="date_of_birth">Date of Birth: </label>
			<input type="text" name="date_of_birth" value="<?php echo $getPilotByID['date_of_birth']; ?>">
		</p>
		<p>
			<label for="contact_number">Contact Number: </label>
			<input type="text" name="contact_number" value="<?php echo $getPilotByID['contact_number']; ?>"></p>
        <p>
			<label for="license_number">License Number: </label>
			<input type="text" name="license_number" value="<?php echo $getPilotByID['license_number']; ?>"></p>
        <p>
			<label for="flight_hours">Total Flight Hours: </label>
			<input type="text" name="flight_hours" value="<?php echo $getPilotByID['flight_hours']; ?>"></p>
		<p>
			<label for="experience_years">Years of Experience: </label>
			<input type="text" name="experience_years" value="<?php echo $getPilotByID['experience_years']; ?>">
			<input type="submit" name="editPilotBtn">
		</p>
	</form>
</body>
</html>