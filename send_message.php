<?php
$cn = mysqli_connect('localhost','root','root');
if (!$cn) {
	echo 'Unable to connect to server';
}
if (!mysqli_select_db($cn, 'chat')) {
	echo 'Database not selected';
}

$username = $_GET['username'];
$message = $_GET['message'];
$messageTime = time();

$sql = "INSERT INTO chatHistory
	(username, message, messageTime)
		VALUES
	('$username', '$message', '$messageTime')";
$result = mysqli_query($cn, $sql) or
	die(mysqli_error($cn));














?>