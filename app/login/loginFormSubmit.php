<?php
  $pw = $_POST["inputPassword"];
  $username = $_POST["inputUsername"];
  require_once("../config/db.php");
  echo $pw . "<br>" . $username;
?>