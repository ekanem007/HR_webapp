<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: index.php');
}
include('../includes/db.php');
// Admin functionalities here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <h2>Manage Users</h2>
        <!-- Admin functionalities here -->
        <a href="edit_employee.php">Edit Employee Data</a>
        <a href="add_bonus.php">Add Bonuses</a>
        <a href="index.php">Logout</a>
    </main>
    <footer>
        <p>Human Resource Software by JSL</p>
    </footer>
</body>
</html>

