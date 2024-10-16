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
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getPilotByID = getPilotByID($pdo, $_GET['pilot_id']); ?>
	<form action="core/handleForms.php?pilot_id=<?php echo $_GET['pilot_id']; ?>" method="POST">

		<div class="pilotContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getPilotByID['first_name']; ?></p>
			<p>Last Name: <?php echo $getPilotByID['last_name']; ?></p>
			<p>Gender: <?php echo $getPilotByID['gender']; ?></p>
			<p>Nationality: <?php echo $getPilotByID['nationality']; ?></p>
			<p>Date of Birth: <?php echo $getPilotByID['date_of_birth']; ?></p>
			<p>Contact Number: <?php echo $getPilotByID['contact_number']; ?></p>
			<p>License Number: <?php echo $getPilotByID['license_number']; ?></p>
            <p>Total Flight Hours: <?php echo $getPilotByID['flight_hours']; ?></p>
            <p>Years of Experience: <?php echo $getPilotByID['experience_years']; ?></p>
			<input type="submit" name="deletePilotBtn" value="Delete">
		</div>
	</form>
</body>
</html>