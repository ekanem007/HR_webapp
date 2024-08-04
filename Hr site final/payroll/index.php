<?php
include('../includes/db.php');
$result = mysqli_query($conn, "SELECT name, job_role, salary, bonuses, bonus_type, employee_id FROM employees");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <h2>Payroll</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Job Role</th>
                <th>Salary</th>
                <th>Bonuses</th>
                <th>Bonus Type</th>
                <th>Employee ID</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['job_role']; ?></td>
                    <td><?php echo $row['salary']; ?></td>
                    <td><?php echo $row['bonuses']; ?></td>
                    <td><?php echo $row['bonus_type']; ?></td>
                    <td><?php echo $row['employee_id']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </main>
    <footer>
        <p>Human Resource Software by JSL</p>
    </footer>
</body>
</html>

