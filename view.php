<?php
include 'db.php';
$result = $conn->query("SELECT * FROM patients");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient Records</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            border-collapse: collapse;
            width: 90%;
            margin: auto;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        a.delete-btn {
            color: red;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">ALL PATIENT RECORDS</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th><th>Name</th><th>Age</th><th>Gender</th><th>Disease</th>
            <th>Rx</th><th>Visit Date</th><th>Followup Date</th><th>Contact</th><th>Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['age'] ?></td>
            <td><?= $row['gender'] ?></td>
            <td><?= $row['disease'] ?></td>
            <td><?= $row['rx'] ?></td>
            <td><?= $row['visit_date'] ?></td>
            <td><?= $row['followup_date'] ?></td>
            <td><?= $row['contact'] ?></td>
            <td><a class="delete-btn" href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a></td>
            <td>
    <a class="edit-btn" href="update.php?id=<?= $row['id'] ?>">Edit</a>
</td>

        </tr>
        <?php } ?>
    </table>
    <br><div style="text-align:center;"><a href="index.html">Add New Patient</a></div>
</body>
</html>
