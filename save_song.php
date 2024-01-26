<?php
session_start();

// Assuming you have a database connection
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['saveSong'])) {
    // Assuming you have a user authentication system, retrieve the user_id
    $userId = $_SESSION['user_id'];
    $savedSongId = $_POST['songId'];

    // Insert the saved song into the 'saved_songs' table
    $insertSql = "INSERT INTO saved_songs (user_id, song_id) VALUES ('$userId', '$savedSongId')";
    $conn->query($insertSql);

    // Redirect back to the previous page
    header("Location: {$_SESSION['referrer']}");
    exit();
}

?>
