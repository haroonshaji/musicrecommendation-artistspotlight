<?php
session_start();
require_once 'config.php';

// Check if the admin is not logged in
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Fetch registered users from the database
$sqlUsers = "SELECT * FROM registration";
$resultUsers = $conn->query($sqlUsers);

$users = [];
if ($resultUsers->num_rows > 0) {
    while ($row = $resultUsers->fetch_assoc()) {
        $users[] = $row;
    }
}

// Fetch artists from the database
$sqlArtists = "SELECT * FROM artists";
$resultArtists = $conn->query($sqlArtists);

$artists = [];
if ($resultArtists->num_rows > 0) {
    while ($row = $resultArtists->fetch_assoc()) {
        $artists[] = $row;
    }
}


 
// Fetch saved songs from the database
$sqlsavesongs = "SELECT * FROM saved_songs";
$resultsavesongs = $conn->query($sqlsavesongs);

$savedSongs = []; // Change the variable name to avoid conflicts
if ($resultsavesongs->num_rows > 0) {
    while ($row = $resultsavesongs->fetch_assoc()) {
        $savedSongs[] = $row;
    }
}




// Handle adding new artist
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addArtist'])) {
    $artistName = $_POST['artistName'];
    $artistImage = $_POST['artistImage'];
    $artistDescription = $_POST['artistDescription'];
    //new field email
    $artistEmail = $_POST['artistEmail'];
   

    // Perform the necessary validation and database insertion here
    $insertSql = "INSERT INTO artists (name, image, description, email) VALUES ('$artistName', '$artistImage', '$artistDescription', ' $artistEmail')";
    $conn->query($insertSql);
}
    // Handle adding new song
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addSong'])) {
        $songName = $_POST['songName'];
        $artistName = $_POST['songArtist'];
        $genre = $_POST['songGenre'];
    
        // Perform the necessary validation and database insertion here
    
        // For demonstration purposes, let's assume you have a table named 'songs'
        $insertSongSql = "INSERT INTO songs (name, artist, genre) VALUES ('$songName', '$artistName', '$genre')";
        $conn->query($insertSongSql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            background-color: black;
            color: white;
            text-align: center;
            padding: 50px;
            font-size: 20px;
            font-family: Arial, sans-serif;
        }

        table {
            display: none;
            margin: auto;
            width: 80%;
        }

        table, th, td {
            border: 1px solid white;
            border-collapse: collapse;
            color: white;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        button {
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }

        form {
           
            margin: auto;
            width: 60%;
            text-align: left;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>

    <h1>Welcome to the Admin Dashboard</h1>
    <p>You are logged in as an admin.</p>

    
  
 <input type='hidden' name='id' >
 <button type='submit'>VIEW</button>

    <!-- Registered Users Table (Initially Hidden) -->
    <table id="registeredUsersTable">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Username</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['phno']; ?></td>
                <td><?php echo $user['username']; ?></td>
              
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- Button to Toggle Artists -->
    <button id="toggleArtists">Show Artists</button>

    <!-- Artists Table (Initially Hidden) -->
    <table id="artistsTable">
        <tr>
            <th>Artist Name</th>
            <th>Image</th>
            <th>Description</th>
        </tr>
        <?php foreach ($artists as $artist) : ?>
            <tr>
                <td><?php echo $artist['name']; ?></td>
                <td><img src="<?php echo $artist['image']; ?>" alt="<?php echo $artist['name']; ?>" style="max-width: 100px;"></td>
                <td><?php echo $artist['description']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- Button to Add New Artist -->
    <button id="addNewArtist">Add New Artist</button>

    <!-- Form to Add New Artist (Initially Hidden) -->
    <form id="addNewArtistForm" method="post" action="">
        <label for="artistName">Artist Name:</label>
        <input type="text" id="artistName" name="artistName" required>

        <label for="artistImage">Artist Image URL:</label>
        <input type="text" id="artistImage" name="artistImage" required>

        <label for="artistDescription">Artist Description:</label>
        <textarea id="artistDescription" name="artistDescription" rows="4" required></textarea>

        <label for="artistEmail">Artist Email:</label>
        <input type="text" id="artistEmail" name="artistEmail" required>

        <button type="submit" name="addArtist">Add Artist</button>
    </form>

    <!-- Button to Add New Song -->
<button id="addNewSong">Add New Song</button>

<!-- Form to Add New Song (Initially Hidden) -->
<form id="addNewSongForm" method="post" action="">
    <label for="songName">Song Name:</label>
    <input type="text" id="songName" name="songName" required>

    <label for="songArtist">Artist Name:</label>
    <!-- You can use a dropdown menu or another input field based on your requirements -->
    <input type="text" id="songArtist" name="songArtist" required>

    <label for="songGenre">Genre:</label>
    <input type="text" id="songGenre" name="songGenre" required>

    <button type="submit" name="addSong">Add Song</button>
</form>

    <button><a style="text-decoration:none;color:white" href="adminlogout.php">Logout</a></button>

    <!-- JavaScript to toggle visibility of tables and form -->
    <script>
        document.getElementById('toggleRegisteredUsers').addEventListener('click', function() {
            document.getElementById('registeredUsersTable').style.display = 'table';
            document.getElementById('artistsTable').style.display = 'none';
            document.getElementById('addNewArtistForm').style.display = 'none';
        });

        document.getElementById('toggleArtists').addEventListener('click', function() {
            document.getElementById('artistsTable').style.display = 'table';
            document.getElementById('registeredUsersTable').style.display = 'none';
            document.getElementById('addNewArtistForm').style.display = 'none';
        });

        document.getElementById('addNewArtist').addEventListener('click', function() {
            document.getElementById('addNewArtistForm').style.display = 'block';
            document.getElementById('artistsTable').style.display = 'none';
            document.getElementById('registeredUsersTable').style.display = 'none';
        });

        document.getElementById('addNewSong').addEventListener('click', function() {
        document.getElementById('addNewSongForm').style.display = 'block';
        document.getElementById('artistsTable').style.display = 'none';
        document.getElementById('registeredUsersTable').style.display = 'none';
    });
    </script>

</body>

</html>
