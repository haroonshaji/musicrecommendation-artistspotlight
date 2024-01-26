!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $artist['name']; ?> - Artist Page</title>
</head>

<body>

    <h1><?php echo $artist['name']; ?> - Artist Page</h1>
    <img src="<?php echo $artist['image']; ?>" alt="<?php echo $artist['name']; ?>" style="max-width: 300px;">
    <p><?php echo $artist['description']; ?></p>

</body>

</html>
