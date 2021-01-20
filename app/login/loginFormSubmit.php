<?php
  $pw = $_POST["inputPassword"];
  $username = $_POST["inputUsername"];
  require_once("../config/db.php");
  // $conn contains db connection
  $query = 'SELECT * FROM user WHERE name = "' . $username . '";';
  $result = $conn->query($query);
  if($result->num_rows !== 1) {
    // If too many results are retrieved, something went totally wrong and we don't want to catch that.
    echo 'User not found.';
    die();
  } else {
    $retrievedPwd = $result->fetch_assoc()['password'];
    if($pw === $retrievedPwd) {
      echo 'Wow, you know your password!';
    } else {
      echo 'YOU SHALL NOT PASS';
    }
  }
  $conn->close();

?>