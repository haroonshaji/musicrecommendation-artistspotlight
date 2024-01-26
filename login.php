<?php
$email = $_POST['email'];
$password = $_POST['password'];

$con = new mysqli("localhost", "root", "", "music");
if ($con->connect_error) {
    die("Failed to connect: " . $con->connect_error);
} else {
    $stmt = $con->prepare("select * from registration where email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        $name = $data['name'];
        $dbPassword = $data['password']; // Access the 'password' column

        if ($dbPassword == $password) {
            // Start the session (if not already started)
            session_start();

            // Set a session variable for the logged-in user
            $_SESSION['user_id'] = $data['user_id'];
            $_SESSION['username'] = $name;

            // Redirect to index.php
            header("Location: index.php");
            exit;
        } else {
            echo "<h2>Invalid email or password</h2>";
        }
    } else {
        echo "<h2>Invalid email or password</h2>";
    }
}
?>
