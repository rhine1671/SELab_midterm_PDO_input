<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilots Registration Form</title>
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
    <h3><center>Welcome to Pilot Registration Form. Please fill-out the form.</center></h3>
    <form action="core/handleForms.php" method = "POST">
        <p><label for="first_name">First Name: </label><input type="text" name="first_name"></p>
        <p><label for="last_name">Last Name: </label><input type="text" name="last_name"></p>                                
        Gender: 
        <select name="gender">
            <option value="Male">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br>
        <p><label for="nationality">Nationality: </label><input type="text" name="nationality"></p>
        <p><label for="date_of_birth">Date of Birth: </label><input type="text" name="date_of_birth"></p>
        <p><label for="contact_number">Contact Number: </label><input type="text" name="contact_number"></p>
        <p><label for="license_number">License Number: </label><input type="text" name="license_number"></p>
		<p><label for="flight_hours">Total Flight Hours: </label><input type="text" name="flight_hours"></p>
        <p><label for="experience_years">Years of Experience: </label><input type="text" name="experience_years"></p>
        <input type="submit" name="insertNewPilotBtn">
        </p>
    </form>

	<!--<a href="testGetVariable.php?pilot_name=RhinefredIbañez&nationality=Filipino">Test Get Superglobal</a>-->

    <center><table style="width:50%; margin-top: 50px;"></center>
	  <tr>
	    <th>Pilot ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Gender</th>
	    <th>Nationality</th>
	    <th>Date of Birth</th>
	    <th>Contact Number</th>
	    <th>License Number</th>
		<th>Total Flight Hours</th>
        <th>Years of Experience</th>
		<th>Date Added</th>
        <th>Action</th>
	  </tr>

	  <?php $seeAllPilotsRecords = seeAllPilotsRecords($pdo); ?>
	  <?php foreach ($seeAllPilotsRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['pilot_id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['nationality']; ?></td>
	  	<td><?php echo $row['date_of_birth']; ?></td>
	  	<td><?php echo $row['contact_number']; ?></td>
        <td><?php echo $row['license_number']; ?></td>
		<td><?php echo $row['flight_hours']; ?></td>
        <td><?php echo $row['experience_years']; ?></td>
		<td><?php echo $row['date_added']; ?></td>
	  	<td>
	  		<a href="editPilot.php?pilot_id=<?php echo $row['pilot_id'];?>">Edit</a>
	  		<a href="deletePilot.php?pilot_id=<?php echo $row['pilot_id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>


</body>
</html>