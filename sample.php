<?php
// Fetch artist details from the database
$sql = "SELECT * FROM artists";
$result = $conn->query($sql);

$artists = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $artists[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artists</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>
    <h1>Artists</h1>

    <?php foreach ($artists as $artist) : ?>
        <div>
            <h2><?php echo $artist['name']; ?></h2>
            <img src="<?php echo $artist['image']; ?>" alt="<?php echo $artist['name']; ?>" style="max-width: 300px;">
            <p><?php echo $artist['description']; ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>
