<?php
include('../includes/db.php');
$result = mysqli_query($conn, "SELECT name, job_role, date_employed FROM employees");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <h2>Employees</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Job Role</th>
                <th>Date Employed</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['job_role']; ?></td>
                    <td><?php echo $row['date_employed']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </main>
    <footer>
        <p>Human Resource Software by JSL</p>
    </footer>
</body>
</html>

