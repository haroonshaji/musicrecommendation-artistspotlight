<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    // Redirect to the login page if the user is not logged in
    header("Location: login.html");
    exit();
}

// Retrieve user information from the session
$email = $_SESSION['email'];

// Connect to the database
$con = new mysqli("localhost", "root", "", "music");
if ($con->connect_error) {
    die("Failed to connect: " . $con->connect_error);
}

// Fetch user details from the database
$stmt = $con->prepare("SELECT * FROM registration WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch user details
    $userDetails = $result->fetch_assoc();
    $name = $userDetails['name'];
    $phno = $userDetails['phno'];
} else {
    // Handle the case where user details are not found
    echo "User details not found.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Include your CSS stylesheets here -->
</head>

<body>
    <!-- Include your header/navigation here -->

    <div>
        <h2>Welcome, <?php echo $name; ?>!</h2>
        <p>Email: <?php echo $email; ?></p>
        <p>Phone Number: <?php echo $phno; ?></p>
        <!-- Add other user details as needed -->

        <!-- Include a logout link -->
        <p><a href="logout.php">Logout</a></p>
    </div>

    <!-- Include your footer here -->

</body>

</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Include your CSS stylesheets here -->
</head>

<body>
    <!-- Include your header/navigation here -->

    <div>
        <h2>Welcome, <?php echo $name; ?>!</h2>
        <p>Email: <?php echo $email; ?></p>
        <p>Phone Number: <?php echo $phno; ?></p>
        <!-- Add other user details as needed -->

        <!-- Include a logout link -->
        <p><a href="logout.php">Logout</a></p>
    </div>

    <!-- Include your footer here -->

</body>

</html>
