<?php
session_start();

// Check if the admin is not logged in
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- ... (your HTML head and styles) -->

<body>

    <h1>Welcome to the Admin Page</h1>
    <p>This is a protected page for admins only.</p>

    <a href="admindashboard.php">Admin Dashboard</a>

    <br>

    <a href="adminlogout.php">Logout</a>

</body>

</html>
