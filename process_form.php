<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    
    // Add a message
    $submission_message = "YOUR FORM IS SUBMITTED";
    echo $submission_message;
    
}
?>
