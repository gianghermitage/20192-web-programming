<?php


session_start();

$username = $_SESSION["username"];

if ($username) {
    include_once './welcome.php';
} else {
    include_once './error.php';
}
?>