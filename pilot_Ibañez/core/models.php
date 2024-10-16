<?php 
require_once 'dbConfig.php';

function insertIntoPilotRecords($pdo, $first_name, $last_name, $gender, $nationality, $date_of_birth, 
$contact_number, $license_number, $flight_hours, $experience_years) {

    $sql = "INSERT INTO pilot_records (first_name, last_name, gender, nationality, date_of_birth,
    contact_number, license_number, flight_hours, experience_years) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$first_name, $last_name, $gender, $nationality, $date_of_birth,
    $contact_number, $license_number, $flight_hours, $experience_years]);

    if ($executeQuery) {
        return true;
    }
}

function seeAllPilotsRecords($pdo) {
    $sql = "SELECT * FROM pilot_records";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery) {
        return $stmt->fetchAll();
    }
}

function getPilotByID($pdo, $pilot_id) {
$sql = "SELECT * FROM pilot_records WHERE pilot_id = ?";
$stmt = $pdo->prepare($sql);
if ($stmt->execute([$pilot_id])) {
    return $stmt->fetch();
    }
}

function updateAPilot($pdo, $pilot_id, $first_name, $last_name, $gender, $nationality, $date_of_birth, 
$contact_number, $license_number, $flight_hours, $experience_years) {

    $sql = "UPDATE pilot_records 
				SET first_name = ?, 
					last_name = ?, 
					gender = ?, 
					nationality = ?, 
					date_of_birth = ?, 
					contact_number = ?, 
					license_number = ?, 
                    flight_hours = ?,
                    experience_years = ?
			WHERE pilot_id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$first_name, $last_name, $gender, $nationality, $date_of_birth,
    $contact_number, $license_number, $flight_hours, $experience_years, $pilot_id]);

	if ($executeQuery) {
		return true;
	}
}

function deleteAPilot($pdo, $pilot_id) {

	$sql = "DELETE FROM pilot_records WHERE pilot_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$pilot_id]);

	if ($executeQuery) {
		return true;
	}

}

?>