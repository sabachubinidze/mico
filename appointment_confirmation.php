<?php
// Retrieve form data
$patientName = $_POST['inputPatientName'];
$doctorName = $_POST['inputDoctorName'];
$departmentName = $_POST['inputDepartmentName'];
$phoneNumber = $_POST['inputPhone'];
$symptoms = $_POST['inputSymptoms'];
$chosenDate = $_POST['inputDate'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation</title>
</head>
<body>
    <h1>Appointment Confirmation</h1>
    <p>Patient Name: <?php echo $patientName; ?></p>
    <p>Doctor's Name: <?php echo $doctorName; ?></p>
    <p>Department's Name: <?php echo $departmentName; ?></p>
    <p>Phone Number: <?php echo $phoneNumber; ?></p>
    <p>Symptoms: <?php echo $symptoms; ?></p>
    <p>Chosen Date: <?php echo $chosenDate; ?></p>
</body>
</html>

