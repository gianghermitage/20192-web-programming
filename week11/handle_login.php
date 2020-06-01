<?php

require_once './sqlquery_v2.class.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION["username"] = $username;

$db = new SQLQuery_v2();
$db->connect("localhost", "root", "", "filmsbook");
$sql = "SELECT * FROM users u WHERE u.username = " . $username . " and password = " . $password;
$result = $db->custom($sql);
?>