<?php
include 'db.php';

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$disease = $_POST['disease'];
$rx = $_POST['rx'];
$visit_date = $_POST['visit_date'];
$followup_date = $_POST['followup_date'];
$contact = $_POST['contact'];

$sql = "INSERT INTO patients (name, age, gender, disease, rx, visit_date, followup_date, contact)
        VALUES ('$name', $age, '$gender', '$disease', '$rx', '$visit_date', '$followup_date', '$contact')";
?>
