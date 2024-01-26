<?php
// Assuming you have a PDO connection, replace the connection details accordingly
$dsn = 'mysql:host=localhost;dbname=music';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

// Function to perform a case-insensitive search in the database
function searchArtists($query, $pdo) {
    $query = '%' . strtolower($query) . '%';
    $stmt = $pdo->prepare("SELECT * FROM artists WHERE LOWER(name) LIKE :query");
    $stmt->bindParam(':query', $query, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Get the search query from the GET parameters
$artistName = isset($_GET['artist']) ? $_GET['artist'] : '';

// Perform the search
$searchResults = searchArtists($artistName, $pdo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h2>Search Results</h2>

    <?php if (empty($searchResults)): ?>
        <p>No artist found.</p>
    <?php else: ?>

    <!-- Display search results here -->
    <div id="searchResults">
        <?php foreach ($searchResults as $artist): ?>
            <div>
                <img src="<?= $artist['image'] ?>" alt="<?= $artist['name'] ?>" width="500px" style="padding-left:50px; " >
                <h3><?= $artist['name'] ?></h3>
                <p><?= $artist['description'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</body>
</html>
