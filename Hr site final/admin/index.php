<?php
session_start();
if (isset($_SESSION['admin'])) {
    header('Location: manage_users.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('../includes/db.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM admins WHERE username = '$username' AND password = PASSWORD('$password')";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['admin'] = $username;
        header('Location: manage_users.php');
    } else {
        $error = 'Invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <h2>Admin Login</h2>
        <form method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
            <?php if (isset($error)) echo "<p>$error</p>"; ?>
        </form>
    </main>
    <footer>
        <p>Human Resource Software by JSL</p>
    </footer>
</body>
</html>

