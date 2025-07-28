<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$disease = $_POST['disease'];
$rx = $_POST['rx'];
$visit_date = $_POST['visit_date'];
$followup_date = $_POST['followup_date'];
$contact = $_POST['contact'];

$sql = "UPDATE patients SET 
    name='$name', 
    age=$age, 
    gender='$gender', 
    disease='$disease',
    rx='$rx',
    visit_date='$visit_date',
    followup_date='$followup_date',
    contact='$contact'
    WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: view.php");
    exit();
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>
