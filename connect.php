<?php
  $name= $_POST['name'];
  $email= $_POST['email'];
  $username= $_POST['username'];
  $phno= $_POST['phno'];
  $password= $_POST['password'];


  $conn = new mysqli('localhost', 'root', ' ', 'music');
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  } else {
    $stmnt = $conn->prepare("INSERT INTO registration (name, email, username,  phno, password) VALUES (?, ?, ?, ?, ?)");
    if ($stmnt === false) {
      die('Prepare failed: ' . $conn->error);
    }
    $stmnt->bind_param("sssis", $name, $email, $username,  $phno, $password);
    if ($stmnt->execute()) {
      echo "REGISTRATION SUCCESSFUL";
      header('Refresh: 2; URL=login.html'); // Redirect to index.html after 2 seconds
      exit;
    } else {
      echo "Error: " . $stmnt->error;
    }
    $stmnt->close();
    $conn->close();
  }
?>