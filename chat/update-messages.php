<?php
$db = new mysqli("localhost", "id7434812_snsbadminton", "snsbadminton", "id7434812_snsbadminton");

if ($db->connect_error) {
	die("Sorry, there was a problem connecting to our database.");
}

$username = stripslashes(htmlspecialchars($_GET['username']));
$message = stripslashes(htmlspecialchars($_GET['message']));

if ($message == "" || $username == "") {
	die();
}

$result = $db->prepare("INSERT INTO messages VALUES('',?,?)");
$result->bind_param("ss", $username, $message);
$result->execute();