<?php
// Handle form submission and database insertion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "21711A0578";
   

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve appointment details from POST request
    $patientName = $_POST['patientName'];
    $doctor = $_POST['doctor'];
    $appointmentDate = $_POST['appointmentDate'];
    $appointmentTime = $_POST['appointmentTime'];

    // SQL query to insert appointment details into the database
    $sql = "INSERT INTO appointments (patientName, doctor, appointmentDate, appointmentTime)
            VALUES ('$patientName', '$doctor', '$appointmentDate', '$appointmentTime')";

    if ($conn->query($sql) === TRUE) {
        echo "Appointment booked successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
