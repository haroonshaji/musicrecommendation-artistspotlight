<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Songs</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>

<?php
// Assuming you have a database connection
require_once 'config.php';

// Start or resume the session
session_start();

// Assuming you have a user authentication system, retrieve the user_id
$userId = $_SESSION['user_id'];

// Fetch saved songs for the current user
$sqlSavedSongs = "SELECT songs.song_id, songs.name, songs.artist, songs.genre FROM saved_songs
                  INNER JOIN songs ON saved_songs.song_id = songs.song_id
                  WHERE saved_songs.user_id = ?
                  GROUP BY saved_songs.song_id";

$stmt = $conn->prepare($sqlSavedSongs);
$stmt->bind_param("i", $userId);
$stmt->execute();
$resultSavedSongs = $stmt->get_result();


if ($resultSavedSongs->num_rows > 0) {
    echo '<table>';
    echo '<tr>
            <th>Song</th>
            <th>Artist</th>
            <th>Genre</th>
          </tr>';

    while ($row = $resultSavedSongs->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['artist'] . '</td>';
        echo '<td>' . $row['genre'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo '<p>No saved songs available.</p>';
}
?>

</body>
</html>
