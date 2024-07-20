<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "21711A0578";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

$sql = "SELECT appointments.id, doctors.name AS doctor_name, appointments.patient_name, appointments.appointment_date AS date, appointments.appointment_time AS time
        FROM appointments
        JOIN doctors ON appointments.doctor_id = doctors.id";
$result = $conn->query($sql);

$appointments = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $appointments[] = $row;
    }
}

echo json_encode($appointments);

$conn->close();
?>

