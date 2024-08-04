<?php
include('../includes/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $salary = $_POST['salary'];
    $job_role = $_POST['job_role'];
    $date_employed = $_POST['date_employed'];
    $benefit_type = $_POST['benefit_type'];
    $employee_id = $_POST['employee_id'];
    $query = "INSERT INTO employees (name, email, salary, job_role, date_employed, benefit_type, employee_id) VALUES ('$name', '$email', '$salary', '$job_role', '$date_employed', '$benefit_type', '$employee_id')";
    mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiting</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <h2>Recruiting</h2>
        <form method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="salary">Salary:</label>
            <input type="number" id="salary" name="salary" step="0.01" required>
            <label for="job_role">Job Role:</label>
            <input type="text" id="job_role" name="job_role" required>
            <label for="date_employed">Date Employed:</label>
            <input type="date" id="date_employed" name="date_employed" required>
            <label for="benefit_type">Benefit Type:</label>
            <input type="text" id="benefit_type" name="benefit_type" required>
            <label for="employee_id">Employee ID:</label>
            <input type="text" id="employee_id" name="employee_id" required>
            <button type="submit">Submit</button>
        </form>
    </main>
    <footer>
        <p>Human Resource Software by JSL</p>
    </footer>
</body>
</html>

