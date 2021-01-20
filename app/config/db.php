<?php

  $conn = new mysqli("mysql", "root", "test", "projectLogin");
  if($conn->connect_errno) {
    print_r($conn->connect_error);
    echo "superbad!";
    die();
  } else {
    echo "success!";
  }

?>