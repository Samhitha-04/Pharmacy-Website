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
    die(json_encode(['success' => false, 'message' => 'Connection failed: ' . $conn->connect_error]));
}

$doctor_id = $_POST['doctor'];
$patient_name = $_POST['patientName'];
$appointment_date = $_POST['appointmentDate'];
$appointment_time = $_POST['appointmentTime'];

$sql = "INSERT INTO appointments (doctor_id, patient_name, appointment_date, appointment_time)
VALUES ('$doctor_id', '$patient_name', '$appointment_date', '$appointment_time')";

$response = [];
if ($conn->query($sql) === TRUE) {
    $response['success'] = true;
} else {
    $response['success'] = false;
    $response['message'] = 'Error: ' . $conn->error;
}

echo json_encode($response);

$conn->close();
?>
