<?php
include('../includes/db.php');
$result = mysqli_query($conn, "SELECT name, job_role, benefit_type, employee_id FROM employees");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benefits</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <h2>Benefits</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Job Role</th>
                <th>Benefits Type</th>
                <th>Employee ID</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['job_role']; ?></td>
                    <td><?php echo $row['benefit_type']; ?></td>
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

