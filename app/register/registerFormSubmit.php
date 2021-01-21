<?php
require_once("../config/db.php");
$username = $_POST["inputUsername"];
$password = $_POST["inputPassword"];

if(checkDuplicate($username, $conn)){
    die("DOPPELTER USERNAME!");
}

if(registerUser($username, $password, $conn)){
    echo "User wurde registriert";
}else{
    echo "Es ist ein Fehler aufgetreten";
}

function checkDuplicate(string $username, object $conn): bool{
    $sql = "SELECT * FROM user WHERE username = '" . $username . "';";
    $result = $conn->query($sql);

    if($result->num_rows) {
        return true;
    }
    return false;
}

function registerUser(string $username, string $password, object $conn): bool{
    $sql = "INSERT INTO user (id, crdate, tstamp, name, password) VALUES (NULL,'" . date("Y-m-d H:i:s") . "','" . date("Y-m-d H:i:s") . "','" . $username . "', '" . $password . "')";
    
    if($conn->query($sql)){
        return true;
    }
    return false;
}