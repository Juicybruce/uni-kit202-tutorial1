<?php

// Write your PHP code here

require "./dbconn.php";

$firstName = htmlspecialchars($_POST['fname']);
$lastName = htmlspecialchars($_POST['lname']);
$DOB = htmlspecialchars($_POST['dob']);
$gender = htmlspecialchars($_POST['gender']);

$sql = "INSERT INTO Participants
        (firstName, lastName, DOB, gender) 
        VALUES 
        ('$firstName', '$lastName', '$DOB', '$gender');";

if ( $response = $conn->query($sql)) {
    $conn->close();
    header('Location: ./participants.php');
}
