<?php
// insert logic at the top
$inserted = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

    if ($conn->query($sql) === TRUE) {
        $inserted = true;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Patient</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="clinic-header">
        <h1 style="font-size: 40px; color: #2e7d32; text-align: center; font-family: 'Segoe UI', sans-serif;">SHREE HARI CLINIC</h1>
    </div>

    <h2>PATIENT REGISTRATION FORM</h2>

    <?php if ($inserted): ?>
        <script>alert("Patient data has been added successfully.");</script>
    <?php endif; ?>

    <form action="https://yourphphost.com/insert.php" method="POST">


        <div class="form-row">
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="Full Name" required>
        </div>
        <div class="form-row">
            <label for="age">Age:</label>
            <input type="number" name="age" placeholder="Age" required>
        </div>
        <div class="form-row">
            <label for="gender">Gender:</label>
            <select name="gender" required>
                <option value="">Select Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>
        </div>
        <div class="form-row">
            <label for="disease">Disease:</label>
            <input type="text" name="disease" placeholder="Disease/Symptoms" required>
        </div>
        <div class="form-row">
            <label for="rx">Rx:</label>
            <input type="text" name="rx" placeholder="Prescription" required>
        </div>
        <div class="form-row">
            <label for="visit_date">Visit Date:</label>
            <input type="date" name="visit_date" required>
        </div>
        <div class="form-row">
            <label for="followup_date">Followup Date:</label>
            <input type="date" name="followup_date" required>
        </div>
        <div class="form-row">
            <label for="contact">Contact:</label>
            <input type="text" name="contact" placeholder="Contact Number" required>
        </div>
        <input type="submit" value="Add Patient">
    </form>

    <div class="link-bar">
        <a href="view.php">View All Patients</a>
        <a href="index.php">Add Another</a>
        <a href="view.php">View Records</a>
    </div>

</body>
</html>
