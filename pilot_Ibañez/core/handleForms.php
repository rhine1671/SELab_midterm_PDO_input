<?php
require_once 'dbConfig.php';
require_once 'models.php';

if(isset($_POST['insertNewPilotBtn'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $date_of_birth = $_POST['date_of_birth'];
    $contact_number = $_POST['contact_number'];
    $license_number = $_POST['license_number'];
    $flight_hours = $_POST['flight_hours'];
    $experience_years = $_POST['experience_years'];
    
    $query = insertIntoPilotRecords($pdo, $first_name, $last_name, $gender, $nationality, $date_of_birth, 
    $contact_number, $license_number, $flight_hours, $experience_years);

    if ($query) {
        header("Location: ../index.php");
    }
    else {
        echo "Query failed";
    }
}

if (isset($_POST['editPilotBtn'])) {
	$pilot_id = $_POST['pilot_id'];
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$gender = trim($_POST['gender']);
	$nationality = trim($_POST['nationality']);
	$date_of_birth = trim($_POST['date_of_birth']);
	$contact_number = trim($_POST['contact_number']);
    $license_number = trim($_POST['license_number']);
    $flight_hours = trim($_POST['flight_hours']);
	$experience_years = trim($_POST['experience_years']);

	if (!empty($pilot_id) && !empty($first_name) && !empty($last_name) && !empty($gender) && !empty($nationality) && !empty($date_of_birth) 
    && !empty($contact_number) && !empty($license_number) && !empty($flight_hours) && !empty($experience_years)) {

		$query = updateAPilot($pdo, $pilot_id, $first_name, $last_name, $gender, $nationality, $date_of_birth, 
        $contact_number, $license_number, $flight_hours, $experience_years);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}

if (isset($_POST['deletePilotBtn'])) {

	$query = deleteAPilot($pdo, $_GET['pilot_id']);

	if ($query) {
		header("Location: ../index.php");
		exit;
	}
	else {
		echo "Deletion failed";
	}
}


?>