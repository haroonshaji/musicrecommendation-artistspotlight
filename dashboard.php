<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Get the username from the session
$username = $_SESSION['username'];

// Database connection parameters
$servername = "mysql";
$username_db = "root";
$password_db = "";
$database = "music";

// Create connection
$conn = new mysqli($servername, $username_db, $password_db, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have a 'users' table with columns 'id', 'username', 'email', etc.
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $email = $row['email'];
        // You can retrieve other user information here
    }
} else {
    echo "User not found in the database.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        section {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #666;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

    <header>
        <h1>User Profile</h1>
    </header>

    <section>
        <img src="user-avatar.jpg" alt="User Avatar">
        <h2>User Name</h2>

        <form>
            <label for="displayName">Display Name:</label>
            <input type="text" id="displayName" name="displayName" value="User Name">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="user@example.com" readonly>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="********">

            <button type="submit">Update Profile</button>
        </form>
    </section>

</body>
</html>

