<?php

  $conn = new mysqli("172.24.0.5", "root", "test", "projectLogin", 3306);
  if($conn->connect_errno) {
    print_r($conn->connect_error);
    echo "superbad!";
    die();
  } else {
    echo "success!";
  }

?>