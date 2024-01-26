<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Recommendations</title>
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

        #recommendations {
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
        }

        li {
            background-color: #555;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.3s ease;
        }

        li:hover {
            background-color: #777;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    
<?php
// Start or resume the session
session_start();

$userId = $_SESSION['user_id'];

// Set the referring page in the session
$_SESSION['referrer'] = $_SERVER['PHP_SELF'];

// Assuming you have a database connection
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_SESSION['user_id'];
    $songName = $_POST['songname'];

    // Fetch the genre of the entered song
    $sqlGenre = "SELECT genre FROM songs WHERE name = '$songName'";
    $resultGenre = $conn->query($sqlGenre);

    if ($resultGenre->num_rows > 0) {
        $genreRow = $resultGenre->fetch_assoc();
        $genre = $genreRow['genre'];

        // Fetch three random songs of the same genre
        $sqlRecommendations = "SELECT song_id, name, artist FROM songs WHERE genre = '$genre' AND name <> '$songName' ORDER BY RAND() LIMIT 3";
        $resultRecommendations = $conn->query($sqlRecommendations);
        $recommendations = [];

        while ($row = $resultRecommendations->fetch_assoc()) {
            $recommendations[] = $row;
        }
    }

    // If no songs of the same genre or song not found, fetch any three random songs
    if (empty($recommendations)) {
        $sqlRandom = "SELECT song_id, name, artist FROM songs ORDER BY RAND() LIMIT 3";
        $resultRandom = $conn->query($sqlRandom);

        while ($row = $resultRandom->fetch_assoc()) {
            $recommendations[] = $row;
        }
    }

    // Display the recommendations
    echo '<ul>';
    foreach ($recommendations as $recommendation) {
        echo '<li>';
        echo $recommendation['name'] . ' by ' . $recommendation['artist'];
        echo '<br>';
        echo '<form method="post" action="save_song.php">';
        echo '<input type="hidden" name="songId" value="' . $recommendation['song_id'] . '">';
        echo '<button type="submit" name="saveSong">Save</button>';
        echo '</form>';
        echo '</li>';
    }
    echo '</ul>';
}
?>


</body>
</html>