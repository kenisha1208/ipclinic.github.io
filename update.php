<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM patients WHERE id = $id");
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Patient</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
        }
        form {
            width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }
        .form-row {
            margin-bottom: 12px;
        }
        label {
            display: inline-block;
            width: 150px;
        }
        input, select {
            width: 300px;
            padding: 6px;
        }
        input[type="submit"] {
            width: 100%;
            background: #4CAF50;
            color: white;
            border: none;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">EDIT PATIENT DETAILS</h2>
    <form action="update_process.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <div class="form-row">
            <label>Name:</label><input type="text" name="name" value="<?= $row['name'] ?>" required>
        </div>
        <div class="form-row">
            <label>Age:</label><input type="number" name="age" value="<?= $row['age'] ?>" required>
        </div>
        <div class="form-row">
            <label>Gender:</label>
            <select name="gender" required>
                <option value="Male" <?= ($row['gender'] == 'Male') ? 'selected' : '' ?>>Male</option>
                <option value="Female" <?= ($row['gender'] == 'Female') ? 'selected' : '' ?>>Female</option>
                <option value="Other" <?= ($row['gender'] == 'Other') ? 'selected' : '' ?>>Other</option>
            </select>
        </div>
        <div class="form-row">
            <label>Disease:</label><input type="text" name="disease" value="<?= $row['disease'] ?>" required>
        </div>
        <div class="form-row">
            <label>Rx:</label><input type="text" name="rx" value="<?= $row['rx'] ?>" required>
        </div>
        <div class="form-row">
            <label>Visit Date:</label><input type="date" name="visit_date" value="<?= $row['visit_date'] ?>" required>
        </div>
        <div class="form-row">
            <label>Followup Date:</label><input type="date" name="followup_date" value="<?= $row['followup_date'] ?>" required>
        </div>
        <div class="form-row">
            <label>Contact:</label><input type="text" name="contact" value="<?= $row['contact'] ?>" required>
        </div>
        <input type="submit" value="Update Patient">
    </form>
</body>
</html>
